<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('homepage/layouts/_meta.php'); ?>

    <title>Kontak - PT. XYZ TEKNOLOGI</title>

    <link rel="icon" href="img/Fevicon.png" type="image/png">

    <?php $this->load->view('homepage/layouts/_css.php'); ?>

</head>

<body>

    <?php $this->load->view('homepage/layouts/_header.php'); ?>

    <main class="side-main">
        <section class="hero-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-banner--sm__content">
                            <h1>Kontak</h1>
                            <nav aria-label="breadcrumb" class="banner-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Beranda</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Kontak</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-margin">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                    <div id="map" style="height: 420px;"></div>
                    <script>
                        function initMap() {
                            var uluru = {
                                lat: -25.363,
                                lng: 131.044
                            };
                            var grayStyles = [{
                                    featureType: "all",
                                    stylers: [{
                                            saturation: -90
                                        },
                                        {
                                            lightness: 50
                                        }
                                    ]
                                },
                                {
                                    elementType: 'labels.text.fill',
                                    stylers: [{
                                        color: '#A3A3A3'
                                    }]
                                }
                            ];
                            var map = new google.maps.Map(document.getElementById('map'), {
                                center: {
                                    lat: -31.197,
                                    lng: 150.744
                                },
                                zoom: 9,
                                styles: grayStyles,
                                scrollwheel: false
                            });
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>

                </div>


                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata('success')) { ?>
                        <div class="alert alert-success"><?php echo $this->session->flashdata('success');?></div>
                        <?php } ?>

                        <?php if($this->session->flashdata('failed')) { ?>
                        <div class="alert alert-danger"><?php echo $this->session->flashdata('failed');?></div>
                        <?php } ?>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>PT. XYZ TEKNOLOGI</h3>
                                <p>KP. Gandasoli Kec. Wayanasa</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-headphone"></i></span>
                            <div class="media-body">
                                <h3><a href="tel:08500000000">08500000000</a></h3>
                                <p>Senin - Jumat 07:00 - 15:00</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3><a href="mailto:support@xtzteknologi.co.id">support@xtzteknologi.co.id</a></h3>
                                <p>Kirim kami pesan sekarang juga!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        <form action="" class="form-contact contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <input class="form-control" name="nama" id="name" type="text" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email" placeholder="Masukkan Email">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" placeholder="Masukkan Subject">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-group">
                                        <textarea class="form-control different-control w-100" name="pesan" id="message" cols="30" rows="5" placeholder="Tulis Pesan"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center text-md-right mt-3">
                                <button type="submit" name="kirim" class="button button-contactForm">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php $this->load->view('homepage/layouts/_footer.php'); ?>

    <?php $this->load->view('homepage/layouts/_js.php'); ?>

</body>

</html>