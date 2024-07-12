@extends('template.master') 

@section('content') 
    <div class="container-fluid px-4"> 
        <h1 class="mt-4"><i class="bx bx-id-user bx-md"></i> Layanan</h1> 
        <div class="d-flex justify-content-between mb-3"> 
            <!-- Breadcrum -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="/index">Admin</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/layanan"> Layanan</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Tambah Data Layanan</a>
                    </li>
                </ol>
            </nav>
            <!-- /Breadcrumb --> 
            <a href="/layanan" class="btn btn-warning"><i class="bx bx-arrow-back"></i> kembali</a> 
        </div> 
        <div class="card shadow"> 
            <div class="card-body"> 
                <form action="/layanan/simpan-data" method="POST">  
                    @csrf
                    <div class="form-group"> 
                        <label for="">Kode </label> 
                        <input type="text" class="form-control" name="kode" required> 
					</div><br>
                    <div class="form-group"> 
                        <label for="">Nama Layanan</label> 
                        <input type="text" class="form-control" name="nama" required> 
					</div><br>
                    <div class="form-group"> 
                        <label for="">Deskripsi</label> 
                        <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control" required></textarea> 
					</div><br>
                    <div class="form-group"> 
                        <label for="">Jenis Layanan </label>
                        <select name="jenis_layanan_id" class="form-control" required>
                            <option value="" selected> -- pilih jenis layanan --</option>
                            <option value="Servis Berat">Servis Berat</option>
                            <option value="Servis Ringan">Servis Ringan</option>
                            <option value="Body Repair">Body Repair</option>
                            <option value="Lain - lain">Lain - lain</option>
                        </select>
					</div><br>
                    <div class="form-group"> 
                        <label for="">Total Biaya </label> 
                        <input type="number" class="form-control" name="total_biaya" required> 
					</div><br>
                    <div class="form-group">
                        <label for="">Rating </label>
                        <select name="rating" class="form-control" id="" required>
                            <option value="" selected> -- pilih rating --</option>
                            <option value="Sangat puas">Sangat puas</option>
                            <option value="Puas">Puas</option>
                            <option value="Tidak Puas">Tidak Puas</option>
                            <option value="Sangat tidak puas">Sangat tidak puas</option>
                        </select>
                    </div>
                    <div class="form-group mt-3"> 
                        <button class="form-control btn btn-primary" type="submit">Simpan</button><br><br>
                        <button class="form-control btn btn-outline-danger" type="reset">Reset</button>
                    </div> 
                </form> 
            </div> 
        </div> 
    </div> 
        @endsection