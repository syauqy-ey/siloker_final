
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
          <li class="nav-item active">
              <a class="nav-link" href="<?=base_url('index.php/berita')?>">Berita
              <span class="sr-only">(current)</span></a>
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
    <!-- Berita -->
    <div class="container side">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bread justify-content-end bg-white">
          <li class="breadcrumb-item"><a href="<?=base_url('index.php')?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?=base_url('index.php')?>">Berita</a></li>
          <li class="breadcrumb-item active" aria-current="page">Isi Berita</li>
          </ol>
      </nav>
    </div>

    <div class="container cf">
        <div class="main">
            <h3 class="beritabold text-center">PT Kuyyow</h3><br>
            <p class="jam text-center">Senin, 2 November 2020 13.00 WIB</p>
            <div class="row">
                <div class="col-md imgmid">
                <div class="container d-flex justify-content-center">
                    <img src="" alt="" >
                </div>
                <p>Tanggung Jawab Pekerjaan :</p>
                  <ul>
                      <li>Instal dan QC laptop</li>
                      <li>Manage jualan online</li>
                      <li>Menguasai produk dengan baik</li>
                      <li>Membantu Team dalam menyiapkan barang orderan</li>
                  </ul>
      
                  <p>Syarat Pengalaman : Pengalaman min 1 tahun kerja dan cantumkan karya terbaik</p>
                  <p>Keahlian :</p>
                  <ul>
                      <li>Menguasai laptop dalam software ( Install dll)</li>
                      <li>Menguasai photoshop , corel draw</li>
                      <li>Memiliki kerja team yang baik</li>
                      <li>Miliki semangat untuk belajar hal2 baru</li>
                      <li>Mampu bekerja di bawah tekanan dan target</li>
                  </ul>
      
                  <p>Kualifikasi :</p>
                  <ul>
                      <li>Pria dan wanita</li>
                      <li>Min 20tahun maks 28tahun</li>
                      <li>Memiliki kepribadian yang sopan dan baik</li>
                      <li>Tidak merokok</li>
                      <li>Memiliki tanggung jawab tinggi</li>
                      <li>Pendidikan Min SMK Jurusan komputer</li>
                  </ul>
                  <p>Berminat silahkan hubungi kami ke: 085156866078 (Budi mbayang)</p>
            </div>
        </div>
    </div>

      <!-- Sidebar -->
      <div class="sidebar">
        <h3>Lowongan Terkini:</h3>
        <?php foreach ($data_loker as $loker): ?>
            <a href="<?= base_url('index.php/lowongan/detail/'.$loker->id)?>"><p class="pberita">
            <?= $loker->deskripsi_pekerjaan?> </p></a>
        <?php endforeach ?>
      </div>
      <!-- /Sidebar -->
    </div>