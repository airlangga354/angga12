<?php
include "koneksi.php";
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <form action="" method="POST">
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-info text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h
include2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <div class="form-outline form-white mb-4">
                <input type="text" name="username" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Username</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>
              <button class="btn btn-outline-light btn-lg px-5" type="submit" name="login">Login</button>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>
</form>
<?php
if(isset($_POST['login'])){
    // echo "proses";
$username = $_POST['username'];
$password = $_POST['password'];
$query=mysqli_query($koneksi,"select * from users where username='$username' AND password='$password'");
$cek = mysqli_num_rows($query);
    // echo $cek;
if($cek>0){
    //berhasil login
    session_start();
    $_SESSION['status']="sukses";
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    header('location:index.php');
}

}

?>
