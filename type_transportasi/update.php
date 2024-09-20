<?php
include "koneksi.php";
$id_type_transportasi=$_POST['id_type_transportasi'];
$nama_type=$_POST['nama_type'];
$keterangan=$_POST['keterangan'];
$query=mysqli_query($koneksi,"update type_transportasi set nama_type='$nama_type',keterangan='$keterangan' where id_type_transportasi='$id_type_transportasi'");
header('location:?page=type_transpportasi/index');
?>