<?php
include"koneksi.php";
$id_transportasi=$_GET['id_transportasi'];
$query=mysqli_query($koneksi,"select * from transportasi where id_transportasi='$id_transportasi'");
$data=mysqli_fetch_array($query);
?>
<h1 class="mt-4">Edit Data</h1>
<form action="?page=transportasi/update" method="POST">
    <div class="mb-3">
        <input type="hidden" class="form-control" name="id_transportasi" value="<?php echo $data['id_transportasi'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">kode</label>
        <input type="text" class="form-control" name="kode" value="<?php echo $data['kode'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">jumlah_kursi</label>
        <input type="text" class="form-control" name="jumlah_kursi" value="<?php echo $data['jumlah_kursi'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">keterangan</label>
        <input type="text" class="form-control" name="keterangan" value="<?php echo $data['keterangan'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">id_type_transportasi</label>
        <input type="text" class="form-control" name="id_type_transportasi" value="<?php echo $data['id_type_transportasi'] ?>">
    </div>
    <button type="submit" class="btn btn-info">Simpan</button>
</form>