<?php
include "koneksi.php";
$id_pemesanan=$_GET['id_pemesanan'];
$query=mysqli_query($koneksi,"delete from pemesanan where id_pemesanan='$id_pemesanan'");
header('location:?page=pemesanan/index');
?>