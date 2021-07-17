
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
        <li class="breadcrumb-item"><a href="<?=base_url('index.php/admin/kelola_loker')?>">Kelola Lowongan Kerja</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Lowongan Kerja</li>
        </ol>
    </nav>
  </div>

  <div class="container">
    <fieldset style="background-color: white;">
      <div class="col-md-12">
        <h2 class="mt-3 mb-4">Edit Lowongan Pekerjaan</h2>
      </div>
    
    <div class="container">
        <?= form_open('admin/update_loker') ?>
          <div class="form-group row">
            <label for="deskripsi_pekerjaan" class="col-4 col-form-label">Deskripsi Pekerjaan</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-audio-description"></i>
                  </div>
                </div> 
                <input id="deskripsi_pekerjaan" value="<?= $objloker->deskripsi_pekerjaan ?>" name="deskripsi_pekerjaan" type="text" required="required" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tanggal_akhir" class="col-4 col-form-label">Tanggal Akhir</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar"></i>
                  </div>
                </div> 
                <input id="tanggal_akhir" value="<?= $objloker->tanggal_akhir ?>" name="tanggal_akhir" type="date" required="required" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="mitra" class="col-4 col-form-label">Mitra</label> 
            <div class="col-8">
              <select id="id_mitra" name="mitra_id" required="required" class="custom-select">
                <?php foreach ($data_mitra as $data): ?>
                  <option value="<?php echo $data->id?>"><?php echo $data->nama ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-inbox"></i>
                  </div>
                </div> 
                <input id="email" value="<?= $objloker->email ?>" name="email" type="email" class="form-control">
              </div>
            </div>
          </div> 
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Update</button>
              <button name="reset" type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </div>
          <input type="hidden" name="idedit" value="<?= $objloker->id ?>">
        <?= form_close() ?>  
    </fieldset>
    </div>
  </div>
