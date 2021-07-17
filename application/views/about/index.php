
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
      <a class="navbar-brand" href="<?=base_url('index.php')?>">SILOKERNF</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
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
            <li class="nav-item active">
                <a class="nav-link" href="<?=base_url('index.php/about')?>">About
                <span class="sr-only">(current)</span></a>
                
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
  <div class="container bout">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bread justify-content-end bg-white">
      <li class="breadcrumb-item"><a href="<?=base_url('index.php')?>">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">About</li>
      </ol>
    </nav>
  </div>  

  <!-- isi -->
    <div class="container bg-white bout2">
        <h1 class="b">About our Team</h1>
        <div class="garis"></div>
        <div class="row">
            <div class="col-12">
              <div class="row">
                <div class="col-lg profil">
                  <img src="<?php echo base_url(); ?>public/img/syauqi.jpg" alt="">
                  <h3 class="nama1">Syauqi Musyaffa Khairullah</h3>
                  <a href="#"><i class="fab fa-2x fa-facebook-square" style="color: #1877F2;" aria-hidden="true"></i></a>
                  <a href="#"><i class="fab fa-2x fa-instagram" style="color: #E1306C;" aria-hidden="true"></i></a>
                  <a href="https://github.com" target="_blank"><i class="fab fa-2x fa-github" style="color: #595959;" aria-hidden="true"></i></a>
                </div>
                <div class="col-lg profil">
                  <img src="<?php echo base_url(); ?>public/img/dian.jpg" alt="">
                  <h3 class="nama1">Dian Novita</h3>
                  <a href="#"><i class="fab fa-2x fa-facebook-square" style="color: #1877F2;" aria-hidden="true"></i></a>
                  <a href="#"><i class="fab fa-2x fa-instagram" style="color: #E1306C;" aria-hidden="true"></i></a>
                  <a href="https://github.com" target="_blank"><i class="fab fa-2x fa-github" style="color: #595959;" aria-hidden="true"></i></a></div>
              </div>
              <div class="row">
                <div class="col-lg profil">
                  <img src="<?php echo base_url(); ?>public/img/dimas.jpg" alt="">
                  <h3 class="nama1">Dimas Aprillianto</h3>
                  <a href="#"><i class="fab fa-2x fa-facebook-square" style="color: #1877F2;" aria-hidden="true"></i></a>
                  <a href="#"><i class="fab fa-2x fa-instagram" style="color: #E1306C;" aria-hidden="true"></i></a>
                  <a href="https://github.com" target="_blank"><i class="fab fa-2x fa-github" style="color: #595959;" aria-hidden="true"></i></a>
                  </div>
                <div class="col-lg profil">
                  <img src="<?php echo base_url(); ?>public/img/yusuf.jpg" alt="">
                  <h3 class="nama1">S. Muh. Yusuf</h3>
                  <a href="#"><i class="fab fa-2x fa-facebook-square" style="color: #1877F2;" aria-hidden="true"></i></a>
                  <a href="#"><i class="fab fa-2x fa-instagram" style="color: #E1306C;" aria-hidden="true"></i></a>
                  <a href="https://github.com" target="_blank"><i class="fab fa-2x fa-github" style="color: #595959;" aria-hidden="true"></i></a></div>
              </div>
            </div>
          </div>
    </div>
