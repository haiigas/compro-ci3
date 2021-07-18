<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('dashboard/layouts/_meta.php'); ?>

    <title>Dashboard - PT. XYZ TEKNOLOGI</title>

    <?php $this->load->view('dashboard/layouts/_css.php'); ?>

</head>

<body class="sb-nav-fixed">

    <?php $this->load->view('dashboard/layouts/_header.php'); ?>

    <div id="layoutSidenav">

        <?php $this->load->view('dashboard/layouts/_sidebar.php'); ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Edit Berita</li>
                    </ol>
                    <?php if ($this->session->flashdata('failed')) { ?>
                        <div class="alert alert-danger"><?php echo $this->session->flashdata('failed'); ?></div>
                    <?php } ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label>Judul</label>
                            <input type="text" name="judul" value="<?php echo $berita->judul; ?>" class="form-control" placeholder="Judul">
                        </div>
                        <div class="form-group mb-3">
                            <label>Konten</label>
                            <textarea class="form-control" name="konten" placeholder="Konten"><?php echo $berita->konten; ?></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Thumbnail</label><br>
                            <input type="file" name="gambar">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </main>

            <?php $this->load->view('dashboard/layouts/_footer.php'); ?>

        </div>
    </div>

    <?php $this->load->view('dashboard/layouts/_js.php'); ?>

</body>

</html>