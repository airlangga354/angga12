<?php
include "koneksi.php";
?>
<h1>Pemesanan</h1>
<a href="?page=pemesanan/tambah" class="btn btn-info"> Tambah Data </a>
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
    <tr  class="table-dark">
        <td>ID_PEMESANAN</td>
        <td>KODE_PEMESANAN</td>
        <td>TANGGA_PEMESANAN</td>
        <td>TEMPAT_PEMESANAN</td>
        <td>ID_PELANGGAN</td>
        <td>KODE_KURSI</td>
        <td>ID_RUTE</td>
        <td>TUJUAN</td>
        <td>TANGGAL_BERANGKAT</td>
        <td>JAM_CEKIN</td></td>
        <td>JAM_BERANGKAT</td>
        <td>TOTAL_BAYAR</td>
        <td>ID_PETUGAS</td>
        <td>AKSI</td>
    </tr>
    </thead>
    <tbody>
     <?php
    $query=mysqli_query($koneksi,"select * from pemesanan");
    while($data=mysqli_fetch_array($query)){
     ?> 
<tr>
    <td><?php echo $data['id_pemesanan']  ?></td>
    <td><?php echo $data['kode_pemesanan']  ?></td>
    <td><?php echo $data['tanggal_pemesanan']  ?></td>
    <td><?php echo $data['tempat_pemesanan']  ?></td>
    <td><?php echo $data['id_pelanggan']  ?></td>
    <td><?php echo $data['kode_kursi']  ?></td>
    <td><?php echo $data['id_rute']  ?></td>
    <td><?php echo $data['tujuan']  ?></td>
    <td><?php echo $data['tanggal_berangkat']  ?></td>
    <td><?php echo $data['jam_cekin']  ?></td>
    <td><?php echo $data['jam_berangkat']  ?></td>
    <td><?php echo $data['total_bayar']  ?></td>
    <td><?php echo $data['id_petugas']  ?></td>
    <td>
            <button class="btn btn-outline-dark"><a href="?page=pemesanan/hapus&id_pemesanan=<?php echo $data['id_pemesanan'] ?>">hapus</a></button>
            <button class="btn btn-outline-dark"><a href="?page=pemesanan/edit&id_pemesanan=<?php echo $data['id_pemesanan'] ?>">edit</a></button>
    </td>
        <?php
    }
    ?>
</tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>