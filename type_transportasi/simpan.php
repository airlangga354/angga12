<?php
include "koneksi.php";
$id_type_transportasi=$_POST['id_type_transportasi'];
$nama_type=$_POST['nama_type'];
$keterangan=$_POST['keterangan'];
$query=mysqli_query($koneksi,"insert into type_transportasi(id_type_transportasi,nama_type,keterangan) values('$id_type_transportasi','$nama_type','$keterangan')");
header('location:?page=type_transportasi/index');
?>