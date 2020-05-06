<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU PROVINSI KEPULAUAN RIAU</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="{{url('public/vendors/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('public/vendors/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{url('public/vendors/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{url('public/vendors/linericon/style.css')}}">
  <link rel="stylesheet" href="{{url('public/vendors/owl-carousel/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{url('public/vendors/owl-carousel/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{url('public/vendors/flat-icon/font/flaticon.css')}}">
  <link rel="stylesheet" href="{{url('public/vendors/nice-select/nice-select.css')}}">

  <link rel="stylesheet" href="{{url('public/css/style.css')}}">
</head>
<body class="bg-shape">
 

  <div id="app">
    <!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href=""><img src="{{url('public/img/logo.png')}}"  width="300px" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Beranda</a></li> 
              <li class="nav-item"><a class="nav-link" href="{{url('/profile')}}">Profile</a></li> 
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Layanan</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="http://appkepri.com/sijempol/login">Perizinan</a>                 
                  <li class="nav-item"><a class="nav-link" href="http://appkepri.com/sijempol/login">Non Perizinan</a>                 
                  <li class="nav-item"><a class="nav-link" href="http://appkepri.com/sijempol/login">Pengaduan</a>                 
                </ul>
							</li>

              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Investmen Platform</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="blog.html">Potensi Investasi</a></li>
                  <li class="nav-item"><a class="nav-link" href="blog-details.html">Promosi Investasi</a></li>
                  <li class="nav-item"><a class="nav-link" href="blog-details.html">Pengawasan</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="{{url('investasi')}}">Data Investasi</a></li> 
              <li class="nav-item"><a class="nav-link" href="contact.html">Hubungi Kami</a></li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->
    <router-view :key="$route.fullPath"></router-view>
  </div>

  <!-- ================ start footer Area ================= -->
  <footer class="footer-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-4  col-md-4 col-sm-4">
          <div class="single-footer-widget">
            <h6>DPMPTSP</h6>
            <p>Gedung Wanita Raja Sahila Lt. 2 Jalan Sultan Masyur Syah - Pulau Dompak Tanjungpinang</p>
          </div>
        </div>	
        
        <div class="col-lg-5  col-md-5 col-sm-5">
          <div class="single-footer-widget mail-chimp">
            <h6 class="mb-20">Kerja Sama</h6>
            <ul class="instafeed d-flex flex-wrap">
              <li><img src="{{url('public/img/kerjasama/b2rd.png')}}" class="img-fluid" alt=""></li>
              <li><img src="{{url('public/img/kerjasama/bkpm.jpeg')}}" class="img-fluid" alt=""></li>
              <li><img src="{{url('public/img/kerjasama/bpjs.jpg')}}" class="img-fluid" alt=""></li>
              <li><img src="{{url('public/img/kerjasama/disdukcapil.jpg')}}" class="img-fluid" alt=""></li>
              <li><img src="{{url('public/img/kerjasama/kemenkumham.png')}}" class="img-fluid" alt=""></li>
              <li><img src="{{url('public/img/kerjasama/kesehatan.png')}}" class="img-fluid" alt=""></li>
              <li><img src="{{url('public/img/kerjasama/kswp.png')}}" class="img-fluid" alt=""></li>
              <li><img src="{{url('public/img/kerjasama/oss.png')}}" class="img-fluid" alt=""></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3  col-md-3 col-sm-3">		
          <h6 class="mb-20">Statistik Pengunjung</h6>
        <a href='https://www.symptoma.es/'>Symptoma.es</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=1295538d380cfb573b3f13a2d143ba62d84e3e75'></script>
        <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/681328/t/0"></script>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="row align-items-center">
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
          <div class="col-lg-4 col-sm-12 footer-social text-center text-lg-right">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-dribbble"></i></a>
            <a href="#"><i class="fab fa-behance"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ================ End footer Area ================= -->



  <script src="{{url('public/js/app.js')}}"></script>
  <script src="{{url('public/vendors/jquery/jquery-3.2.1.min.js')}}"></script>
  <script src="{{url('public/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('public/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{url('public/vendors/nice-select/jquery.nice-select.min.js')}}"></script>
  <script src="{{url('public/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{url('public/js/mail-script.js')}}"></script>
  <script src="{{url('public/js/skrollr.min.js')}}"></script>
  <script src="{{url('public/js/main.js')}}"></script>
</body>
</html>