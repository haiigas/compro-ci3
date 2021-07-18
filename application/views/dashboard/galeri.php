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
                        <li class="breadcrumb-item active">Galeri</li>
                    </ol>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <?php if($this->session->flashdata('success')) { ?>
                            <div class="alert alert-success"><?php echo $this->session->flashdata('success');?></div>
                            <?php } ?>
                            <?php if($this->session->flashdata('failed')) { ?>
                            <div class="alert alert-danger"><?php echo $this->session->flashdata('failed');?></div>
                            <?php } ?>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Unggah Galeri</h3>
                                </div>
                                <form action="<?php echo base_url('create/galeri');?>" method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group mb-3">
                                            <label>Judul</label>
                                            <input type="text" name="judul" class="form-control" placeholder="Judul">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Gambar</label>
                                            <input type="file" name="gambar">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" name="unggah" class="btn btn-primary">Unggah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Oleh</th>
                                        <th>Dibuat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0; foreach($galeri as $data): $no++; ?>
                                    <tr>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $data->judul;?></td>
                                        <td><?php echo $data->author;?></td>
                                        <td><?php echo $data->created;?></td>
                                        <td><a href="<?php echo base_url('update/galeri/'.$data->id);?>" class="btn btn-sm btn-primary">Edit</a> <a href="<?php echo base_url('delete/galeri/'.$data->id);?>" class="btn btn-sm btn-danger">Hapus</a></td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>

            <?php $this->load->view('dashboard/layouts/_footer.php'); ?>

        </div>
    </div>

    <?php $this->load->view('dashboard/layouts/_js.php'); ?>

</body>

</html>