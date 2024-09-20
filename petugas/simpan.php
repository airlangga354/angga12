<?php
include "koneksi.php";
$id_petugas=$_POST['id_petugas'];
$username=$_POST['username'];
$password=$_POST['password'];
$nama_petugas=$_POST['nama_petugas'];
$id_level=$_POST['id_level'];
$query=mysqli_query($koneksi,"insert into petugas(id_petugas,username,password,nama_petugas,id_level) values('$id_petugas','$username','$password','$nama_petugas','$id_level')");
header('location:?page=petugas/index');
?>