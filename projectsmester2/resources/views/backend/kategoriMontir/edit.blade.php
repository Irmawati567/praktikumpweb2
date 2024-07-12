@extends('template.master') 

@section('content') 
    <div class="container-fluid px-4"> 
        <h1 class="mt-4"><i class="bx bx-id-card bx-md"></i> Kategori Montir</h1> 
        <div class="d-flex justify-content-between mb-3"> 
            <!-- Breadcrum -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="/index">Admin</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/kategori_montir">Kategori Montir</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Edit Data Kategori Montir</a>
                    </li>
                </ol>
            </nav>
            <!-- /Breadcrumb --> 
            <a href="/kategori_montir" class="btn btn-warning"><i class="bx bx-arrow-back"></i> kembali</a> 
        </div> 
        <div class="card shadow"> 
            <div class="card-body"> 
                <form action="/kategori_montir/update/{{$kategori_montirData->id}}" method="POST">  
                    @csrf 
                    <div class="form-group"> 
                        <label for="">Nama Kategori</label> 
                        <input type="text" class="form-control" name="nama" value="{{$kategori_montirData->nama}}" required> 
					</div><br>
                    <div class="form-group mt-3"> 
                        <button class="form-control btn btn-primary" type="submit">Simpan</button> 
                    </div> 
                </form> 
            </div> 
        </div> 
    </div> 
        @endsection