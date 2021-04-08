<?php

namespace App\Http\Controllers;

use App\Tinders;
use Carbon\Carbon;
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
        $request->validate([
            'buyer' => 'required',
            'procurementMethod'=> 'required',
            'marketType' => 'required',
            'estimatedCost' => 'required',
            'activityField' => 'required',
            'category' => 'required',
            'agreement' =>'required'
        ]);
        $tinder = new tinders();
        $tinder->buyer_id = $request->input('buyer'); 
        $tinder->procurementMethod = $request->input('procurementMethod');
        $tinder->marketType = $request->input('marketType');
        $tinder->estimatedCost=$request->input('estimatedCost');
        $tinder->activityField=$request->input('activityField');
        $tinder->category=$request->input('category');
        $tinder->agreement=$request->input('agreement');

        return redirect()->back()->with('succes','tinder stored successfully.');
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
    public function destroy($id)
    {
        Tinders::find($id)->delete();  
        return redirect()->back()->with('succes','tinder removed successfully');
        //
    }
    //terminer l'appel d'offre auto...
    public function archive($id){
        $tinder=Tinders::find($id);
        $diff = Carbon::now()->diffInDays($tinder->date);
        if(Carbon::now()->greaterThanOrEqualTo($tinder->date)){
            return view('acheteur.index');
        }
        //dd($mytime);
        return redirect()->back();

    }
}
