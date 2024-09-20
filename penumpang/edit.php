<?php
include"koneksi.php";
$id_penumpang=$_GET['id_penumpang'];
$query=mysqli_query($koneksi,"select * from penumpang where id_penumpang='$id_penumpang'");
$data=mysqli_fetch_array($query);
?>
<h1 class="mt-4">Edit Data</h1>
<form action="?page=penumpang/update" method="POST">
    <div class="mb-3">
        <label class="form-label">id_penumpang</label>
        <input type="text" class="form-control" name="id_penumpang" value="<?php echo $data['id_penumpang'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">username</label>
        <input type="text" class="form-control" name="username" value="<?php echo $data['username'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">password</label>
        <input type="text" class="form-control" name="password" value="<?php echo $data['password'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">nama_penumpang</label>
        <input type="text" class="form-control" name="nama_penumpang" value="<?php echo $data['nama_penumpang'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">alamat_penumpang</label>
        <input type="text" class="form-control" name="alamat_penumpang" value="<?php echo $data['alamat_penumpang'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">tanggal_lahir</label>
        <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">jenis_kelamin</label>
        <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">telefon</label>
        <input type="nomor" class="form-control" name="telefone" value="<?php echo $data['telefone'] ?>">
    </div>
    <button type="submit" class="btn btn-info">Simpan</button>
</form>