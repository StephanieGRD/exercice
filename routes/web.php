<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleControleur;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Route de requête GET pour récupérer l'ensemble des données véhicules de la base
Route::get('/vehicle', [VehicleControleur::class, 'listVehicle'])->middleware('auth')->name('vehicle');

//Route de redirection vers le formulaire de création de voiture
Route::get('/createVehicle', function () {
    return view('createVehicle');
})->middleware(['auth'])->name('createVehicle');

//Route de requête POST pour enregistrer en base
Route::post('vehicle', [VehicleControleur::class, 'store']);

//Route de requête DELETE pour supprimer en base
Route::get('vehicle/{id}/destroy', [VehicleControleur::class, 'destroy']);

require __DIR__.'/auth.php';

//Route pour savoir si un utilisateur est connecté ou non
Route::get('/connect', ['App\Http\Controllers\ConnectControler', 'connect'])->middleware(['auth'])->name("notConnect");