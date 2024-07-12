<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class LayananController extends Controller
{
    function index()
    {
        $layananData = Layanan::get();
        return view('backend.layanan.index', compact('layananData'));
    }

    function create()
    {
        return view('backend.layanan.create');
    }

    function store(Request $request)
    {
        $layananData = $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'jenis_layanan_id' => 'required',
            'total_biaya' => 'required',
            'rating' => 'required'
        ]);

        Layanan::create($layananData);

        session()->flash('create','Yeay✔,Kamu berhasil <strong>menambahkan</strong> data');

        return redirect()->to('/layanan');
    }

    function edit($id)
    {
        $layananData = Layanan::find($id);
        return view('backend.layanan.edit', compact('layananData'));
    }

    function update($id, Request $request)
    {
        $validasiLayanan = $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'jenis_layanan_id' => 'required',
            'total_biaya' => 'required',
            'rating' => 'required'
        ]);

        $layananData = Layanan::find($id);
        $layananData->update($validasiLayanan);

        session()->flash('edit','Yeay🎉,Kamu berhasil <strong>mengedit</strong> data');

        return redirect()->to('/layanan');
    }

    function delete($id)
    {
        $layananData = Layanan::find($id);
        $layananData->delete();

        session()->flash('delete','Yeay👍,Kamu berhasil <strong>menghapus</strong> data');

        return redirect()->to('/layanan');
    }
}
