<?php

namespace App\Http\Controllers;

use App\Lots;
use Illuminate\Http\Request;

class LotsController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $lot = new lots();
        $lot->tinder_id = $request->tinder_id;
        $lot->descrition = $request->descrition;
        $lot->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lots  $lots
     * @return \Illuminate\Http\Response
     */
    public function show(Lots $lots)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lots  $lots
     * @return \Illuminate\Http\Response
     */
    public function edit(Lots $lots)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lots  $lots
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lots $lots)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lots  $lots
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lots $lots)
    {
        //
    }
}
