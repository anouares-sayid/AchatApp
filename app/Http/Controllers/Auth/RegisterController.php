<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Companies;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:web');
        $this->middleware('guest:Company');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }   

    public function showAdminRegistrationForm()
    {
        return view('administrateur.signup_page');
    }   

    public function RegisterCompany(Request $request)
    {

        $this->validateCompany($request->all())->validate();
        $this->createCompany($request->all());
        return redirect()->intended('entreprise/login');
       
    }   
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    protected function validateCompany(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:Companies'],
            'password' => ['required', 'string', 'min:8', 'confirmed'], 
            'nameCompany'=>['required', 'string', 'max:255'],
            'address'=>['required', 'string', 'max:255'],
            'phoneNumber'=>['required', 'string', 'max:255'],
            'emailAddress'=>['required', 'string', 'email', 'max:255', 'unique:Companies'],
            'ICE'=>['required', 'string', 'max:255'],
            'Type'=>['required', 'string', 'max:255'],
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    protected function createCompany(array $data)
    {
        return Companies::create([
            'nameCompany'=>$data['nameCompany'],
            'address'=>$data['address'],
            'phoneNumber'=>$data['phoneNumber'],
            'emailAddress'=>$data['emailAddress'],
            'ICE'=>$data['ICE'],
            'Type'=>$data['Type'],
            'email'=>$data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    protected function create(array $data)
    {

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
