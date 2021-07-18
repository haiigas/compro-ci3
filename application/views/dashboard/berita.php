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
                        <li class="breadcrumb-item active">Berita</li>
                    </ol>
                    <div class="row">
                        <p><a href="<?php echo base_url('create/berita');?>" class="btn btn-primary">Tambah</a></p>
                        <div class="col-md-12">
                            <?php if($this->session->flashdata('success')) { ?>
                            <div class="alert alert-success"><?php echo $this->session->flashdata('success');?></div>
                            <?php } ?>
                        </div>
                        <div class="col-md-12">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pengguna</th>
                                        <th>Judul</th>
                                        <th>Dibuat</th>
                                        <th>Diperbarui</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0; foreach($berita as $data): $no++; ?>
                                    <tr>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $data->author;?></td>
                                        <td><?php echo $data->judul;?></td>
                                        <td><?php echo $data->created;?></td>
                                        <td><?php echo $data->updated;?></td>
                                        <td><a href="<?php echo base_url('update/berita/'.$data->id);?>" class="btn btn-sm btn-primary">Edit</a> <a href="<?php echo base_url('delete/berita/'.$data->id);?>" class="btn btn-sm btn-danger">Hapus</a></td>
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