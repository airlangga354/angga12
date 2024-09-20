
<div class="container">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<h1 class="mt-4">Tambah Data User</h1>
<form action="?page=users/simpan" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label">ID USER</label>
        <input type="text" class="form-control" name="id_user">
    </div>
    <div class="mb-3">
        <label class="form-label">USERNAME</label>
        <input type="text" class="form-control" name="username">
    </div>
    <div class="mb-3">
        <label class="form-label">PASSWORD</label>
        <input type="text" class="form-control" name="password">
    </div>
    <div class="mb-3">
        <label class="form-label">NAMA</label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="mb-3">
        <label class="form-label">LEVEL</label>
        <input type="text" class="form-control" name="level">
    </div>
    <button type="submit" class="btn btn-outline-info" value="simpan">SIMPAN</button>
</form>
</div>