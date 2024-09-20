<?php
include "koneksi.php";
$id_level=$_GET['id_level'];
$query=mysqli_query($koneksi,"delete from level where id_level='$id_level'");
header('location:?page=level/index');
?>