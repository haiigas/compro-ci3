<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view('homepage/layouts/_meta.php'); ?>

  <title>PT. XYZ TEKNOLOGI</title>

  <link rel="icon" href="img/Fevicon.png" type="image/png">

  <?php $this->load->view('homepage/layouts/_css.php'); ?>

</head>

<body>

  <?php $this->load->view('homepage/layouts/_header.php'); ?>

  <main class="side-main">
    <section class="hero-banner mb-30px">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="hero-banner__img">
              <img class="img-fluid" src="<?php echo base_url('parason/img/banner/hero-banner.png');?>" alt="">
            </div>
          </div>
          <div class="col-lg-5 pt-5">
            <div class="hero-banner__content">
              <h1>PT. XYZ TEKNOLOGI</h1>
              <p>Perusahaan yang bergerak di bidang Teknologi Informasi terutama Pembuatan Website, Aplikasi Android, Pengadaan Server dan Konsultan IT.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-margin">
      <div class="container">
        <div class="section-intro pb-85px text-center">
          <h2 class="section-intro__title">Pelayanan</h2>
          <p class="section-intro__subtitle">Kami menyediakan layanan konsultasi dengan seperangkat teknologi mutakhir dan tim profesional yang berpengalaman dan terkenal.</p>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="ti-shield"></i>
                </span>
                <h3 class="card-feature__title">Smart Government</h3>
                <p class="card-feature__subtitle">Penggunaan teknologi informasi dalam pemerintahan dan mewujudkan transparansi dan keterbukaan data.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="ti-clipboard"></i>
                </span>
                <h3 class="card-feature__title">Cyber School</h3>
                <p class="card-feature__subtitle">Pembelajaran yang secara menyeluruh atau sebagian besar menggunakan metode virtual.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="ti-harddrives"></i>
                </span>
                <h3 class="card-feature__title">High Performance Computer</h3>
                <p class="card-feature__subtitle">Komputer yang mampu menyelesaikan beban komputasi dengan memanfaatkan parallel processing.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-margin">
      <div class="container">
        <div class="section-intro pb-85px text-center">
          <h2 class="section-intro__title">Fitur Keunggulan</h2>
          <p class="section-intro__subtitle">Fitur yang kami tawarkan untuk menunjang pekerjaan dan bisnis Anda bersama layanan kami.</p>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="row offer-single-wrapper">
              <div class="col-lg-6 offer-single">
                <div class="card offer-single__content text-center">
                  <span class="offer-single__icon">
                    <i class="ti-shield"></i>
                  </span>
                  <h4>Keamanan Terjamin</h4>
                  <p>Privasi data menjadi fokus utama dibidang keamanan.</p>
                </div>
              </div>
              <div class="col-lg-6 offer-single">
                <div class="card offer-single__content text-center">
                  <span class="offer-single__icon">
                    <i class="ti-ruler-pencil"></i>
                  </span>
                  <h4>User Friendly</h4>
                  <p>Disajikan dalam sebuah dashboard akun yang mudah dimengerti dan dikelola.</p>
                </div>
              </div>
            </div>
            <div class="row offer-single-wrapper">
              <div class="col-lg-6 offer-single">
                <div class="card offer-single__content text-center">
                  <span class="offer-single__icon">
                    <i class="ti-cut"></i>
                  </span>
                  <h4>Experts Team</h4>
                  <p>Dikembangkan oleh tim expert yang memiliki etika dan integritas tinggi.</p>
                </div>
              </div>
              <div class="col-lg-6 offer-single">
                <div class="card offer-single__content text-center">
                  <span class="offer-single__icon">
                    <i class="ti-headphone-alt"></i>
                  </span>
                  <h4>Dukungan 24/7</h4>
                  <p>Tim dukungan pelanggan kami siap membantu Anda apabila menemukan kesulitan.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="offer-single__img">
              <img class="img-fluid" src="<?php echo base_url('parason/img/home/offer.png');?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding--small bg-magnolia">
      <div class="container">
        <div class="row align-items-center pt-xl-3 pb-xl-5">
          <div class="col-lg-6">
            <div class="solution__img text-center text-lg-left mb-4 mb-lg-0">
              <img class="img-fluid" src="<?php echo base_url('parason/img/home/solution.png');?>" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="solution__content">
              <h2>Solusi Teknologi Terbaru</h2>
              <p>Semua data terintegrasi dan terenkripsi mampu memberikan informasi secara cepat, tepat dan akurat.</p>
              <a class="button button-light" href="<?php echo base_url('kontak');?>">Hubungi Kami</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php $this->load->view('homepage/layouts/_footer.php'); ?>

  <?php $this->load->view('homepage/layouts/_js.php'); ?>

</body>

</html>