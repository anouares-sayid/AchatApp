<?php

namespace App\Http\Controllers;

use App\Tinders;
use Illuminate\Http\Request;

class TindersController extends Controller
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

        $tinder = new tinders();
        $tinder->buyer_id = $request->buyer_id;
        $tinder->procurementMethod = $request->procurementMethod;
        $tinder->marketType = $request->marketType;
        $tinder->estimatedCost=$request->estimatedCost;
        $tinder->activityField=$request->activityField;
        $tinder->category=$request->category;
        $tinder->agreement=$request->agreement;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tinders  $tinders
     * @return \Illuminate\Http\Response
     */
    public function show(Tinders $tinders)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tinders  $tinders
     * @return \Illuminate\Http\Response
     */
    public function edit(Tinders $tinders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tinders  $tinders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tinders $tinders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tinders  $tinders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tinders $tinders)
    {
        //
    }
}
