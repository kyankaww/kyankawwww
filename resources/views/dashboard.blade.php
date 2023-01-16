@extends('layout')
@section('content')
<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="index.html">BukuNie</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbarr" class="navbarr">
      <ul>
        <li><a class="nav-link scrollto" href="">Home</a></li>
        <li><a class="getstarted scrollto" href="/login">Login</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Better Solutions For Your Choise Book</h1>
        <h2>You can access anytime, anywhere and free</h2>
        <div class="d-flex justify-content-center justify-content-lg-start">
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="assets/img/e-learning.png" class="animated" alt="" style="height: 400px; margin-left: 23%;">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About Us</h2>
      </div>

      <div class="row content">
        <div class="col-lg-6">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
          </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <a href="#" class="btn-learn-more">Learn More</a>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Why Us Section ======= -->
  <div class="content">

    <div class="container">

      <h2 class="my-5 text-center">Top 3 Books in BukuNie</h2>
      <div class="slider-92911">
        <div class="owl-carousel slide-one-item">

          <div class="d-md-flex testimony-29101 align-items-stretch">
            <div class="image">
              <img src="assets/img/covernya.jpg" alt="">
            </div>
            <div class="text">
              <blockquote>
                <p>&ldquo;Dilan : Dia Adalah Dilanku Tahun 1990” bercerita tentang kisah cinta dua remaja Bandung pada tahun 90an. Berawal dari seorang siswa bernama Dilan yang jatuh cinta dengan siswi pindahan dari SMA di Jakarta bernama Milea. Dilan memiliki beragam cara untuk mendekati dan mencuri perhatian Milea&rdquo;</p>

                <div class="author">&mdash; Jean Stephen</div>
              </blockquote>
            </div>
          </div> <!-- .item -->

          <div class="d-md-flex testimony-29101 align-items-stretch">
            <div class="image">
              <img src="assets/img/milea.jpeg" alt="">
            </div>
            <div class="text">
              <blockquote>
                <p>&ldquo;Novel “Milea suara dari Dilan” temanya pun tentang percintaan namun dari sisi tokoh Dilannya, menceritakan dari awal bertemu hingga berpisah, dan mengklarifikasi kejadian yang di anggap buruk oleh Milea, pada novel pertama dan kedua.&rdquo;</p>

                <div class="author">&mdash; Julia Smith</div>
              </blockquote>
            </div>
          </div> <!-- .item -->

          <div class="d-md-flex testimony-29101 align-items-stretch">
            <div class="image">
              <img src="assets/img/dilan1991.jpg" alt="">
            </div>
            <div class="text">
              <blockquote>
                <p>&ldquo;Novel Dilan 1991 mempunyai tema utama percintaan anak remaja SMA, harapan yang tidak sesuai kenyataan, dan hidup yang masih menjadi misteri. Karena Dilan dan Milea tidak berjodoh di masa depan.&rdquo;</p>

                <div class="author">&mdash; Julia Smith</div>
              </blockquote>
            </div>
          </div> <!-- .item -->
        </div>
        <div class="my-5 text-center">
          <ul class="thumbnail">
            <li><a href="#"><img src="assets/img/number-one.png" alt="Image" class="img-fluid"></a></li>
            <li><a href="#"><img src="assets/img/number-2.png" alt="Image" class="img-fluid"></a></li>
            <li><a href="#"><img src="assets/img/number-3.png" alt="Image" class="img-fluid"></a></li>
          </ul>
        </div>
      </div>


    </div>
  </div>



  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>BukuNie</h3>
            <p>
              Katulampa <br>
              Bogor Timur<br>
              Sundanese <br><br>
              <strong>Phone:</strong> +000000000<br>
              <strong>Email:</strong> kyankaw@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p class="text-light">Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>BukuNie</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  @endsection