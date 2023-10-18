<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$Kode = $_POST['KodeBarang'];
$Nama= $_POST['NamaBarang'];
$Satuan = $_POST['SatuanBarang'];
$Stok = $_POST['StokBarang'];
$Harga= $_POST['HargaBarang'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into tb_toko values('','$Kode','$Nama','$Satuan','$Stok','$Harga')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>