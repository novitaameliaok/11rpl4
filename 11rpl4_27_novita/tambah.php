<!DOCTYPE html>
<html>
<head>
	<title>TOKO NOVITA</title>
</head>
<body>
 
	<h2>TOKO NOVITA</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH BARANG</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>KodeBarang</td>
				<td><input type="text" name="KodeBarang"></td>
			</tr>
			<tr>
				<td>NamaBarang</td>
				<td><input type="number" name="NamaBarang"></td>
			</tr>
			<tr>
				<td>SatuanBarang</td>
				<td><input type="text" name="SatuanBarang"></td>
			</tr>
			<tr>
            <tr>
				<td>StokBarang</td>
				<td><input type="text" name="StokBarang"></td>
			</tr>
            <tr>
				<td>HargaBarang</td>
				<td><input type="text" name="HargaBarang"></td>
			</tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>