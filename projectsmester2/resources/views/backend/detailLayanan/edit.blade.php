@extends('template.master') 

@section('content') 
    <div class="container-fluid px-4"> 
        <h1 class="mt-4"><i class="bx bx-receipt bx-md"></i> Detail Layanan</h1> 
        <div class="d-flex justify-content-between mb-3"> 
            <!-- Breadcrum -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="/index">Admin</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/detailLayanan">Detail Layanan</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Edit Data Detail Layanan</a>
                    </li>
                </ol>
            </nav>
            <!-- /Breadcrumb --> 
            <a href="/detailLayanan" class="btn btn-warning"><i class="bx bx-arrow-back"></i> kembali</a> 
        </div> 
        <div class="card shadow"> 
            <div class="card-body"> 
                <form action="/detailLayanan/update/{{$detailLayananData->id}}" method="POST">  
                    @csrf
                    <div class="form-group"> 
                        <label for="">Pekerjaan</label> 
                        <input type="text" class="form-control" name="pekerjaan" value="{{$detailLayananData->pekerjaan}}" required> 
					</div><br>
                    <div class="form-group"> 
                        <label for="">Biaya</label> 
                        <input type="number" class="form-control" name="biaya" value="{{$detailLayananData->biaya}}" required> 
					</div><br>
                    <div class="form-group">
                        <label for="">Layanan</label>
                        <select name="layanan_id" class="form-control" value="{{$detailLayananData->layanan_id}}" required>
                            <option value="">-- pilih layanan --</option>
                            @foreach ($layananData as $layanan_id)
                                <option value="{{ $layanan_id->id }}">{{ $layanan_id->nama }}</option>
                            @endforeach
                        </select><br>
                    </div>
                    <div class="form-group">
                        <label for="">Montir</label>
                        <select name="montir_id" class="form-control" value="{{$detailLayananData->montir_id}}" required>
                            <option value="">-- pilih montir --</option>
                            @foreach ($montirData as $montir_id)
                                <option value="{{ $montir_id->nama }}">{{ $montir_id->nama }}</option>
                            @endforeach
                        </select><br>
                    </div>
                    <div class="form-group mt-3"> 
                        <button class="form-control btn btn-primary" type="submit">Simpan</button><br><br>
                    </div> 
                </form> 
            </div> 
        </div> 
    </div> 
        @endsection