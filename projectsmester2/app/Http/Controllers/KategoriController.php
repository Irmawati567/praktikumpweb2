<?php

namespace App\Http\Controllers;

use App\Models\KategoriMontir;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    function index()
    {
        $kategori_montirData = KategoriMontir::get();
        return view('backend.kategoriMontir.index', compact('kategori_montirData'));
    }

    function create()
    {
        return view('backend.kategoriMontir.create');
    }

    function store(Request $request)
    {
        $kategori_montirData = $request->validate([
            'nama' => 'required'
        ]);

        KategoriMontir::create($kategori_montirData);

        session()->flash('create','Yeay✔,Kamu berhasil <strong>menambahkan</strong> data');

        return redirect()->to('/kategori_montir');
    }

    function edit($id)
    {
        $kategori_montirData = KategoriMontir::find($id);
        return view('backend.kategoriMontir.edit', compact('kategori_montirData'));
    }

    function update($id, Request $request)
    {
        $validasiKategori = $request->validate([
            'nama' => 'required'
        ]);

        $kategori_montirData = KategoriMontir::find($id);
        $kategori_montirData->update($validasiKategori);

        session()->flash('edit','Yeay🎉,Kamu berhasil <strong>mengedit</strong> data');

        return redirect()->to('/kategori_montir');
    }

    function delete($id)
    {
        $kategori_montirData = KategoriMontir::find($id);
        $kategori_montirData->delete();

        session()->flash('delete','Yeay👍,Kamu berhasil <strong>menghapus</strong> data');

        return redirect()->to('/kategori_montir');
    }
}
