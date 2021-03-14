<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
<a class="navbar-brand" href="index.html"><?=$this->fungsi->user_login()->username?></a>
<button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>

<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

</form>

<ul class="navbar-nav ml-auto ml-md-0">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?=site_url('auth/logout')?>">Logout</a>
        </div>
    </li>
</ul>
</nav>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu" >
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Jumlah</div>
                    <a class="nav-link" href="<?= base_url('dashboard') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    
                    <div class="sb-sidenav-menu-heading">Daftar isi</div>
                    <a class="nav-link" href="<?=base_url();?>data_karyawan">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Data Karyawan
                    </a>
                    <a class="nav-link" href="<?=base_url();?>data_absensi">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Data Absensi
                    </a>

                    <a class="nav-link" href="<?= base_url('user') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                        Data Users
                    </a> 
                </div>
            </div>

            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <?=$this->fungsi->user_login()->name?>
            </div>  
        </nav>
    </div>
    </div>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <ol class="breadcrumb mb-4 mt-4">
                <li class="breadcrumb-item active">{breadcrumb}</lsi>
            </ol>
            
            
       
    </main>
</div>
