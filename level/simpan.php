<?php
include "koneksi.php";
$id_level=$_POST['id_level'];
$nama_level=$_POST['nama_level'];
$query=mysqli_query($koneksi,"insert into level(id_level,nama_level) values('$id_level','$nama_level')");
header('location:?page=level/index');
?>