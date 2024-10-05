@extends('layouts.app')

@section('title')
Toko HMIF
@endsection

@section('content')
<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Layanan Komprehensif untuk IT dan Desain dalam Satu Tempat</h1>
            <p data-aos="fade-up" data-aos-delay="100">Kami menyediakan berbagai layanan mulai dari service PC/laptop, pembuatan website, kebutuhan konsumsi, hingga percetakan dan pembuatan logo. Semua yang Anda butuhkan untuk solusi teknologi dan branding hadir di satu tempat dengan hasil terbaik.</p>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="{{ url('frontend/assets/img/logohmif.png') }}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <!-- <h2>Layanan</h2> -->
        <p>Layanan<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <i class="bi bi-tools icon"></i>
              <h3>Service PC/Laptop</h3>
              <p>Dapatkan solusi cepat dan handal untuk masalah komputer atau laptop Anda. Tim kami siap membantu memperbaiki perangkat Anda agar kembali berfungsi optimal.</p>
              <a href="https://wa.me/6285161334257?text=Halo%20min,%20saya%20ingin%20menanyakan%20tentang%20service%20pc/laptop" class="read-more stretched-link"><span>Pesan Sekarang</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <i class="bi bi-code-slash icon"></i>
              <h3>Pembuatan Website</h3>
              <p>Kami menawarkan pembuatan website profesional untuk keperluan bisnis Anda. Buat kehadiran online yang menarik dan fungsional untuk meningkatkan kepercayaan pelanggan.</p>
              <a href="https://wa.me/6285161334257?text=Halo%20min,%20saya%20ingin%20menanyakan%20tentang%20pembuatan%20website" class="read-more stretched-link"><span>Pesan Sekarang</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <i class="bi bi-cart4 icon"></i>
              <h3>Kebutuhan Konsumsi</h3>
              <p>Penuhi kebutuhan konsumsi Anda dengan produk berkualitas. Kami menyediakan berbagai pilihan rokok, makanan, dan minuman untuk keseharian Anda dengan harga terbaik.</p>
              <a href="{{ route('konsumsi') }}" class="read-more stretched-link"><span>Lihat Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <i class="bi bi-printer icon"></i>
              <h3>Percetakan</h3>
              <p>Kami menyediakan layanan percetakan berkualitas tinggi untuk kebutuhan Anda, mulai dari kartu nama hingga poster. Hasil cetak yang tajam dan material terbaik untuk memaksimalkan promosi Anda.</p>
              <a href="https://wa.me/6285161334257?text=Halo%20min,%20saya%20ingin%20menanyakan%20tentang%20percetakan" class="read-more stretched-link"><span>Pesan Sekarang</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <i class="bi bi-palette  icon"></i>
              <h3>Pembuatan Logo</h3>
              <p>Jasa pembuatan logo profesional yang unik dan mencerminkan identitas bisnis Anda. Tim kami siap menghadirkan desain logo yang kuat untuk membangun citra brand yang berkesan.</p>
              <a href="https://wa.me/6285161334257?text=Halo%20min,%20saya%20ingin%20menanyakan%20tentang%20pembuatan%20logo" class="read-more stretched-link"><span>Pesan Sekarang</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->
        </div>

      </div>

    </section><!-- /Services Section -->

  </main>
  
@endsection