
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
          <li class="nav-item active">
              <a class="nav-link" href="<?=base_url('index.php/daftar_mitra')?>">Daftar Mitra
              <span class="sr-only">(current)</span></a>
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
        <li class="breadcrumb-item"><a href="<?=base_url('index.php/daftar_mitra')?>">Daftar Mitra</a></li>
        <li class="breadcrumb-item active" aria-current="page">Form Menjadi Mitra</li>
        </ol>
    </nav>
  </div>

  <div class="container">
    <fieldset style="background-color: white;">
      <div class="col-md-12">
        <h2 class="mt-3 mb-4">Form Daftar Mitra</h2>
      </div>

    <div class="container">
        <?= form_open('daftar_mitra/submit_mitra') ?>
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                  <i class="far fa-building"></i>
                  </div>
                </div> 
                <input id="nama" name="nama" type="text" class="form-control" required="required">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat</label> 
            <div class="col-8">
              <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="kontak" class="col-4 col-form-label">Kontak</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-id-badge"></i>
                  </div>
                </div> 
                <input id="kontak" name="kontak" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="telpon" class="col-4 col-form-label">No.Telpon</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-phone-alt"></i>
                  </div>
                </div> 
                <input id="telpon" name="telpon" type="text" class="form-control" required="required">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-envelope"></i>
                  </div>
                </div> 
                <input id="email" name="email" type="email" class="form-control" required="required">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="web" class="col-4 col-form-label">Halaman Website</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fab fa-blogger"></i>
                  </div>
                </div>
                <input id="web" name="web" placeholder="https://website.co.id" type="url" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4 col-form-label" for="bidang_usaha_id">Bidang Usaha</label> 
            <div class="col-8">
              <select id="bidang_usaha_id" name="bidang_usaha_id" class="custom-select" required="required">
                <?php foreach ($data_bdusaha as $data): ?>
                  <option value="<?php echo $data->id ?>"><?php echo $data->nama ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="sektor_usaha_id" class="col-4 col-form-label">Sektor Usaha</label> 
            <div class="col-8">
              <select id="sektor_usaha_id" name="sektor_usaha_id" class="custom-select" required="required">
                <?php foreach ($data_shusaha as $data): ?>
                  <option value="<?php echo $data->id ?>"><?php echo $data->nama ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div> 
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
              <button name="reset" type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </div>
        <?= form_close() ?>
    </fieldset>
    </div>
  </div>