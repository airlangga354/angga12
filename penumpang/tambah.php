<h1>Tabah Data</h1>
<form action="?page=penumpang/simpan" method="POST">
    <div class="mb-3">
        <label class="form-label">id_penumpang</label>
        <input type="text" class="form-control" name="id_penumpang">
    </div>
    <div class="mb-3">
        <label class="form-label">username</label>
        <input type="text" class="form-control" name="username">
    </div>
    <div class="mb-3">
        <label class="form-label">password</label>
        <input type="text" class="form-control" name="password">
    </div>
    <div class="mb-3">
        <label class="form-label">nama_penumpang</label>
        <input type="text" class="form-control" name="nama_penumpang">
    </div>
    <div class="mb-3">
        <label class="form-label">alamat_penumpang</label>
        <input type="text" class="form-control" name="alamat_penumpang">
    </div>
    <div class="mb-3">
        <label class="form-label">tanggal_lahir</label>
        <input type="date" class="form-control" name="tanggal_lahir">
    </div>
    <div class="mb-3">
        <label class="form-label">jenis_kelamin</label>
        <div class="input-group form-group">
            <div class="form-check">
                <label class="radio">LAKI-LAKI
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
                    <span class="radiocheckmark"></span>
                </label>
            </div>

            <div class="form-check">
                <label class="radio">PEREMPUAN
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                    <span class="radiocheckmark"></span>
                </label>
            </div>
        </div>
    <div class="mb-3">
        <label class="form-label">telefone</label>
        <input type="text" class="form-control" name="telefone">
    </div>
    <button type="submit" class="btn btn-info">Simpan</button>
</form>