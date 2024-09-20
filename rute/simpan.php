<?php
include "koneksi.php";
$id_rute=$_POST['id_rute'];
$tujuan=$_POST['tujuan'];
$rute_awal=$_POST['rute_awal'];
$rute_akhir=$_POST['rute_akhir'];
$harga=$_POST['harga'];
$id_transportasi=$_POST['id_transportasi'];
$query=mysqli_query($koneksi,"insert into rute(id_rute,tujuan,rute_awal,rute_akhir,harga,id_transportasi) values('$id_rute','$tujuan','$rute_awal','$rute_akhir','$harga','$id_transportasi')");
header('location:?page=rute/index');
?>