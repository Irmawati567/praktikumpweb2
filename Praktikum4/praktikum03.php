<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tugas Praktikum</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Praktikum 03</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <div class="container">
                <h1>Form Registrasi IT Club Data Science</h1>
                <form method="POST" action="praktikum03.php">
                    <div class="form-group row">
                        <label for="nim" class="col-4 col-form-label">NIM</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-adn"></i>
                            </div>
                            </div> 
                            <input id="nim" name="nim" type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-card"></i>
                            </div>
                            </div> 
                            <input id="nama" name="nama" type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Jenis Kelamin</label> 
                        <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki"> 
                            <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan"> 
                            <label for="jk_1" class="custom-control-label">Perempuan</label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
                        <div class="col-8">
                        <select id="prodi" name="prodi" class="custom-select">
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Bisnis Digital">Bisnis Digital</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Skill web & Programming</label> 
                        <div class="col-8">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="HTML"> 
                            <label for="skill[]_0" class="custom-control-label">HTML</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="CSS"> 
                            <label for="skill[]_1" class="custom-control-label">CSS</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="JavaScript"> 
                            <label for="skill[]_2" class="custom-control-label">JavaScript</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="RWD Bootstrap"> 
                            <label for="skill[]_3" class="custom-control-label">RWD Bootstrap</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="PHP"> 
                            <label for="skill[]_4" class="custom-control-label">PHP</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="Python"> 
                            <label for="skill[]_5" class="custom-control-label">Python</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="Java"> 
                            <label for="skill[]_6" class="custom-control-label">Java</label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label> 
                        <div class="col-8">
                        <select id="domisili" name="domisili" class="custom-select">
                            <option value="Jakarta">Jakarta</option>
                            <option value="Bogor">Bogor</option>
                            <option value="Depok">Depok</option>
                            <option value="Tangerang">Tangerang</option>
                            <option value="Bekasi">Bekasi</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Email</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-gg-circle"></i>
                            </div>
                            </div> 
                            <input id="email" name="email" type="text" class="form-control">
                        </div>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Footer
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>