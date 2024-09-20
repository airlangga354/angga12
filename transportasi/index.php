<?php
include "koneksi.php";
?>
<h1>Transportasi</h1>
<a href="?page=transportasi/tambah" class="btn btn-info"> Tambah Data </a>
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
        <td>ID_TRANSPORTASI</td>
        <td>KODE</td>
        <td>JUMLAH_KURSI</td>
        <td>KETERANGAN</td>
        <td>ID_TYPE_TRANSPORTASI</td>
        <td>AKSI</td>
    </tr>
     <?php
     $i = 1;
    $query=mysqli_query($koneksi,"select * from transportasi");
    while($data=mysqli_fetch_array($query)){
     ?> 
<tr>
    <td><?php echo $i++  ?></td>
    <td><?php echo $data['kode']  ?></td>
    <td><?php echo $data['jumlah_kursi']  ?></td>
    <td><?php echo $data['keterangan']  ?></td>
    <td><?php echo $data['id_type_transportasi']  ?></td>
    <td>
            <button class="btn btn-outline-dark"><a href="?page=transportasi/hapus&id_transportasi=<?php echo $data['id_transportasi'] ?>">hapus</a></button>
            <button class="btn btn-outline-dark"><a href="?page=transportasi/edit&id_transportasi=<?php echo $data['id_transportasi'] ?>">edit</a></button>
    </td>
        <?php
    }
    ?>
     </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>