<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


*/


Route::get('/', function () {
    return view('entreprise.index');
});


#Partie Admin

Auth::routes(['verify' => true]);
Route::group(['prefix'=>'admin'], function () {

    Route::get('/logout', 'Auth\LoginController@logout')->name('adminLogout');  
    Route::get('/login', 'Auth\LoginController@showAdminLoginForm')->name('adminLogin');
    Route::get('/register', 'Auth\LoginController@showAdminRegistrationForm')->name('adminRegister');
  

    Route::get('/', 'CompaniesController@index')->name('adminHome');



    Route::get('/requests', 'CompaniesController@requests')->name('adminRequests');
    Route::get('/users', 'CompaniesController@users')->name('adminUsers');
    
    Route::post('/RemoveUser', 'CompaniesController@RemoveUser')->name('adminRemoveUser');
    Route::post('/ReactivateUser', 'CompaniesController@ReactivateUser')->name('adminReactivateUser');
    
    Route::post('/RefuseUser', 'CompaniesController@RefuseUser')->name('adminRefuseUser');
    Route::post('/AcceptUser', 'CompaniesController@AcceptUser')->name('adminAcceptUser');
 

    
    
    });



#Partie Users

Route::group(['prefix'=>'entreprise'], function () {

 
    Route::get('/logout','Auth\LoginController@CompanyLogout')->name('companyLogout');

   // Registration Routes...
   Route::get('register', 'Auth\RegisterController@showRegistrationForm');
   Route::post('register', 'Auth\RegisterController@CompanyRegister')->name('companyRegister');
   //Login Routes...
   Route::get('/login','Auth\LoginController@showLoginForm');
   Route::post('/login','Auth\LoginController@CompanyLogin')->name('companyLogin');



    Route::get('/', function () {
        return view('acheteur.index');
    })->name('Userhome');

    Route::get('/Offre', function () {
        return view('entreprise.index');
    })->name('Userhome');


});


    


