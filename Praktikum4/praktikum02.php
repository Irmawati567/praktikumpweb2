<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

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
              <h3 class="card-title">Praktikum 02</h3>

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
              <h2>Belanja Online</h2> <hr>
                <table style=" width: 100%;">
                    <tr>
                        <td>
                            <form method="POST" action="form_belanja.php">
                                <div class="form-group row">
                                    <label for="customer" class="col-3 col-form-label text-right"><b>Customer</b></label> 
                                    <div class="col-8">
                                    <div class="input-group">
                                        <input id="customer" name="customer" type="text" placeholder="Nama Customer" class="form-control">
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3 text-right"><b>Pilih Produk</b></label> 
                                    <div class="col-8">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
                                        <label for="produk_0" class="custom-control-label">TV</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
                                        <label for="produk_1" class="custom-control-label">KULKAS</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci"> 
                                        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jumlah" class="col-3 col-form-label text-right"><b>Jumlah Beli</b></label> 
                                    <div class="col-8">
                                    <input id="jumlah" name="jumlah" type="text" placeholder="Jumlah" class="form-control">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="offset-3 col-8">
                                    <button name="proses" type="submit" class="btn btn-success">Kirim</button>
                                    </div>
                                </div>
                            </form> 
                        </td>
                        <td style="width: 90px;"></td>
                        <td>
                            <!-- Daftar Harga -->
                            <div class="container">
                            <table class="table" style="width: 100%;">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th colspan="3" scope="col">Daftar Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>TV</td>
                                        <td>:</td>
                                        <td>Rp4.200.000</td>
                                    </tr>
                                    <tr>
                                        <td>KULKAS</td>
                                        <td>:</td>
                                        <td>Rp3.100.000</td>
                                    </tr>
                                    <tr>
                                        <td>MESIN CUCI</td>
                                        <td>:</td>
                                        <td>Rp3.800.000</td>
                                    </tr>
                                </tbody>
                                <tfoot class="bg-primary text-white">
                                    <tr>
                                        <th colspan="3" scope="col">Harga Dapat Berubah Setiap Saat</th>
                                    </tr>
                                </tfoot>
                            </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><hr></td>
                    </tr>
                </table>
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