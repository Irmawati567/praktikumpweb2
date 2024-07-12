@extends('template.master')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4"><i class="bx bx-user bx-md"></i> Montir</h1>
        <div class="d-flex justify-content-between mb-3">
            <!-- Breadcrum -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1">
                <li class="breadcrumb-item">
                    <a href="/index">Admin</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="javascript:void(0);">Montir</a>
                </li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->
        <a href="/montir/create" class="btn btn-primary">Tambah Data <i class='bx bx-plus-circle' ></i></a>
        </div>
        @if(session('create'))
        <br><div class="alert alert-success alert-dismissible" role="alert">
            Yeay👏,Kamu berhasil <strong>menambahkan</strong> data
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div><br>
        @endif
        @if(session('edit'))
        <br><div class="alert alert-warning alert-dismissible" role="alert">
            Yeay🎉,Kamu berhasil <strong>mengedit</strong> data
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div><br>
        @endif
        @if(session('delete'))
        <br><div class="alert alert-danger alert-dismissible" role="alert">
            Yeay👍,Kamu berhasil <strong>menghapus</strong> data
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div><br>
        @endif
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nomor Montir</th>
                                <th>Nama Montir</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Tempat Lahir</th>
                                <th>Keahlian</th>
                                <th>Kategori Montir</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($montirData as $montir)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$montir->nomor}}</td>
                                <td>{{$montir->nama}}</td>
                                <td>{{$montir->gender}}</td>
                                <td>{{$montir->tgl_lahir}}</td>
                                <td>{{$montir->tmp_lahir}}</td>
                                <td>{{$montir->keahlian}}</td>
                                <td>{{$montir->kategori_montir_id}}</td>
                                <td>
                                    <a href="/montir/edit/{{ $montir->id }}">
                                    <button type="button" class="btn rounded-pill btn-icon btn-outline-warning">
                                        <span class="tf-icons bx bxs-pencil"></span>
                                    </button>
                                    </a>
                                    <button type="button" class="btn rounded-pill btn-icon btn-outline-danger" data-bs-toggle="modal" data-bs-target="#delete{{$montir->id}}">
                                        <span class="tf-icons bx bxs-trash"></span>
                                    </button>
                                    <!-- Modal 1-->
                                    <div class="modal fade" id="delete{{$montir->id}}">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="alert alert-danger" role="alert">This is a danger alert -- check it out ! <i class="bx bxs-error-alt"></i></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">Are you sure, you want to delete type {{$montir->nama}} ?</div>
                                                <div class="modal-footer">
                                                    <a href="/montir/delete/{{ $montir->id }}">
                                                    <button class="btn btn-danger" >
                                                        Delete Data 
                                                    </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
