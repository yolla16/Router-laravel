<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Punya Yolla</title>
    <link rel="icon" type="image/ico" href="assets/img/bootstrap.png">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/brands.css">
    <link rel="stylesheet" href="assets/css/solid.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid" id="ellipse">
      <nav class="navbar navbar-expand-lg navbar-light bg-none  ml-5">
        <a class="navbar-brand font-weight-bold" href="#">BRAND</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav p-3">
            <a class="nav-item nav-link ml-4" href="">Home</a>
            <a class="nav-item nav-link ml-4" href="#about_me">About Me</a>
            <a class="nav-item nav-link ml-4" href="#my_service">Service</a>
            <a class="nav-item nav-link ml-4" href="#gallery">Gallery</a>
            <a class="nav-item nav-link ml-4" href="#contact">Contact</a>
          </div>
        </div>
      </nav>
      <div data-aos="fade-right">
        <div class="row">
          <div class="col-md-5 ml-5" style="padding-top: 80px; padding-left: 80px;">
            <p class="text-muted mt-5">Hello There!</p>
            <h3 class="font-weight-bold mb-3">I'm Yolla P.I.</h3>
            <p>Web Developer</p>
            <i class="fab fa-whatsapp fa-2x text-muted mr-2"></i>
            <i class="fab fa-instagram fa-2x text-muted mr-2"></i>
            <i class="fab fa-github fa-2x text-muted mb-3"></i>
            <br>
            <button class="btn btn-primary btn-sm shadow p-2 mb-5 w-35">SEE MY WORK</button>
          </div>
          <div class="col-md-6">
            <img src="home.svg" style="width: 400px; height: 380px; margin-top: 80px;" alt="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <!-- about me -->
    <div data-aos="fade-right">
      <div class="container-fluid" id="about_me">
        <div class="row ml-5 mt-10">
          <div class="col-md-6 mt-5 square">
            <div><img src="aku.jpg" style=" width: 15rem; height: 20rem; border-radius: 15px; margin-left: 120px;" class="mt-5"></img>
              <div class="card-body text-center text-white"></div>
            </div>
            {{-- <!-- <img src="assets/img/resume.svg" style="width: 400px; height: 380px; margin-top: 80px;" alt="img-fluid"> --> --}}
          </div>
          <div class="col-md-5" style="padding-top: 80px; padding-left: 80px;">
            <p class="text-muted mt-5">My profile</p>
            <p>Nama: Yolla Pricillia Indiantika</p>
            <p>Absen: 35</p>
            <p>Kelas: XII RPL 2</p>
            <p>Alamat: Ds.Gerbo,Kec.Purwodadi,Kab.Pasuruan,Jawa Timur,Indonesia</p>
            <p>No.tlpn: 0858-0664-0601</p>
          </div>
        </div>
      </div>
    </div>
    <!-- about me -->


    <!-- my service -->
    <div class="container" id="my_service">
      <h3 class="font-weight-bold mb-3 text-center" >My Service</h3>
      <p class="text-center ">Lorem ipsum dolor sit amet, consectetur adipisicing elit sit amet, consectetur adipisicing elit sit amet,consectetur adipisicing elit sit amet, consectetur adipisicing elit</p>
      <div class="row mt-5">
        <div class="col-md-4">
          <div data-aos="zoom-in">
            <div class="card bg-primary shadow pt-4" style="width: 15rem; height: 15rem; border-radius: 15px;">
              <div class="card-body text-center text-white">
                <img src="web.svg" style="width: 100px; height: 100px;" class="mb-3">
                <p>Web Design</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div data-aos="zoom-in">
            <div class="card bg-primary shadow pt-4" style="width: 15rem; height: 15rem; border-radius: 15px;">
              <div class="card-body text-center text-white">
                <img src="web.svg" style="width: 100px; height: 100px;" class="mb-3">
                <p>Web Design</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div data-aos="zoom-in">
            <div class="card bg-primary shadow pt-4" style="width: 15rem; height: 15rem; border-radius: 15px;">
              <div class="card-body text-center text-white">
                <img src="web.svg" style="width: 100px; height: 100px;" class="mb-3">
                <p>Web Design</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- my service -->

    <!-- Gallery -->
    <div class="container" id="gallery">
      <p class="text-muted mt-5">This is Gallery</p>
      <h3 class="font-weight-bold mb-3">Check my recent photos</h3>
      <div class="row mt-5">
        <div class="col-md-4">
          <img src="website_1.png" class="rounded-lg shadow img-portofolio">
        </div>
        <div class="col-md-4">
          <img src="website_2.png" class="rounded-lg shadow img-portofolio">
        </div>
        <div class="col-md-4">
          <img src="website_1.png" class="rounded-lg shadow img-portofolio">
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-4">
          <img src="website_2.png" class="rounded-lg shadow img-portofolio">
        </div>
        <div class="col-md-4">
          <img src="website_1.png" class="rounded-lg shadow img-portofolio">
        </div>
        <div class="col-md-4">
          <img src="website_2.png" class="rounded-lg shadow img-portofolio">
        </div>
      </div>
    </div>
    <!-- Gallery -->


    <!-- contact -->
    <div class="container" id="contact">
      <h2 class="font-weight-bold text-center mb-3">Contact Me</h2>
      <p class="text-muted text-center">There are many variations of passages of Lorem Ipsum available, but the majority have suffered altera</p>
      <div class="row">
        <div class="col-md-6">
          <img src="contact.png" class="mt-5 ml-5 img-contact">
        </div>
        <div class="col-md-6">
          <form action="#" method="post">
            <div class="form-group mt-5">
              <input type="text" name="username" placeholder="Username" class="form-control mb-3 inp-text">
              <input type="text" name="email" placeholder="Email" class="form-control mb-3 inp-text">
              <textarea name="message" rows="3" cols="50" placeholder="Message..." class="mb-3 inp-text"></textarea>
                <button class="btn btn-primary btn-sm shadow p-2 mb-5 w-35">SUBMIT</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- contact -->

    <!-- footer -->
    <div class="container-fluid text-center text-white" id="footer">
      <h3 class="mb-4">BRAND</h3>
      <ul>
        <li>HOME</li>
        <li>ABOUT ME</li>
        <li>SERVICE</li>
        <li>GALLERY</li>
        <li>CONTACT</li>
      </ul>
      <div class="container mt-5 mb-5">
        <button class="btn btn-light btn-circle mr-3">
          <i class="fab fa-whatsapp  fa-2x"></i>
        </button>
        <button class="btn btn-light btn-circle mr-3">
          <i class="fab fa-instagram  fa-2x"></i>
        </button>
        <button class="btn btn-light btn-circle mr-3">
          <i class="fab fa-github fa-2x"></i>
        </button>
      </div>
      <p>Copyright @2021 All right reserved with love by Yolla Pricillia Indiantika</p>
    </div>
    <!-- footer -->
  </body>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();

    $(document).ready(function(){
      $(window).bind('scroll', function(){
        var navHeight = $(window).height() - 50;
        if($(window).scrollTop() > navHeight){
          $('.navbar').fadeIn(2500);
          $('.navbar').addClass('fixed-top');
          $('.navbar').addClass('bg-primary');
          $('.navbar').addClass('navbar-dark');
          $('.navbar').removeClass('ml-5');
        }else{
          $('.navbar').removeClass('fixed-top');
          $('.navbar').removeClass('bg-primary');
          $('.navbar').removeClass('navbar-dark');
          $('.navbar').addClass('ml-5');
        }
      });
    });
  </script>
</html>