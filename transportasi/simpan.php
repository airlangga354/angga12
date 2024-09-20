<?php
include "koneksi.php";
$kode=$_POST['kode'];
$jumlah_kursi=$_POST['jumlah_kursi'];
$keterangan=$_POST['keterangan'];
$id_type_transportasi=$_POST['id_type_transportasi'];
$query=mysqli_query($koneksi,"insert into `transportasi`(kode,jumlah_kursi,keterangan,id_type_transportasi) values('$kode','$jumlah_kursi','$keterangan','$id_type_transportasi')");
header('location:?page=transportasi/index');
?>