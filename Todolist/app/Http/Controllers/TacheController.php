<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tache;

class TacheController extends Controller
{
    //Redirige vers la page de formulaire
    public function formulaireAjoutTache()
        {
            return view('nouvelleTache');
        }

    public function ajouterTache(Request $request)//fonction pour ajouter une tache
        {
            $nouvelleTache = new Tache();
            $nouvelleTache->nom = $request->input('nom');
            $nouvelleTache->description = $request->input('description');
            $nouvelleTache->save();

        return redirect('/taches'); // Redirige vers la liste des tâches après l'ajout
        }

    //Voir les liste des taches
    public function listerTaches()
        {
            $taches = Tache::all(); // Récupérer toutes les tâches depuis la base de données
            return view('listTaches', ['taches' => $taches]); // Passer les tâches à la vue 'listTaches'
        
        }

    //detail tache
    public function detailsTache($id)
        {
            $tache = Tache::findOrFail($id);
            return view('detailTache', ['tache' => $tache]);
        }
}
