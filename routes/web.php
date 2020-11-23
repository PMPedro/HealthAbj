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
Route::get('Medics',  function () {           return view('Medics');    });
Route::get('Patiants',  function () {           return view('Patiants');    })/*->middleware('auth')*/;   //isto faz com q seja preciso login antes de entrar na pagina 
Route::get('ContacUs',  function () {           return view('ContacUs');    });
Route::get('Location',  function () {           return view('Location');    });
Route::get('firebase', 'FirebaseGetData@index');


//Route::get('test/{paramter1}/{paramter2}', 'Somecontroller@somemethod');

Route::get('boiola/{Email}/{Password}/{Nome}/{Idade}/{Area}', [App\Http\Controllers\firebaseConnecter::class, 'indexo']);  // Insert data in realtime database //MEXER SO COM AUTOTIZACAO DO GOD PEDRO 

Route::get('POCRL/{DCon}/{NMedi}/{NPaci}/{Hora}', [App\Http\Controllers\SendConsultas::class, 'FeckOff']);  // Insert data in realtime database das consultas //MEXER SO COM AUTOTIZACAO DO GOD PEDRO 
Route::get('POCRL/{DCon}/{NMedi}/{NPaci}/{Hora1}/{Hora2}/{Hora3}/{Hora4}/{Hora5}/{Hora6}/{Hora7}/{Hora8}/{Hora9}/{Hora10}', [App\Http\Controllers\SendConsultas::class, 'FDSVTF']);  // Insert data in realtime database das consultas //MEXER SO COM AUTOTIZACAO DO GOD PEDRO 
Route::get('GODPEDRO', [App\Http\Controllers\GetConsultas::class, 'idkFECKME']) ;          //Get data from database  //MEXER SO COM AUTOTIZACAO DO GOD PEDRO

Route::get('boiola/{Email}/{Password}', [App\Http\Controllers\firebaseConnecter::class, 'indexo']);  // Insert data in realtime database //MEXER SO COM AUTOTIZACAO DO GOD PEDRO 

Route::get('boiola', [App\Http\Controllers\firebaseConnecter::class, 'indexo']);  // Insert data in realtime database //MEXER SO COM AUTOTIZACAO DO GOD PEDRO 

Route::get('PEDRODEUS', [App\Http\Controllers\GetData::class, 'FUCKME']) ;          //Get data from database  //MEXER SO COM AUTOTIZACAO DO GOD PEDRO


Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); //Default, nao mexer
Route::get('TESTE', [App\Http\Controllers\FirebaseGetData::class, 'indexfire']);    //Teste only, nao faz nd 
Auth::routes();

Route::get('alldayclinic@example.com',  function () {           return ('CHUPAMOS BOI DO CRL');    });




