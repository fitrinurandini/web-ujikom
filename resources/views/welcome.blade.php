<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PT. Solusi Koneksi Anda</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="/asset/img/loogo1.png" rel="icon">
  <link href="/asset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/asset/vendor/aos/aos.css" rel="stylesheet">
  <link href="/asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/asset/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Lumia
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
  <img src="/asset/img/loogo1.png" alt="Logo Lumia" class="logo-img">
  <span class="sitename ms-2 mb-0">PT. Solusi Koneksi Anda</span>
</a>



<nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="#hero" class="active">Home</a></li>
    <li><a href="#profile-perusahaan">Profile Perusahaan</a></li>
    <li class="dropdown">
      <a href="#services"><span>Produk</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
      <ul>
        <li><a href="#">Produk 1</a></li>
        <li><a href="#">Produk 2</a></li>
        <li><a href="#">Produk 3</a></li>
        <li><a href="#">Produk 4</a></li>
      </ul>
    </li>
    <li><a href="#portfolio">Artikel</a></li>
    <li class="dropdown">
      <a href="#gallery"><span>Gallery Kegiatan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
      <ul>
        <li><a href="#">Kegiatan 1</a></li>
        <li><a href="#">Kegiatan 2</a></li>
        <li><a href="#">Kegiatan 3</a></li>
        <li><a href="#">Kegiatan 4</a></li>
      </ul>
    </li>
    <li><a href="#contact">Kontak Kami</a></li>
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>

  </header>

  <main class="main">

    <!-- Hero Section -->
<section id="hero" class="hero section dark-background">

<img src="/asset/img/bg.jpeg" alt="" data-aos="fade-in">

<div class="container text-center" data-aos="fade-up" data-aos-delay="100">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <h2>PT Solusi Koneksi Anda</h2>
      <p>Mitra Teknologi Konektivitas Anda</p>
      
      <!-- Tombol login -->
      <a href="{{ route('login') }}" class="btn-get-started">Login Admin</a>
    </div>
  </div>
</div>
</section>


    <!-- Profile Perusahaan Section -->
<section id="profile-perusahaan" class="profile-perusahaan section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Profil Perusahaan</h2>
    <p>Mengenal lebih dekat tentang siapa kami dan apa yang kami lakukan</p>
  </div>

  <div class="container">
    <div class="row gy-4 align-items-center">

      <!-- Teks -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="profile-box">
          <h3 class="mb-3">{{ $setting->website_name ?? 'Nama Perusahaan' }}</h3>
          <p>{{ $setting->website_description ?? 'Deskripsi belum tersedia.' }}</p>
        </div>
      </div>

      <!-- Logo -->
      <div class="col-lg-6 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <img src="{{ asset('storage/' . $setting->website_logo) }}" 
             alt="Logo Perusahaan" 
             class="img-fluid rounded shadow-sm" 
             style="max-height: 350px;">
      </div>

    </div>
  </div>
</section>



    <!-- Kenapa Harus Memilih Kami Section -->
<section id="kenapa-kami" class="about section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Kenapa Harus Memilih Kami?</h2>
  <p>Kami hadir untuk memberikan solusi terbaik dengan layanan yang unggul dan terpercaya</p>
</div><!-- End Section Title -->

<div class="container">
  <div class="row gy-4 align-items-center">

    <!-- Gambar -->
    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
      <img src="/asset/img/bg.jpeg" alt="Kenapa Memilih Kami" class="img-fluid rounded shadow">
    </div>

    <!-- Konten Keunggulan -->
    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
      <div class="about-content ps-0 ps-lg-3">
        <h3 class="mb-3">Kami Memberikan Lebih Dari Sekedar Layanan</h3>
        <p class="fst-italic">
          Dengan pengalaman dan dedikasi tinggi, kami memastikan setiap pelanggan mendapatkan layanan terbaik.
        </p>
        <ul>
          <li>
            <i class="bi bi-award"></i>
            <div>
              <h4>Pelayanan Profesional</h4>
              <p>Tim kami siap membantu Anda dengan layanan terbaik dan solusi yang cepat dan tepat.</p>
            </div>
          </li>
          <li>
            <i class="bi bi-people"></i>
            <div>
              <h4>Dukungan Pelanggan Responsif</h4>
              <p>Kami selalu ada untuk Anda, dengan dukungan pelanggan yang responsif dan ramah.</p>
            </div>
          </li>
          <li>
            <i class="bi bi-rocket"></i>
            <div>
              <h4>Inovatif & Terpercaya</h4>
              <p>Kami terus berinovasi untuk memberikan solusi terbaik dan membangun kepercayaan jangka panjang.</p>
            </div>
          </li>
        </ul>
      </div>
    </div>

  </div>
</div>

</section><!-- /Kenapa Harus Memilih Kami Section -->


<!-- Statistik Kami Section -->
<section id="stats" class="stats section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">

    <div class="col-lg-3 col-md-6">
      <div class="stats-item text-center w-100 h-100">
        <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1" class="purecounter"></span>
        <p>Klien Puas</p>
      </div>
    </div>

    <div class="col-lg-3 col-md-6">
      <div class="stats-item text-center w-100 h-100">
        <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter"></span>
        <p>Proyek Selesai</p>
      </div>
    </div>

    <div class="col-lg-3 col-md-6">
      <div class="stats-item text-center w-100 h-100">
        <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="1" class="purecounter"></span>
        <p>Jam Dukungan</p>
      </div>
    </div>

    <div class="col-lg-3 col-md-6">
      <div class="stats-item text-center w-100 h-100">
        <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
        <p>Tenaga Ahli</p>
      </div>
    </div>

  </div>

  <!-- Tombol Tentang Kami -->
  <div class="text-center mt-5">
    <a href="#about" class="btn btn-primary px-4 py-2 rounded-pill">Tentang Kami</a>
  </div>

</div>

</section><!-- /Statistik Kami Section -->


    <!-- Services Section -->
<section id="services" class="services section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Produk</h2>
    <p>Berikut layanan yang kami tawarkan untuk Anda.</p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row gy-4">
      @foreach($modules as $index => $module)
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ 100 * ($index + 1) }}">
        <div class="service-item position-relative">
          <div class="icon">
            <img src="{{ asset('storage/' . $module->icon) }}" alt="icon" style="width: 40px; height: 40px;">
          </div>
          <a href="#" class="stretched-link">
            <h3>{{ $module->nama_module }}</h3>
          </a>
          <p>{{ $module->deskripsi_module }}</p>
        </div>
      </div><!-- End Service Item -->
      @endforeach
    </div>
  </div>

</section>


    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="/asset/img/portfolio/app-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="/asset/img/portfolio/app-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="/asset/img/portfolio/product-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 1</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="/asset/img/portfolio/product-1.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="/asset/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 1</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="/asset/img/portfolio/branding-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <img src="/asset/img/portfolio/books-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 1</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="/asset/img/portfolio/books-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="/asset/img/portfolio/app-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="/asset/img/portfolio/app-2.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="/asset/img/portfolio/product-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 2</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="/asset/img/portfolio/product-2.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="/asset/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 2</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="/asset/img/portfolio/branding-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <img src="/asset/img/portfolio/books-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 2</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="/asset/img/portfolio/books-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="/asset/img/portfolio/app-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="/asset/img/portfolio/app-3.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="/asset/img/portfolio/product-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="/asset/img/portfolio/product-3.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="/asset/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="/asset/img/portfolio/branding-3.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <img src="/asset/img/portfolio/books-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Books 3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
                <a href="/asset/img/portfolio/books-3.jpg" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 10
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="/asset/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="/asset/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="/asset/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="/asset/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="/asset/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Gallery Section -->
<section class="gallery section" id="gallery">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Galeri Kegiatan</h2>
    <p>Berikut adalah beberapa kegiatan yang telah kami lakukan.</p>
  </div><!-- End Section Title -->

  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="gallery-item">
            <figure>
              <img src="/asset/img/koneksi.png" alt="Gambar Kegiatan 1" class="img-fluid">
              <figcaption>
                <h4>Workshop Web Development</h4>
                <p>Pelatihan web development yang diselenggarakan oleh tim kami.</p>
              </figcaption>
            </figure>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="gallery-item">
            <figure>
              <img src="/asset/img/bg.jpeg" alt="Gambar Kegiatan 2" class="img-fluid">
              <figcaption>
                <h4>Seminar Digital Marketing</h4>
                <p>Seminar tentang digital marketing yang dihadiri oleh para profesional.</p>
              </figcaption>
            </figure>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="gallery-item">
            <figure>
              <img src="/asset/img/gallery/gallery-3.jpg" alt="Gambar Kegiatan 3" class="img-fluid">
              <figcaption>
                <h4>Acara Networking</h4>
                <p>Acara networking untuk membangun hubungan dengan mitra bisnis.</p>
              </figcaption>
            </figure>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="gallery-item">
            <figure>
              <img src="/asset/img/gallery/gallery-4.jpg" alt="Gambar Kegiatan 4" class="img-fluid">
              <figcaption>
                <h4>Pelatihan Keuangan</h4>
                <p>Pelatihan untuk meningkatkan pemahaman keuangan dan pengelolaan bisnis.</p>
              </figcaption>
            </figure>
          </div>
        </div>

      </div>
    </div>
  </div>
</section><!-- /Gallery Section -->


    <!-- Kontak Kami Section -->
<section id="contact" class="contact section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Kontak Kami</h2>
    <p>Hubungi kami untuk informasi lebih lanjut</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">

      <!-- Info Kontak -->
      <div class="col-lg-6">
        <div class="info-box mb-4" style="position: relative; z-index: 1;">
          <i class="bi bi-geo-alt"></i>
          <h3>Alamat</h3>
          <p>{{ $setting->address ?? 'Alamat belum tersedia' }}</p>
        </div>

        <div class="info-box mb-4" style="position: relative; z-index: 1;">
          <i class="bi bi-telephone"></i>
          <h3>Telepon</h3>
          <p>{{ $setting->phone ?? '-' }}</p>
        </div>

        <div class="info-box mb-4" style="position: relative; z-index: 1;">
          <i class="bi bi-envelope"></i>
          <h3>Email</h3>
          <p>{{ $setting->email ?? '-' }}</p>
        </div>
      </div>

      <!-- Maps -->
      <div class="col-lg-6">
        <div class="map-box" style="position: relative; height: 300px;">
          @if($setting->maps)
            <iframe src="https://www.google.com/maps/embed?pb={{ urlencode($setting->maps) }}" 
                    width="100%" 
                    height="100%" 
                    style="border:0; position: absolute; top: 0; left: 0; z-index: 0;" 
                    allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          @else
            <p>Embed Google Maps belum tersedia.</p>
          @endif
        </div>
      </div>

    </div>
  </div>
</section>





  </main>

  <footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
  
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <span class="sitename">PT. Solusi Koneksi Anda</span>
          </a>
          <p>{{ $setting->footer_description ?? 'Deskripsi footer belum tersedia.' }}</p>
  
          <div class="social-links d-flex mt-4">
            @if (!empty($setting->facebook))
              <a href="{{ $setting->facebook }}" target="_blank"><i class="bi bi-facebook"></i></a>
            @endif
            @if (!empty($setting->instagram))
              <a href="{{ $setting->instagram }}" target="_blank"><i class="bi bi-instagram"></i></a>
            @endif
            @if (!empty($setting->linkedin))
              <a href="{{ $setting->linkedin }}" target="_blank"><i class="bi bi-linkedin"></i></a>
            @endif
          </div>
        </div>
  
        <div class="col-lg-2 col-6 footer-links">
          <h4>Alamat</h4>
          <ul class="list-unstyled">
            <li>{{ $setting->address ?? 'Alamat belum tersedia' }}</li>
          </ul>
        </div>
  
        <div class="col-lg-2 col-6 footer-links">
          <h4>Support</h4>
          <ul>
            <li><a href="#">Bantuan</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Panduan Pengguna</a></li>
            <li><a href="#">Kebijakan Layanan</a></li>
            <li><a href="#">Hubungi Tim Support</a></li>
          </ul>
        </div>
  
      </div>
    </div>
  
  </footer>
  

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Fitri Nur Andini</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/asset/vendor/php-email-form/validate.js"></script>
  <script src="/asset/vendor/aos/aos.js"></script>
  <script src="/asset/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/asset/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/asset/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/asset/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="/asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/asset/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="/asset/js/main.js"></script>

</body>

</html>