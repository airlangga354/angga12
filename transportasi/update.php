<?php
include "koneksi.php";
$id_transportasi=$_POST['id_transportasi'];
$kode=$_POST['kode'];
$jumlah_kursi=$_POST['jumlah_kursi'];
$keterangan=$_POST['keterangan'];
$id_type_transportasi=$_POST['id_type_transportasi'];
$query=mysqli_query($koneksi,"update transportasi set kode='$kode',jumlah_kursi='$jumlah_kursi',keterangan='$keterangan',id_type_transportasi='$id_type_transportasi' where id_transportasi='$id_transportasi'");
header('location:?page=transportasi/index');
?>