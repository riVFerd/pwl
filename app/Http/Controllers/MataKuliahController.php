<?php

namespace App\Http\Controllers;

use App\Models\MataKuliahModel;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matakuliah = MataKuliahModel::all();
        return view('matakuliah', ['data' => $matakuliah]);
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
     * @param  \App\Models\MataKuliahModel  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function show(MataKuliahModel $mataKuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MataKuliahModel  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function edit(MataKuliahModel $mataKuliah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MataKuliahModel  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MataKuliahModel $mataKuliah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MataKuliahModel  $mataKuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy(MataKuliahModel $mataKuliah)
    {
        //
    }
}
