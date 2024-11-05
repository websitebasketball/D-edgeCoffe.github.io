<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demoko</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body style="height: 3000px;">
  <nav class="navbar navbar-expand navbar-dark bg-primary sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="bi bi-cup-hot-fill"></i>DeCafe</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Username
          </a>
          <ul class="dropdown-menu dropdown-menu-end mt-2">
            <li><a class="dropdown-item" href="#">Profil</a></li>
            <li><a class="dropdown-item" href="#">Setting</a></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-lg">
    <div class="row">
        <div class="col-lg-3">
        <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
          <li class="nav-item">
            <a class="nav-link active link-light" aria-current="page" href="index.php"><i class="bi bi-house-door"></i> Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link link-dark" href="daftarmenu.php"><i class="bi bi-menu-app-fill"></i> Daftar Menu</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link link-dark" href="Kategorimenu.php"><i class="bi bi-tags"></i> Kategori Menu</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link link-dark" href="Order.php"><i class="bi bi-cart4"></i> Order</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link link-dark" href="Dapur.php"></i><i class="bi bi-fire"></i> Dapur</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link link-dark" href="User.php"><i class="bi bi-person-fill"></i> User</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link link-dark" href="Report.php"><i class="bi bi-journals"></i> Report</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
        </div>
        <!--content -->
        <div class="col-lg-9 mt-2">
        <div class="card">
  <div class="card-header">
    Daftar Menu
  </div>
  <div class="card-body">
    <h5 class="card-title">Ini adalah bagian Daftar Menu</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam nihil fugit ab odio ipsum sed labore similique repellendus reiciendis, eveniet vero, harum tempore aut. Maiores magnam harum nemo in assumenda.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        </div>
    </div>
        <!-- end content-->
</div>
<div class="fixed-bottom text-center mb-2">
  Copyright 2024 cafe kelas C
</div>
  <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>