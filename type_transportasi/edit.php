<?php
include"koneksi.php";
$id_type_transportasi=$_GET['id_type_transportasi'];
$query=mysqli_query($koneksi,"select * from type_transportasi where id_type_transportasi='$id_type_transportasi'");
$data=mysqli_fetch_array($query);
?>
<h1 class="mt-4">Edit Data</h1>
<form action="?page=type_transportasi/update" method="POST">
    <div class="mb-3">
        <label class="form-label">id_type_transportasi</label>
        <input type="text" class="form-control" name="id_type_transportasi" value="<?php echo $data['id_type_transportasi'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">nama_type</label>
        <input type="text" class="form-control" name="nama_type" value="<?php echo $data['nama_type'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">keterangan</label>
        <input type="text" class="form-control" name="keterangan" value="<?php echo $data['keterangan'] ?>">
    </div>
    <button type="submit" class="btn btn-info">Simpan</button>
</form>