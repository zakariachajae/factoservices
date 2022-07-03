<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Forfait;
use App\Models\Contrat;
use Carbon\Carbon;

class OffreAbonnementController extends Controller
{
    public function index(){

        $forfaits=Forfait::all();

        return View('offreAbonnement',compact('forfaits'));
    }

    public function create($id){

        $forfait=Forfait::findOrFail($id);

        return view('abonnement',compact('forfait'));

    }

    public function abonner(Request $request,$id){

        $forfaitChoisi=Forfait::findOrFail($id);
        
        Contrat::create([
            "nom_client" => Auth::user()->name,
            "forfait" => $forfaitChoisi->nom_forfait,
            "periodicite" => $request->periodicite,
            "montant_TTC" => $forfaitChoisi->prix,
            //'date_eng' =>now()->toDateTimeString(),
            //'created_at'=>now()->toDateTimeString(),
            'updated_at'=>now()->toDateTimeString(),
        ]);

        $contrat=Contrat::findOrFail($id);

        Abonnement::create([
            "nom_client" => Auth::user()->name,
            "nom_forfait" => $forfaitChoisi->nom_forfait,
            "id_contrat" => $contrat->id,
        ]);



        return redirect('/mesAbonnement')->with("success", "vous ete desormais abonné a ce service choisi");
    }
    public function show(){

        $abonnements= Abonnement::where(['nom_client'=> Auth::user()->name])->get();

        return view('mesAbonnement',compact('abonnements'));
    }
}
