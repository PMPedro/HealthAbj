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
    return view('Welcome');
});


//Routes das blades
Route::get('AboutUs',  function () {           return view('AboutUs');    });
Route::get('Login',  function () {           return view('Auth/Login');    });
Route::get('Register',  function () {           return view('Auth/Register');    });
Route::get('Cenas',  function () {           return view('Cenas');    });
Route::get('LoginFire',  function () {           return view('layouts/LoginFire');    });
Route::get('Medics',  function () {           return view('Medics');    });
Route::get('MedicsSecret',  function () {           return view('Medics');    });
Route::get('Consultas',  function () {           return view('Patiants');    })/*->middleware('auth')*/;   //isto faz com q seja preciso login antes de entrar na pagina 
Route::get('ContacUs',  function () {           return view('ContacUs');    });
Route::get('Backoffice',  function () {           return view('BackOffice');    })->middleware('LoggedIn');
Route::get('BackofficeSecret',  function () {           return view('BackOffice');    });
Route::get('Enfermeiros',  function () {           return view('Enfermeiros');    });
Route::get('Permitir',  function () {           return view('Permitir');    });




Route::get('Location',  function () {           return view('Location');    });
Route::get('firebase', 'FirebaseGetData@index');


//Route::get('test/{paramter1}/{paramter2}', 'Somecontroller@somemethod');

Route::get('boiola/{Email}/{Password}/{Nome}/{Idade}/{Area}', [App\Http\Controllers\firebaseConnecter::class, 'indexo']);  // Insert data in realtime database //MEXER SO COM AUTOTIZACAO DO GOD PEDRO 



Route::get('notboiola/{Email}/{Password}/{Nome}/{Idade}/{Area}', [App\Http\Controllers\Enfermeiros::class, 'Enfer']);  // Insert data in realtime database //MEXER SO COM AUTOTIZACAO DO GOD PEDRO 

Route::get('Updatedat/{Email}', [App\Http\Controllers\UpdateStatus::class, 'UpdateSt']);  // Insert data in realtime database //MEXER SO COM AUTOTIZACAO DO GOD PEDRO 






Route::get('boiola2', [App\Http\Controllers\firebaseConnecter::class, 'indexo']);  // Insert data in realtime database //MEXER SO COM AUTOTIZACAO DO GOD PEDRO 
 
Route::get('hmFazCenaspls/{Hourum}/{Emailuma}/{Emaildois}/{dataum}/{moredataum}', [App\Http\Controllers\Janemseioqporaqui::class, 'SendConsultasporra']);  // Insert data in realtime database das consultas //MEXER SO COM AUTOTIZACAO DO GOD PEDRO 


Route::get('FDSPOCRL/{Houru}/{Emailum}/{Emaildoi}/{datau}/{moredatau}', [App\Http\Controllers\Consultinhasporra::class, 'FeckingFeck']);  // Insert data in realtime database das consultas //MEXER SO COM AUTOTIZACAO DO GOD PEDRO 



//Route::get('POCRL/{Hour}/{Email}/{data}/{moredata}', [App\Http\Controllers\SendConsultas::class, 'SendConsultasporra']);  // Insert data in realtime database das consultas //MEXER SO COM AUTOTIZACAO DO GOD PEDRO 
//Route::post('hmFazCenaspls/{Hour}/{Email}/{emailtwo}/{data}/{moredata}', [App\Http\Controllers\SendConsultas::class, 'SendConsultasporra']);  // Insert data in realtime database das consultas //MEXER SO COM AUTOTIZACAO DO GOD PEDRO 
Route::get('Sera', [App\Http\Controllers\guardaConsultasr::class, 'guacon']);  // Insert data in realtime database //MEXER SO COM AUTOTIZACAO DO GOD PEDRO 
Route::get('GODPEDRO', [App\Http\Controllers\GetConsultas::class, 'idkFECKME']) ;          //Get data from database  //MEXER SO COM AUTOTIZACAO DO GOD PEDRO
Route::get('GODPEDRO2', [App\Http\Controllers\GetConsultas::class, 'idkFECKME2']) ;          //Get data from database  //MEXER SO COM AUTOTIZACAO DO GOD PEDRO


Route::get('LoginFire/{Email}/{Password}', [App\Http\Controllers\LoginwFire::class, 'LoginFire']) ;          //Get data from database  //MEXER SO COM AUTOTIZACAO DO GOD PEDRO
Route::get('StatusCheck', [App\Http\Controllers\LoginwFire::class, 'StatusCheck']) ;          //Get data from database  //MEXER SO COM AUTOTIZACAO DO GOD PEDRO

Route::get('boiola/{Email}/{Password}', [App\Http\Controllers\firebaseConnecter::class, 'indexo']);  // Insert data in realtime database //MEXER SO COM AUTOTIZACAO DO GOD PEDRO 

Route::get('boiola', [App\Http\Controllers\firebaseConnecter::class, 'indexo']);  // Insert data in realtime database //MEXER SO COM AUTOTIZACAO DO GOD PEDRO 

Route::get('PEDRODEUS', [App\Http\Controllers\GetData::class, 'FUCKME']) ;          //Get data from database  //MEXER SO COM AUTOTIZACAO DO GOD PEDRO


Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); //Default, nao mexer
Route::get('TESTE', [App\Http\Controllers\FirebaseGetData::class, 'indexfire']);    //Teste only, nao faz nd 
Auth::routes();

Route::get('alldayclinic@example.com',  function () {           return ('CHUPAMOS BOI DO CRL');    });




