<?php
include "koneksi.php";
$id_type_transportasi=$_GET['id_type_transportasi'];
$query=mysqli_query($koneksi,"delete from type_transportasi where id_type_transportasi='$id_type_transportasi'");
header('location:?page=id_type_transportasi/index');
?>