<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TacheController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Route vers la page d'accueil
Route::get('/', function () {
    return view('accueil');
});
// Routes pour afficher le formulaire d'ajout de tâche et pour post le formulaire
Route::get('/ajout-tache', [TacheController::class, 'formulaireAjoutTache']);
Route::post('/ajout-tache', [TacheController::class, 'ajouterTache']);

// Route pour afficher la liste des tâches
Route::get('/taches', [TacheController::class, 'listerTaches']);

// Route pour afficher les détails d'une tâche spécifique
Route::get('/tache/{id}', [TacheController::class, 'detailsTache']);