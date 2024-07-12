<?php

namespace App\Http\Controllers;

use App\Models\KategoriMontir;
use App\Models\Montir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class MontirController extends Controller
{
    function index()
    {
        $montirData = Montir::get();
        return view('backend.montir.index', compact('montirData'));
    }

    function create()
    {
        $kategoriData = KategoriMontir::get();
        return view('backend.montir.create', compact('kategoriData'));
    }

    function store(Request $request)
    {
        $montirData = $request->validate([
            'nomor' => 'required',
            'nama' => 'required',
            'gender' => 'required',
            'tgl_lahir' => 'required',
            'tmp_lahir' => 'required',
            'keahlian' => 'required',
            'kategori_montir_id' => 'required'
        ]);

        Montir::create($montirData);

        session()->flash('create','Yeay✔,Kamu berhasil <strong>menambahkan</strong> data');

        return redirect()->to('/montir');
    }

    function edit($id)
    {
        $kategoriData = KategoriMontir::get();
        $montirData = Montir::find($id);
        return view('backend.montir.edit', compact('montirData', 'kategoriData'));
    }

    function update($id, Request $request)
    {
        $validasiMontir = $request->validate([
            'nomor' => 'required',
            'nama' => 'required',
            'gender' => 'required',
            'tgl_lahir' => 'required',
            'tmp_lahir' => 'required',
            'keahlian' => 'required',
            'kategori_montir_id' => 'required'
        ]);

        $montirData = Montir::find($id);
        $montirData->update($validasiMontir);

        session()->flash('edit','Yeay🎉,Kamu berhasil <strong>mengedit</strong> data');

        return redirect()->to('/montir');
    }

    function delete($id)
    {
        $montirData = Montir::find($id);
        $montirData->delete();

        session()->flash('delete','Yeay👍,Kamu berhasil <strong>menghapus</strong> data');

        return redirect()->to('/montir');
    }
}