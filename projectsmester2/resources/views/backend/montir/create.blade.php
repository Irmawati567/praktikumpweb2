@extends('template.master') 

@section('content') 
    <div class="container-fluid px-4"> 
        <h1 class="mt-4"><i class="bx bx-id-user bx-md"></i> Montir</h1> 
        <div class="d-flex justify-content-between mb-3"> 
            <!-- Breadcrum -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="/index">Admin</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/montir">Montir</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Tambah Data Montir</a>
                    </li>
                </ol>
            </nav>
            <!-- /Breadcrumb --> 
            <a href="/montir" class="btn btn-warning"><i class="bx bx-arrow-back"></i> kembali</a> 
        </div> 
        <div class="card shadow"> 
            <div class="card-body"> 
                <form action="/montir/simpan-data" method="POST">  
                    @csrf
                    <div class="form-group"> 
                        <label for="">Nomor </label> 
                        <input type="text" class="form-control" name="nomor" required> 
					</div><br>
                    <div class="form-group"> 
                        <label for="">Nama Montir </label> 
                        <input type="text" class="form-control" name="nama" required> 
					</div><br>
                    <div class="form-group"> 
                        <label for="">Jenis Kelamin </label>
                        <select name="gender" class="form-control" required>
                            <option value="" selected> -- pilih jenis kelamin --</option>
                            <option value="Laki - laki">Laki - laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
					</div><br>
                    <div class="form-group"> 
                        <label for="">Tanggal Lahir </label> 
                        <input type="date" class="form-control" name="tgl_lahir" required> 
					</div><br>
                    <div class="form-group"> 
                        <label for="">Tempat Lahir </label> 
                        <input type="text" class="form-control" name="tmp_lahir" required> 
					</div><br>
                    <div class="form-group"> 
                        <label for="">Keahlian </label> 
                        <input type="text" class="form-control" name="keahlian" required> 
					</div><br>
                    <div class="form-group">
                        <label for="">Kategori Montir </label>
                        <select name="kategori_montir_id" class="form-control" id="" required>
                            <option value="">-- Montir --</option>
                            @foreach ($kategoriData as $kategori)
                                <option value="{{ $kategori->nama }}">{{ $kategori->nama }}</option>
                            @endforeach
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