<?php

namespace App\Http\Controllers;

use App\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{








   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $companies = Companies::All();
         
     
    return view('administrateur.index',compact('companies'));
        

    }

    public function users()
    {
        $companies = Companies::All();
         
     
    return view('administrateur.utilisateurs',compact('companies'));
        

    }





    public function requests()
    {
        $companies = Companies::All();
         
     
    return view('administrateur.demandes',compact('companies'));
        
    }





    public function RefuseUser(Request $request)
    {
        $company= Companies::find($request->user_id);
        $company->Status="Refused";
        $company->save(); 
     
        return redirect()->back()->with('success','user Refused sucessfully ! ');
        
    }





    public function AcceptUser(Request $request)
    {
        $company= Companies::find($request->user_id);
        $company->Status="Accepted";
        $company->save(); 
     
        return redirect()->back()->with('success','user Accepted sucessfully ! ');
        
    }




    public function RemoveUser(Request $request)
    {
        $company= Companies::find($request->user_id);
        $company->Status="deleted";
        $company->save(); 
     
        return redirect()->back()->with('success','user removed sucessfully ! ');
        



    }


    public function ReactivateUser(Request $request)
    {
        $company= Companies::find($request->user_id);
        $company->Status="Reactivated";
        $company->save(); 
     
        return redirect()->back()->with('success','user reactivated sucessfully ! ');
        



    }

    public function EditUser(Request $request)
    {
        $company = Companies::find($request->user_id);
        $company->nameCompany=$request->nameCompany;
        $company->address=$request->address;
        $company->phoneNumber=$request->phoneNumber;
        $company->emailAddress=$request->emailAddress;
        $company->ICE=$request->ICE;
        $company->Type=$request->Type;
        $company->email=$request->email;
        $company->password=$request->password;
        $company->save(); 
     
        return redirect()->back()->with('success','user edited sucessfully ! ');
        
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
            $company = new Companies();
            $company->nameCompany=$request->nameCompany;
            $company->address=$request->address;
            $company->phoneNumber=$request->phoneNumber;
            $company->emailAddress=$request->emailAddress;
            $company->ICE=$request->ICE;
            $company->Type=$request->Type;
            $company->email=$request->email;
            $company->password=$request->password;
            $company->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function show(Companies $companies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function edit(Companies $companies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Companies $companies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Companies $companies)
    {
        //
    }
}
