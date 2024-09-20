<?php
include "koneksi.php";
$id_transportasi=$_GET['id_transportasi'];
$query=mysqli_query($koneksi,"delete from transportasi where id_transportasi='$id_transportasi'");
header('location:?page=transportasi/index');
?>