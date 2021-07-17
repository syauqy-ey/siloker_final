
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <a class="navbar-brand" href="<?=base_url('index.php')?>">SILOKERNF</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="<?=base_url('index.php')?>"><i class="fa fa-home" aria-hidden="true"></i>
              Home<span class="sr-only">(current)</span></a>
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
        </span>
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
    <div class="container side">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bread justify-content-end bg-white">
        <li class="breadcrumb-item active" aria-current="page">/ Home</li>
        </ol>
      </nav>
    </div>  

    <!-- Tentang -->
    <div class="container cf">
      <div class="main">
        <h1 class="f">Tentang SILOKERNF</h1>
        <p class="ptentang">Website SILOKERNF merupakan ruang bagi para pengguna untuk mengetahui banyak info perihal lowongan pekerjaan, serta memudahkan para mitra dan penyedia lowongan pekerjaan untuk mendapatkan pelamar kerja dengan cepat dan efisien. Ayo cari loker di SILOKERNF :)
        </p>
          <div class="row gambar">
            <div class="col-12">
              <div class="row">
                <div class="col-lg subberita">
                  <h3 class="bold" id="berita1">PT Kulow Indotech</h3>
                  <img src="" alt="" class="float-left">
                  <p class="pberita">KULDO.CO membutuhkan seorang Full Stack Developer yang dapat bekerjasama dan berkolaborasi dengan tim teknologi, dalam rangka pengembangan teknologi untuk mewujudkan misi KULDO.CO, “Meningkatkan dampak sosial ekonomi positif mitra produsen industri kreatif di Indonesia” melalui teknologi.</p>
                    <a class="viewmore float-right" href="<?=base_url('index.php/berita/berita1')?>">Lihat Detail</a>
                </div>
                <div class="col-lg subberita">
                  <h3 class="bold" id="berita2">PT Razor Animation</h3>
                  <img src="" alt="" class="float-left">
                  <p class="pberita">Razor Animation adalah perusahaan yang bergerak di bidang animasi dan periklanan. Didirikan oleh anak muda kreatif dan inovatif sejak 2014, menjadikan Razor Animation dipercaya oleh banyak Client di seluruh dunia! hingga saat ini ada lebih dari 5000+ perusahaan maupun perorangan telah menggunakan jasa Razor Animation.</p>
                    <a class="viewmore float-right" href="<?=base_url('index.php/berita/berita2')?>">Lihat Detail</a>
                </div>
              </div>
              <div class="row">
                <div class="col-lg subberita">
                  <h3 class="bold" id="berita3">PT Netgat</h3>
                  <img src="" alt="" class="float-left">
                  <p class="pberita">PT Netgat Utama adalah perusahaan yang bergerak di bidang Teknologi Informasi dan berdiri sejak tahun 1995. Dewasa ini PT Netgat menjelma sebagai IT Solution Partner yang dapat memberika solusi IT bagi client swasta maupun pemerintah.</p>
                    <a class="viewmore float-right" href="<?=base_url('index.php/berita/berita3')?>">Lihat Detail</a>
                </div>
                <div class="col-lg subberita">
                  <h3 class="bold" id="berita4">PT Kuyyow</h3>
                  <img src="" alt="" class="float-left">
                  <p class="pberita">PT Kuyyow bergerak di bidang IT. Main usaha kami adalah supplier untuk laptop dan komputer bekas built-up. Di era Digital yang maju sangat cepat, oleh sebab itu kami menyadari untuk membangun bisnis ini di Online. Kami sedang bertumbuh ke arah Digital yaitu dengan menjual di pasar Online.</p>
                    <a class="viewmore float-right" href="<?=base_url('index.php/berita/berita4')?>">Lihat Detail</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    <!-- /Tentang -->

      <!-- Sidebar -->
      <div class="sidebar">
        <h3>Berita Terkini:</h3>
        <?php foreach ($data_loker as $loker): ?>
            <a href="<?= base_url('index.php/lowongan/detail/'.$loker->id)?>"><p class="pberita">
            <?= $loker->deskripsi_pekerjaan?> </p></a>
        <?php endforeach ?>
      </div>
      <!-- /Sidebar -->
    </div>
