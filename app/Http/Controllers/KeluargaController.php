<?php

namespace App\Http\Controllers;

use App\Models\KeluargaModel;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keluarga = KeluargaModel::all();
        return view('keluarga', ['data' => $keluarga]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KeluargaModel  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function show(KeluargaModel $keluarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KeluargaModel  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function edit(KeluargaModel $keluarga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KeluargaModel  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KeluargaModel $keluarga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KeluargaModel  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(KeluargaModel $keluarga)
    {
        //
    }
}
