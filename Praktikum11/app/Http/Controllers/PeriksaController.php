<?php

namespace App\Http\Controllers;

use App\Models\periksa;
use Illuminate\Http\Request;

class PeriksaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_periksa = Periksa::all();
        return view('periksa.index', compact('list_periksa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(periksa $periksa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(periksa $periksa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, periksa $periksa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(periksa $periksa)
    {
        //
    }
}
