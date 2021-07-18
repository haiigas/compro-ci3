<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
                <a class="navbar-brand logo_h text-white" href="<?php echo base_url();?>">XYZ TEKNOLOGI</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        <li class="nav-item active"><a class="nav-link" href="<?php echo base_url();?>">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('berita');?>">Berita</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('galeri');?>">Galeri</a>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
                            <ul class="dropdown-menu">
                                <?php foreach($profile as $menu): ?>
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('page/').$menu->slug;?>"><?php echo $menu->judul;?></a></li>
                                <?php endforeach;?>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('kontak');?>">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>