
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
          <li class="breadcrumb-item active" aria-current="page">Berita</li>
          </ol>
      </nav>
    </div>

    <div class="container cf">
        <div class="main">
            <h3>Berita Terkini</h3>
            <div class="row">
                <div class="col-md berita">
                    <img src="" alt="" class="float-left">
                    <h3 class="bold1" id="berita1"><a href="<?=base_url('index.php/berita/berita1')?>">Full Stack Developer</a></h3>
                    <p>KULDO.CO membutuhkan seorang Full Stack Developer yang dapat bekerjasama dan berkolaborasi dengan tim teknologi, dalam rangka pengembangan teknologi untuk mewujudkan misi KULDO.CO</p>
                    <p>Last updated 5 mins ago</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md berita">
                    <img src="" alt="" class="float-left">
                    <h3 class="bold1" id="berita1"><a href="<?=base_url('index.php/berita/berita2')?>">Designer</a></h3>
                    <p>Razor Animation adalah perusahaan yang bergerak di bidang animasi dan periklanan. Didirikan oleh anak muda kreatif dan inovatif sejak 2014, menjadikan Razor Animation dipercaya oleh banyak Client di seluruh dunia! hingga saat ini ada lebih dari 5000+ perusahaan maupun perorangan telah menggunakan jasa Razor Animation.</p>
                    <p>Last updated 35 mins ago</p>
                </div>
            </div>
            <div class="row"> 
                <div class="col-md berita">
                    <img src="" alt="" class="float-left">
                    <h3 class="bold1" id="berita1"><a href="<?=base_url('index.php/berita/berita3')?>">Web Developer</a></h3>
                    <p>PT Netgat Utama adalah perusahaan yang bergerak di bidang Teknologi Informasi dan berdiri sejak tahun 1995. Dewasa ini PT Netgat menjelma sebagai IT Solution Partner yang dapat memberika solusi IT bagi client swasta maupun pemerintah.</p>
                    <p>Last updated 2 days ago</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md berita">
                    <img src="" alt="" class="float-left">
                    <h3 class="bold1" id="berita1"><a href="<?=base_url('index.php/berita/berita4')?>">Content Creator</a></h3>
                    <p>PT Kuyyow bergerak di bidang IT. Main usaha kami adalah supplier untuk laptop dan komputer bekas built-up. Di era Digital yang maju sangat cepat, oleh sebab itu kami menyadari untuk membangun bisnis ini di Online.</p>
                    <p>Last updated 4 days ago</P>
                </div>
            </div>
        </div>

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
