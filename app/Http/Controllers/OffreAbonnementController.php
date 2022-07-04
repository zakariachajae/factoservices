<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Forfait;
use App\Models\Facture;
use App\Models\Contrat;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class OffreAbonnementController extends Controller
{
    public function index(){

        $forfaits=Forfait::all();
        $abonnements=Abonnement::where('nom_client',auth::user()->name)->get();

        return View('offreAbonnement',compact('forfaits','abonnements'));
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
       
        Facture::Create([
            'nom_client' =>Auth::user()->name ,
            'date_facturation' =>date('y-m-d') ,
            'date_paiement' => date('y-m-d', time()+86400),
            'montant_total' =>$contrat->montant_TTC ,
            'forfait' =>$contrat->forfait ,
            
        ]);

        


        return redirect('/mesAbonnement')->with("success", "vous ete desormais abonné a ce service choisi");
    }
    public function show(){

        $abonnements= Abonnement::where(['nom_client'=> Auth::user()->name])->get();

        return view('mesAbonnement',compact('abonnements'));
    }
}
