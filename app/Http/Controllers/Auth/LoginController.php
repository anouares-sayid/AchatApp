<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Companies;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/entreprise';
/////// show login form for company 
    public function showLoginForm()
    {
       
    
        return view('auth.login');
    }

    public function showAdminLoginForm()
    {
       
    
        return view('administrateur.login_page');
    }

    public function CompanyLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('Company')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/entreprise');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    
    public function logout(Request $request) {
        Auth::guard('web')->logout();
        return redirect('admin/');
      }
      public function CompanyLogout(Request $request) {
          
        Auth::guard('Company')->logout();
        return redirect('entreprise/');
      }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:web')->except('logout');
        $this->middleware('guest:Company')->except('CompanyLogout');
    }
}
