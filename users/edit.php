<?php
include "koneksi.php";
$id_user=$_GET['id_user'];
$query=mysqli_query($koneksi,"select * from users where id_user='$id_user'");
$data=mysqli_fetch_array($query);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">
<h1>EDIT DATA</h1>
<form action="?page=users/update" method="POST" enctype="multipart/form-data">
    <table>
    <div class="form-group">
          <label for="id_user">ID USER</label>
          <input type="text" class="form-control" name="id_user" value="<?php echo $data['id_user'] ?>">
    </div>
    <div class="form-group">
          <label for="id_user">USERNAME</label>
          <input type="text" class="form-control" name="username" value="<?php echo $data['username'] ?>">
    </div>
    <div class="form-group">
          <label for="nama">PASSWORD</label>
          <input type="text" class="form-control" name="password" value="<?php echo $data['password'] ?>">
    </div>
    <div class="form-group">
          <label for="username">NAMA</label>
          <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
    </div>
    <div class="form-group">
          <label for="password">LEVEL</label>
          <input type="text" class="form-control" name="level" value="<?php echo $data['level'] ?>">
     </div>
        <tr>
            <td><button type="submit" class="btn btn-outline-info">SIMPAN</button></td>
        </tr>
    </table>
</form>
</div>


