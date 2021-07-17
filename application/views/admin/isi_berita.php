
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
    <!-- Keloker -->


  <div class="container">
      <nav aria-label="breadcrumb" style="padding-top: 30px;">
        <ol class="breadcrumb bread justify-content-end bg-white">
        <li class="breadcrumb-item"><a href="<?=base_url('index.php')?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?=base_url('index.php/admin')?>">Admin</a></li>
        <li class="breadcrumb-item active" aria-current="page">Isi Berita</li>
        </ol>
    </nav>
  </div>

  <div class="container">
    <fieldset style="background-color: white;">
      <legend style="padding-left: 10px; font-size: 20px;">Isi Berita</legend>
      
      <div class="container">

        <form  class="formm">
          <div class="form-group row">
              <label for="user" class="col-sm-3 col-form-label">Judul Berita</label>
              <div class="col-sm">
                <input type="text" class="form-control" id="username" required placeholder="">
              </div>
          </div>

            <div class="form-group row">
              <label for="text-area" class="col-sm-3 col-form-label">Deskripsi Berita / Isi Berita</label>
              <div class="col-sm">
                <textarea class="form-control" id="text-area" rows="3" required placeholder=""></textarea>
              </div>  
          </div>

          <div class="form-group row">
            <label for="number" class="col-3 col-form-label">Nama</label> 
            <div class="col-sm">
              <input id="number" name="number" type="text" class="form-control" required placeholder="">
            </div>
          </div>

          <div class="form-group row">
              <label for="number" class="col-3 col-form-label">Asal Kampus</label> 
              <div class="col-sm">
                <input id="number" name="number" type="text" class="form-control" required placeholder="">
              </div>
            </div>

            <div class="form-group row">
              <label for="number" class="col-3 col-form-label">No. HP/Telpon</label> 
              <div class="col-sm">
                <input id="number" name="number" type="text" class="form-control" required placeholder="">
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-3 col-form-label">Email</label> 
              <div class="col-sm">
                <input id="email" name="email" type="email" class="form-control" required placeholder="">
              </div>
            </div> 

            <br>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Publish</button>
              <button class="btn btn-danger" type="reset">Batal</button>
            </div>
            <br>
        </form>

    </fieldset>
    
  </div>

    <!-- Keloker -->