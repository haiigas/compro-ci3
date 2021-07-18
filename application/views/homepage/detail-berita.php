<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('homepage/layouts/_meta.php'); ?>

    <title><?php echo $detail->judul;?> - PT. XYZ TEKNOLOGI</title>

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
                            <h1>Berita</h1>
                            <nav aria-label="breadcrumb" class="banner-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Beranda</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Berita</li>
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
                            <div class="col-lg-8">
                                <div class="blog_left_sidebar">
                                    <article class="row blog_item">
                                        <div class="col-md-12">
                                            <div class="blog_post">
                                                <img style="width: 100%" src="<?php echo base_url('upload/').$detail->image;?>" alt="">
                                                <div class="blog_details">
                                                    <h2><?php echo $detail->judul;?></h2>
                                                    <p><?php echo $detail->konten;?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="blog_right_sidebar">
                                    <aside class="single_sidebar_widget popular_post_widget">
                                        <h3 class="widget_title">Popular Posts</h3>
                                        <div class="media post_item">
                                            <img src="img/blog/popular-post/post1.jpg" alt="post">
                                            <div class="media-body">
                                                <a href="single-blog.html">
                                                    <h3>Space The Final Frontier</h3>
                                                </a>
                                                <p>02 Hours ago</p>
                                            </div>
                                        </div>
                                        <div class="media post_item">
                                            <img src="img/blog/popular-post/post2.jpg" alt="post">
                                            <div class="media-body">
                                                <a href="single-blog.html">
                                                    <h3>The Amazing Hubble</h3>
                                                </a>
                                                <p>02 Hours ago</p>
                                            </div>
                                        </div>
                                        <div class="media post_item">
                                            <img src="img/blog/popular-post/post3.jpg" alt="post">
                                            <div class="media-body">
                                                <a href="single-blog.html">
                                                    <h3>Astronomy Or Astrology</h3>
                                                </a>
                                                <p>03 Hours ago</p>
                                            </div>
                                        </div>
                                        <div class="media post_item">
                                            <img src="img/blog/popular-post/post4.jpg" alt="post">
                                            <div class="media-body">
                                                <a href="single-blog.html">
                                                    <h3>Asteroids telescope</h3>
                                                </a>
                                                <p>01 Hours ago</p>
                                            </div>
                                        </div>
                                        <div class="br"></div>
                                    </aside>
                                </div>
                            </div>
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