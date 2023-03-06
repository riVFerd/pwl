<?php

namespace App\Http\Controllers;

use App\Models\KendaraanModel;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = KendaraanModel::all();
        return view('kendaraan', ['data' => $data]);
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
     * @param  \App\Models\KendaraanModel  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function show(KendaraanModel $kendaraan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KendaraanModel  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function edit(KendaraanModel $kendaraan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KendaraanModel  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KendaraanModel $kendaraan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KendaraanModel  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function destroy(KendaraanModel $kendaraan)
    {
        //
    }
}
