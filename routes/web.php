<?php

use App\Http\Controllers\InterventionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SalleController;

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
    return view('frontend.Accueil');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






// backend

    // Profil

        Route::get("/profil", [ProfilController::class, 'index']);  

    // Liste utilisateur

        Route::get("/liste-utilisateur", [ProfilController::class, 'index2']);    

    // Liste salle

        Route::get("/liste-salle", [SalleController::class, "index"]);    

    // Intervention

        Route::get("/demande", [InterventionController::class,'index']);

        Route::get("/personnel", [InterventionController::class,'index2']);

        Route::get("/reunion", [InterventionController::class,'index3']);


