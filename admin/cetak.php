<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA DARI DATABASE DENGAN PHP - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<center>
 
		<h2>CETAK PRINT DATA DARI DATABASE DENGAN PHP<br/><a href="https://www.malasngoding.com">WWW.MALASNGODING.COM</a></h2>
 
 
		<?php 
		include 'koneksi.php';
		?>
 
		<table border="1">
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>Nama Barang</th>
				<th>Jumlah</th>
			</tr>
			<?php 
			$no = 1;
			$sql = mysqli_query($koneksi,"select * from detail_transaksi");
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['tanggal']; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['jumlah']; ?></td>
			</tr>
			<?php 
			}
			?>
		</table>
 
		<br/>
 
		<a href="cetak.php" target="_blank">CETAK</a>
 
 
	</center>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA DARI DATABASE DENGAN PHP - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN BARANG</h2>
		<h4>WWW.MALASNGODING.COM</h4>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from detail_transaksi");
		while($data = mysqli_fetch_array($sql)){
			<th style="width: 3%">#</th>
			<th>Kode</th>
			<th>Nama Pelanggan</th>
			<th>Status</th>
			<th>Pembayaran</th>
			<th>Total</th>
			<th>Outlet Pembayaran</th>
		</tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['tanggal']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['jumlah']; ?></td>
			<td><?= $no++; ?></td>
                        <td><?= $data['kode_invoice']; ?></td>
                        <td><?= $data['nama_member']; ?></td>
                        <td><?= $data['status']; ?></td>
                        <td><?= $data['status_bayar']; ?></td>
                        <td><?= 'Rp ' . number_format($data['total_harga']); ?></td>
                        <td><?= $data['nama_outlet']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>