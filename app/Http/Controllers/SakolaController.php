<?php

namespace App\Http\Controllers;

use App\Models\Sakola;
use App\Http\Requests\StoreSakolaRequest;
use App\Http\Requests\UpdateSakolaRequest;

class SakolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreSakolaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSakolaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sakola  $sakola
     * @return \Illuminate\Http\Response
     */
    public function show(Sakola $sakola)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sakola  $sakola
     * @return \Illuminate\Http\Response
     */
    public function edit(Sakola $sakola)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSakolaRequest  $request
     * @param  \App\Models\Sakola  $sakola
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSakolaRequest $request, Sakola $sakola)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sakola  $sakola
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sakola $sakola)
    {
        //
    }
}
