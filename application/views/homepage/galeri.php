<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('homepage/layouts/_meta.php'); ?>

    <title>Galeri - PT. XYZ TEKNOLOGI</title>

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
                            <h1>Galeri</h1>
                            <nav aria-label="breadcrumb" class="banner-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Beranda</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-margin">
            <div class="container">
                <section class="blog_area">
                    <div class="container">
                        <div class="row">
                            <?php foreach($galeri as $data): ?>
                            <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                                <div class="categories_post">
                                    <img style="width: 100%; height:200px" src="<?php echo base_url('upload/').$data->image;?>" alt="">
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main>

    <?php $this->load->view('homepage/layouts/_footer.php'); ?>

    <?php $this->load->view('homepage/layouts/_js.php'); ?>

</body>

</html>