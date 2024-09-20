<?php
include"koneksi.php";
$id_level=$_GET['id_level'];
$query=mysqli_query($koneksi,"select * from level where id_level='$id_level'");
$data=mysqli_fetch_array($query);
?>
<h1 class="mt-4">Edit Data</h1>
<form action="?page=level/update" method="POST">
    <div class="mb-3">
        <label class="form-label">id_level</label>
        <input type="text" class="form-control" name="id_level" value="<?php echo $data['id_level'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">nama_level</label>
        <input type="text" class="form-control" name="nama_level" value="<?php echo $data['nama_level'] ?>">
    </div>
    <button type="submit" class="btn btn-info">Simpan</button>
</form>