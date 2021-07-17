
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
      <a class="navbar-brand" href="<?=base_url('index.php')?>">SILOKERNF</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('index.php')?>"><i class="fa fa-home" aria-hidden="true"></i>
              Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('index.php/lowongan')?>">Lowongan Baru</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?=base_url('index.php/isi_loker')?>">Isi Loker</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?=base_url('index.php/daftar_mitra')?>">Daftar Mitra</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?=base_url('index.php/berita')?>">Berita</a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('index.php/about')?>">About</a>
            </li>
        </ul>
        <?php
          if($this->session->has_userdata('username')){
            $username = $this->session->username;
          }else{
            $username = 'Login';
          }
        ?>
        <div class="navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#!" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-lg fa-user-circle"></i> <?=$username?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#!">My Account</a>
                        <div class="dropdown-divider"></div>
                        <?php 
                          if($this->session->has_userdata('username')){ ?>
                        <?php 
                          } else{ ?>
                          <div class="container">
                            <a class="btn btn-primary dropdown-item active" href="<?=base_url('index.php/user/login')?>">Login</a>
                          </div>
                        <?php
                          }
                        ?>
                        <?php 
                          if($this->session->has_userdata('username')){ ?>
                          <div class="container">
                            <a class="btn btn-danger dropdown-item active" href="<?=base_url('index.php/user/logout')?>">Logout</a>
                          </div>
                        <?php 
                          } 
                        ?>
                    </div>
                </li>
            </ul>
        </div>
      </div>
  </nav>
  <!-- Navbar -->

  <!-- isi -->
    <!-- container -->
    <div class="container bg-white padd">
        <div class="jumbotron jumbotron-fluid bg-info text-center admin">
            <div class="container">
            <h1 style="font-family: 'Varela Round', sans-serif;" class="display-4"><i class="fa fa-user" aria-hidden="true"></i>
                Selamat Datang, <?=$username?></h1>
            <p class="lead">Silahkan pilih menu-menu dibawah ini untuk memulai mengelola data.</p>
            </div>
        </div>
    <!-- /container -->
    <!-- menu -->
    <div class="row">
        <div class="col-md-12 mt-2 ml-2 mr-2">
            <div class="row d-flex justify-content-start text-center">
                <div class="col-md menu btn-light">
                    <a href="<?=base_url('index.php/admin/kelola_loker')?>" role="button" aria-pressed="true">
                        <i class="fa fa-briefcase fa-4x text-info" aria-hidden="true"></i></br>
                        <p>Kelola Lowongan Kerja</p>
                    </a>
                </div>
                <div class="col-md menu btn-light">
                    <a href="<?=base_url('index.php/admin/kelola_mitra')?>" role="button" aria-pressed="true">
                        <i class="fas fa-user-edit fa-4x text-info" aria-hidden="true"></i></br>
                        <p>Kelola Mitra</p>
                    </a>
                </div>
                <div class="col-md menu btn-light">
                    <a href="<?=base_url('index.php/admin/kelola_peminat')?>" role="button" aria-pressed="true">
                        <i class="far fa-id-card fa-4x text-info" aria-hidden="true"></i></br>
                        <p>Kelola Peminat Lowongan</p>
                    </a>
                </div>
                <div class="col-md menu btn-light">
                    <a href="<?=base_url('index.php/admin/isi_berita')?>" role="button" aria-pressed="true">
                        <i class="fas fa-folder-plus fa-4x text-info" aria-hidden="true"></i></br>
                        <p>Isi Berita</p>
                    </a>
                </div>
                <div class="col-md menu btn-light">
                    <a href="<?=base_url('index.php/admin/daftar_berita')?>" role="button" aria-pressed="true">
                        <i class="fas fa-newspaper fa-4x text-info" aria-hidden="true"></i></br>
                        <p>Daftar Berita</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /menu -->

