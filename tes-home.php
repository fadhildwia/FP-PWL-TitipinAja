<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap dan JQuery -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-4.4.1/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-4.4.1/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome/font-awesome.min.css">
  <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

  <!-- Home CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/home.css">
  
    <title>TitipinAja</title>
</head>

<body>
    <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <a class="navbar-brand mx-5" href="#">
      <img src="assets/image/512px-Bootstrap_logo.svg.png" width="30" height="30" class="d-inline-block align-top"
        alt="">
      TitipinAja
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto container-fluid">
      </ul>
      <a class="nav-link text-body" href="#">TrackOrder</a>
      <a class="nav-link btn" href="#"> <i class="fa fa-shopping-cart"></i> </a>
      <a class="nav-link btn btn-outline-dark mx-4" href="#">Daftar/Login</a>
    </div>
  </nav>

  <!-- Content Top -->
  <div class="jumbotron bg-banner mb-0 jumbotron-fluid" style="height: 500px; padding-top: 120px;">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="col-md-10 text-dark">
            <h3 class="display-5">Bingung beli barang di luar negeri?</h3>
            <p style="margin: 0px 0px 0px;">TitipinAja di sini, bisa titip dari mana aja!</p>
            <p>Bikin Request, dijamin barang langsung dibelikan</p>
          </div>
          <br><br>

          <div class="d-flex align-items-center flex-column justify-content-center">
            <form>
              <div class="form-inline form-group">
                <input class="form-control form-control-lg" border-right-0 " style=" border-radius: 5px 0px 0px
                  5px; " type=" search" placeholder="Cari Produk di sini . . . . " aria-label="Search">
                <button class="btn btn-light btn-lg" style="border-radius: 0px 5px 5px 0px;" type="submit"><i
                    class="fa text-danger fa-search"></i></button>
              </div>
            </form>
            <span class="text-dark form-group">Titip produk apapun dari Jepang, Amerika, Korea, Thailand, Malaysia,
              China</span>
            <div class="form-group">
              <button class="btn btn-info" style="border-radius: 5px 5px 5px 5px;" type="submit">Buat
                Request</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Request Berdasarkan Negara -->
  <br>
  <div class="container">
    <div class="d-flex align-items-center flex-column justify-content-center">
      <h4 class="mt-md-3 mb-sm-5">Lihat Request Berdasarkan Negara</h4>

      <section class="row no-gutter align-items-center">
        <div class="row mx-auto">
          <div class="card" style="width: 18rem; margin: 0px 20px 50px 0">
            <img class="card-img-top" src="assets/image/japan.jpg" alt="Card image cap">
            <h4 class="centered-text">Japan</h4>
          </div>
          <div class="card" style="width: 18rem; margin: 0px 20px 50px 0">
            <img class="card-img-top" src="assets/image/american.jpg" alt="Card image cap">
            <h4 class="centered-text">Amerika</h4>
          </div>
          <div class="card" style="width: 18rem; margin: 0px 20px 50px 0">
            <img class="card-img-top" src="assets/image/south-korea.jpg" alt="Card image cap">
            <h4 class="centered-text">Korea</h4>
          </div>
        </div>
      </section>
      <section class="row no-gutter align-items-center">
        <div class="row mx-auto">
          <div class="card" style="width: 18rem; margin: 0px 20px 20px 0">
            <img class="card-img-top" src="assets/image/thailand.jpg" alt="Card image cap">
            <h4 class="centered-text">Thailand</h4>
          </div>
          <div class="card" style="width: 18rem; margin: 0px 20px 20px 0">
            <img class="card-img-top" src="assets/image/malaysia.jpg" alt="Card image cap">
            <h4 class="centered-text">Malaysia</h4>
          </div>
          <div class="card" style="width: 18rem; margin: 0px 20px 20px 0">
            <img class="card-img-top" src="assets/image/china.jpg" alt="Card image cap">
            <h4 class="centered-text">China</h4>
          </div>
        </div>
      </section>

    </div>
  </div>

  <!-- Content Request Berdasarkan Negara -->
  <br>
  <div class="container">
    <div class="d-flex align-items-center flex-column justify-content-center">
      <h4 class="mt-md-3 mb-sm-5">Lihat Produk Rekomendasi</h4>

      <div class="row mx-auto">
        <div class="card" style="width: 18rem; margin: 0px 20px 50px 0">
          <img class="card-img-top" src="assets/image/japan.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nike Ardila</h5>
            <p class="card-text">Rp. 439.000</p>
          </div>
        </div>
        <div class="card" style="width: 18rem; margin: 0px 20px 50px 0">
          <img class="card-img-top" src="assets/image/malaysia.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nike Ardila</h5>
            <p class="card-text">Rp. 339.000</p>
          </div>
        </div>
        <div class="card" style="width: 18rem; margin: 0px 20px 50px 0">
          <img class="card-img-top" src="assets/image/american.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Adidas Nike</h5>
            <p class="card-text">Rp. 339.000</p>
          </div>
        </div>
      </div>

      <div class="form-group">
        <button class="btn btn-info" style="border-radius: 5px 5px 5px 5px;" type="submit">Lihat Semua</button>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-white">
    <div class="container py-5">
      <div class="row py-4">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><img src="assets/image/banner-traveller-1.jpg" alt="" width="180"
            class="mb-3">
          <p class="font-italic text-muted">TitipinAja adalah sebuah website jasa titip beli produk manca negara.</p>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">TitipinAja</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><a href="#" class="text-muted">Tentang Kami</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Syarat & Ketentuan</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Kebijakan Privasi</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Blog</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Beli</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><a href="#" class="text-muted">FAQ</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Cara Berbelanja</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Track Order</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Ikuti Kami</h6>
          <ul class="list-unstyled mb-0">
            <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i
                  class="fab fa-facebook"></i></a>
            </li> <a class="text-muted">titipinaja_official</a>
            <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i
                  class="fab fa-instagram"></i></a>
            </li> <a class="text-muted">@titipinaja_official</a>
          </ul>
        </div>
      </div>
    </div>

    <!-- Copyrights -->
    <div class="bg-light">
      <div class="container text-center text-muted">
        <p class="mb-0 py-2 far fa-copyright"></p> 2019 TitipinAja All rights reserved.
      </div>
    </div>
  </footer>
  <!-- End -->
</body>

</html>