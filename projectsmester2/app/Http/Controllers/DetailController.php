<?php

namespace App\Http\Controllers;

use App\Models\DetailLayanan;
use App\Models\Layanan;
use App\Models\Montir;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    function index()
    {
        $detailLayananData = DetailLayanan::get();
        return view('backend.detailLayanan.index', compact('detailLayananData'));
    }

    function create()
    {
        $layananData = Layanan::get();
        $montirData = Montir::get();
        return view('backend.detailLayanan.create', compact('layananData', 'montirData'));
    }

    function store(Request $request)
    {
        $detailLayananData = $request->validate([
            'pekerjaan' => 'required',
            'biaya' => 'required',
            'layanan_id' => 'required',
            'montir_id' => 'required'
        ]);

        DetailLayanan::create($detailLayananData);

        session()->flash('create','Yeay✔,Kamu berhasil <strong>menambahkan</strong> data');

        return redirect()->to('/detailLayanan');
    }

    function edit($id)
    {
        $detailLayananData = DetailLayanan::find($id);
        $layananData = Layanan::get();
        $montirData = Montir::get();
        return view('backend.detailLayanan.edit', compact('detailLayananData', 'layananData', 'montirData'));
    }

    function update($id, Request $request)
    {
        $validasiDetail = $request->validate([
            'pekerjaan' => 'required',
            'biaya' => 'required',
            'layanan_id' => 'required',
            'montir_id' => 'required'
        ]);

        $detailLayananData = DetailLayanan::find($id);
        $detailLayananData->update($validasiDetail);

        session()->flash('edit','Yeay🎉,Kamu berhasil <strong>mengedit</strong> data');

        return redirect()->to('/detailLayanan');
    }

    function delete($id)
    {
        $detailLayananData = DetailLayanan::find($id);
        $detailLayananData->delete();

        session()->flash('delete','Yeay👍,Kamu berhasil <strong>menghapus</strong> data');

        return redirect()->to('/detailLayanan');
    }
}
