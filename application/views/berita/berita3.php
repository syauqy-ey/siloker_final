
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
            <h3 class="beritabold text-center">PT Netgat</h3><br>
            <p class="jam text-center">Rabu, 4 November 2020 09.00 WIB</p>
            <div class="row">
                <div class="col-md imgmid">
                <div class="container d-flex justify-content-center">
                    <img src="" alt="" >
                </div>
                <p>Tanggung Jawab Pekerjaan :</p>
                  <ul>
                      <li>Merancang Tampilan Program, Membuat sketsa alur aplikasi kemudian membuat tampilan grafis</li>
                      <li>Mendefinisikan kebutuhan, menentukan jenis platform serta tools yang akan dibuat sesuai kebutuhan</li>
                      <li>Melakukan debug program, mengecek jika terjadi kesalahan atau eror pada suatu aplikasi</li>
                      <li>Menguji program yang telah dibuat, agar aplikasi yang dibuat bisa berjalan dengan baik</li>
                      <li>Melakukan perluasan, perbaikan dan revisi secara langsung untuk meningkatkan kinerja suatu aplikasi atau program yang dibuat</li>
                  </ul>

                  <p>Syarat Pengalaman : Pengalaman kerja minimal 1 tahun di bidangnya</p>
                  <p>Keahlian :</p>
                  <ul>
                      <li>Passion yang tinggi dibidang programming</li>
                      <li>Menguasai Bahasa Pemograman Minimal PHP</li>
                      <li>Memahami Konsep Programming MVC dengan PHP</li>
                      <li>Familiar dengan Framwork seperti CodeIgniter, Laravel dsb</li>
                      <li>Familiar dengan pemograman web based application</li>
                      <li>Memahami SQL Query</li>
                  </ul>

                  <p>Kualifikasi :</p>
                  <ul>
                      <li>SMK minimal pengalaman 1 tahun atau D3/S1 bidang Ilmu Komputer/Informatika</li>
                      <li>Mampu bekerja dalam Individu / Tim</li>
                      <li>Memiliki motivasi kerja yang tinggi, energik, dan kreatif</li>
                      <li>Ulet dan pekerja keras</li>
                      <li>Bertanggung Jawab terhadap pekerjaan</li>
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