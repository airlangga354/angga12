<!doctype html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>aplikasi_ticketing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="?page=home"><img src="image/logo bus 1.png" width="70px"> APLIKASI TICKETING </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-header" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
          <li class="nav navbar-nav navbar-right">
          <a class="nav-link" href="?page=pemesanan/index">PEMESANAN</a>
        </li>
        <li class="nav navbar-nav navbar-right">
          <a class="nav-link" href="?page=penumpang/index">PENUMPANG</a>
        </li>
        <li class="nav navbar-nav navbar-right">
          <a class="nav-link" href="?page=petugas/index">PETUGAS</a>
        </li>
        <li class="nav navbar-nav navbar-right">
          <a class="nav-link" href="?page=rute/index">RUTE</a>
        </li>
        <li class="nav navbar-nav navbar-right">
          <a class="nav-link" href="?page=transportasi/index">TRASPORTASI</a>
        </li>
        <li class="nav navbar-nav navbar-right">
          <a class="nav-link" href="?page=type_transportasi/index">TYPE TRANSPORTASI</a>
        </li>
        <li class="nav navbar-nav navbar-right">
          <a class="nav-link" href="?page=level/index">LEVEL</a>
        </li>
        <li class="nav navbar-nav navbar-right">
          <a class="nav-link" href="?page=users/index">USERS</a>
        </li>
        <a class="nav-link" href="logout.php">LOGOUT</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<body class="p-3 mb-2  bg-info-subtle text-info-emphasis">
<div class="container">
  <?php include "isi.php" ?>
</div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>