<!DOCTYPE html>
<html>
<head>
	<title>TOKO NOVITA</title>
</head>
<body>
 
	<h2>DATA TOKO NOVITA</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH BARANG</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>KodeBarang</th>
			<th>NamaBarang</th>
			<th>SatuanBarang</th>
			<th>StokBarang</th>
            <th>HargaBarang</th>
            <th>Opsi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_toko");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kodeBarang']; ?></td>
				<td><?php echo $d['namaBarang']; ?></td>
                <td><?php echo $d['satuanBarang']; ?></td>
                <td><?php echo $d['stokBarang']; ?></td>
                <td><?php echo $d['hargaBarang']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['idBarang']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['idBarang']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>