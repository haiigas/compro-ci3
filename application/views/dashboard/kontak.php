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
                        <li class="breadcrumb-item active">Kontak</li>
                    </ol>
                    <div class="row">
                        <?php if($this->session->flashdata('success')) { ?>
                        <div class="alert alert-success"><?php echo $this->session->flashdata('success');?></div>
                        <?php } ?>
                        <?php if($this->session->flashdata('failed')) { ?>
                        <div class="alert alert-danger"><?php echo $this->session->flashdata('failed');?></div>
                        <?php } ?>
                        <div class="col-md-12">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Subjek</th>
                                        <th>Dibuat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0; foreach($kontak as $data): $no++; ?>
                                    <tr>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $data->nama;?></td>
                                        <td><?php echo $data->email;?></td>
                                        <td><?php echo $data->subjek;?></td>
                                        <td><?php echo $data->created;?></td>
                                        <td><a href="<?php echo base_url('dashboard/read_kontak/').$data->id;?>" class="btn btn-sm btn-primary">Lihat</a> <a href="<?php echo base_url('delete/kontak/').$data->id;?>" class="btn btn-sm btn-danger">Hapus</a></td>
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