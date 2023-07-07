<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/style.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <img src="/img/A.png" alt="Bootstrap" width="30" height="24" />
        <a class="navbar-brand fw-bold" href="#">Hamba Allah</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Type mobil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#about">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="">Blog</a>
            </li>
          </ul>
          <div>
            <a href="login.html"><button type="button" class="btn btn-primary me-md-2">Sign In</button></a>
            <a href="Registrasi.html"><button type="button" class="btn btn-primary">Sign Up</button></a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <!-- col-md-8 col-md-offset-2 -->
    <!-- header -->
    @yield('content')
         <!-- about me -->
         <section id="about">
          <div class="container">
            <div class="row ">
              <center>
              <div class="col">
                <h2>About Me</h2>
                <div class="line dropup-center"></div>
              </div>
            </center>
            </div>
            <div class="row justify-content-center fs-5 text-center">
              <div class="col-4 mb-4">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium, ipsum?</p>
              </div>
              <div class="col-4 mb-4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit iste incidunt quas asperiores corporis facilis fuga praesentium aperiam voluptatibus voluptate eius eaque itaque, accusamus omnis.</p>
              </div>
            </div>
          </div>
        </section>
      <!-- about akhir -->
      <!-- kontak -->
      <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>CONTACT ME</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form>
              <div class="mb-3">
                <label for="Name" class="form-label">nama lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
     </section>  
<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="my-5 mb-0 pb-0">
  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-dark"
          style="background-color: #ffffff">
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start ">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">Nama Perusahaan</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #000000; height: 2px"
                />
            <p>
              Rental Mobil Hamba Allah
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Products</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #000000; height: 2px"
                />
            <p>
              <a href="#!" class="text-dark">Rental Mobil</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Paket Wisata</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Useful links</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #000000; height: 2px"
                />
            <p>
              <a href="#!" class="text-dark">Your Account</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Become an Affiliate</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Shipping Rates</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #020202; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> Jl.</p>
            <p><i class="fas fa-envelope mr-3"></i> Rental@example.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 26 888 999 88</p>
            <p><i class="fas fa-print mr-3"></i> + 26 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © Rental Mobil Hamba Allah
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>