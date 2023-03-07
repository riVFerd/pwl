<?php

namespace App\Http\Controllers;

use App\Models\HobbyModel;
use Illuminate\Http\Request;

class HobbyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hobbies = HobbyModel::all();
        return view('hobbies', ['hobbies' => $hobbies]);
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
     * @param  \App\Models\HobbyModel  $hobby
     * @return \Illuminate\Http\Response
     */
    public function show(HobbyModel $hobby)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HobbyModel  $hobby
     * @return \Illuminate\Http\Response
     */
    public function edit(HobbyModel $hobby)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HobbyModel  $hobby
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HobbyModel $hobby)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HobbyModel  $hobby
     * @return \Illuminate\Http\Response
     */
    public function destroy(HobbyModel $hobby)
    {
        //
    }
}
