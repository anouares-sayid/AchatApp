<?php

namespace App\Http\Controllers;

use App\Portfolios;
use Illuminate\Http\Request;

class PortfoliosController extends Controller
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
        $portfolio = new Portfolios();
        $portfolio->company_id = $request->company_id;
        $portfolio->doc = $request->portfolioDoc->store('portfolioDocs');
        $portfolio->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Portfolios  $portfolios
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolios $portfolios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portfolios  $portfolios
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolios $portfolios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portfolios  $portfolios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolios $portfolios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portfolios  $portfolios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolios $portfolios)
    {
        //
    }
}
