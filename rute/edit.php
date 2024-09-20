<?php
include"koneksi.php";
$id_rute=$_GET['id_rute'];
$query=mysqli_query($koneksi,"select * from rute where id_rute='$id_rute'");
$data=mysqli_fetch_array($query);
?>
<h1 class="mt-4">Edit Data</h1>
<form action="?page=rute/update" method="POST">
    <div class="mb-3">
        <label class="form-label">id_rute</label>
        <input type="text" class="form-control" name="id_rute" value="<?php echo $data['id_rute'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">tujuan</label>
        <input type="text" class="form-control" name="tujuan" value="<?php echo $data['tujuan'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">rute_awal</label>
        <input type="text" class="form-control" name="rute_awal" value="<?php echo $data['rute_awal'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">rute_akhir</label>
        <input type="text" class="form-control" name="rute_akhir" value="<?php echo $data['rute_akhir'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">harga</label>
        <input type="text" class="form-control" name="harga" value="<?php echo $data['harga'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">id_transportasi</label>
        <input type="text" class="form-control" name="id_transportasi" value="<?php echo $data['id_transportasi'] ?>">
    </div>
    <button type="submit" class="btn btn-info">Simpan</button>
</form>