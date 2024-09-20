<?php
include "koneksi.php";
$id_user=$_POST['id_user'];
$username=$_POST['username'];
$password=$_POST['password'];
$nama=$_POST['nama'];
$level=$_POST['level'];
$query=mysqli_query($koneksi,"insert into users(id_user,username,password,nama,level) values('$id_user','$username','$password','$nama','$level'
)");
header('location:?page=users/index');
?>