<?php
include "koneksi.php";
$id_penumpang=$_POST['id_penumpang'];
$username=$_POST['username'];
$password=$_POST['password'];
$nama_penumpang=$_POST['nama_penumpang'];
$alamat_penumpang=$_POST['alamat_penumpang'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$telefone=$_POST['telefone'];
$query=mysqli_query($koneksi,"insert into penumpang(id_penumpang,username,password,nama_penumpang,alamat_penumpang,tanggal_lahir,jenis_kelamin,telefone) values('$id_penumpang','$username','$password','$nama_penumpang','$alamat_penumpang','$tanggal_lahir','$jenis_kelamin','$telefone')");
header('location:?page=penumpang/index');
?>