<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="<?php echo base_url('dashboard'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="<?php echo base_url('dashboard/berita'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                    Berita
                </a>
                <a class="nav-link" href="<?php echo base_url('dashboard/galeri'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
                    Galeri
                </a>
                <a class="nav-link" href="<?php echo base_url('dashboard/kontak'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                    Kontak
                </a>
                <a class="nav-link" href="<?php echo base_url('dashboard/profile'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Profile
                </a>
                <a class="nav-link" href="<?php echo base_url('dashboard/pengguna'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Pengguna
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?php echo $userdata->nama;?>
        </div>
    </nav>
</div>