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
                        <li class="breadcrumb-item active">Edit Pengguna</li>
                    </ol>
                    <?php if ($this->session->flashdata('failed')) { ?>
                        <div class="alert alert-danger"><?php echo $this->session->flashdata('failed'); ?></div>
                    <?php } ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label>Username</label>
                            <input type="text" value="<?php echo $users->username;?>" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" value="<?php echo $users->nama;?>" name="nama" class="form-control" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group mb-3">
                            <label>Email</label>
                            <input type="email" value="<?php echo $users->email;?>" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group mb-3">
                            <label>Avatar</label><br>
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