<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ambil data pasien dri dtabase
        $list_pasien = Pasien::all();
        //kirim data
        return view('pasien.index', compact('list_pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'gender' => 'required|string',
            'email' => 'required|string',
            'alamat' => 'required|string',
        ]);

        //simpan data
        Pasien::create([
            'kode' => $request -> kode,
            'nama' => $request -> nama,
            'tmp_lahir' => $request -> tmp_lahir,
            'tgl_lahir' => $request -> tgl_lahir,
            'gender' => $request -> gender,
            'email' => $request -> email,
            'alamat' => $request -> alamat,
        ]);

        //pindah ke dashbor
        return redirect()->route('pasiens.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        return view('pasien.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        return view('pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        $pasien->update($request->all());
        return redirect()->route('pasiens.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return redirect()->route('pasiens.index')->with('success', 'Pasien deleted successfully');
    }
}
