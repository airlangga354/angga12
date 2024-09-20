<?php
include "koneksi.php";
$id_user=$_POST['id_user'];
$username=$_POST['username'];
$password=$_POST['password'];
$nama=$_POST['nama'];
$level=$_POST['level'];

$query=mysqli_query($koneksi,"update users set username='$username',password='$password',nama='$nama',level='$level' where id_user='$id_user'");
header('location:?page=users/index');
?>