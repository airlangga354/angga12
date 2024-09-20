<?php
include "koneksi.php";
$id_user=$_GET['id_user'];
$query=mysqli_query($koneksi, "delete from users where id_user='$id_user'");
header('location:?page=users/index');
?>