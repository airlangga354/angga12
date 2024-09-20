<?php
include "koneksi.php";
$id_pemesanan=$_GET['id_pemesanan'];
$query=mysqli_query($koneksi,"select * from pemesanan where id_pemesanan='$id_pemesanan'");
$data=mysqli_fetch_array($query);
?>
<h1 class="mt-4">Edit Data</h1>
<form action="?page=pemesanan/update" method="POST">
    <div class="mb-3">
        <label class="form-label">id_pemesanan</label>
        <input type="text" class="form-control" name="id_pemesanan" value="<?php echo $data['id_pemesanan'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">kode_pemesanan</label>
        <input type="text" class="form-control" name="kode_pemesanan" value="<?php echo $data['kode_pemesanan'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">tanggal_pemesanan</label>
        <input type="text" class="form-control" name="tanggal_pemesanan" value="<?php echo $data['tanggal_pemesanan'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">tempat_pemesanan</label>
        <input type="text" class="form-control" name="tempat_pemesanan" value="<?php echo $data['tempat_pemesanan'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">id_pelanggan</label>
        <input type="text" class="form-control" name="id_pelanggan" value="<?php echo $data['id_pelanggan'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">kode_kursi</label>
        <input type="text" class="form-control" name="kode_kursi" value="<?php echo $data['kode_kursi'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">id_rute</label>
        <input type="text" class="form-control" name="id_rute" value="<?php echo $data['id_rute'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">tujuan</label>
        <input type="text" class="form-control" name="tujuan" value="<?php echo $data['tujuan'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">tanggal_berangkat</label>
        <input type="text" class="form-control" name="tanggal_berangkat" value="<?php echo $data['tanggal_berangkat'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">jam_cekin</label>
        <input type="text" class="form-control" name="jam_cekin" value="<?php echo $data['jam_cekin'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">jam_berangkat</label>
        <input type="text" class="form-control" name="jam_berangkat" value="<?php echo $data['jam_berangkat'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">total_bayar</label>
        <input type="text" class="form-control" name="total_bayar" value="<?php echo $data['total_bayar'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">id_petugas</label>
        <input type="text" class="form-control" name="id_petugas" value="<?php echo $data['id_petugas'] ?>">
    </div>
    <button type="submit" class="btn btn-info">Simpan</button>
</form>