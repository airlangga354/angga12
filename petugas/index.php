<?php
include "koneksi.php";
?>
<h1>Data Petugas</h1>
<a href="?page=petugas/tambah" class="btn btn-info"> Tambah Data </a>
    <table border="1"class="table table-info table-striped">
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="p-3 mb-2 bg-success-subtle text-emphasis-success">
  <table class="table">
  <thead>
    <tr class="table-dark">
        <td>ID_PETUGAS</td>
        <td>USERNAME</td>
        <td>PASSWORD</td>
        <td>NAMA_PETUGAS</td>
        <td>ID_LEVEL</td>
        <td>AKSI</td>
    </tr>
    </thead>
    <tbody> 
     <?php
    $query=mysqli_query($koneksi,"select * from petugas");
    while($data=mysqli_fetch_array($query)){
     ?> 
<tr>
    <td><?php echo $data['id_petugas']  ?></td>
    <td><?php echo $data['username']  ?></td>
    <td><?php echo $data['password']  ?></td>
    <td><?php echo $data['nama_petugas']  ?></td>
    <td><?php echo $data['id_level']  ?></td>
    <td>
            <button class="btn btn-outline-dark"><a href="?page=petugas/hapus&id_petugas=<?php echo $data['id_petugas'] ?>">hapus</a></button>
            <button class="btn btn-outline-dark"><a href="?page=petugas/edit&id_petugas=<?php echo $data['id_petugas'] ?>">edit</a></button>
    </td>
        <?php
    }
    ?>
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>