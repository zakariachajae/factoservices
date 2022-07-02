<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Forfait;
use App\Models\Facture;
use App\Models\Paiement;
use App\Models\Contrat;
use App\Models\Abonnement;



class DashboardClientController extends Controller
{
    public function index(){
        $client = User::findOrFail(Auth::user()->id);
        $abonnements = Abonnement::where(['nom_client'=> Auth::user()->name])->get();
        $paiements = Paiement::where('client',Auth::user()->name)->get();
        $factures = Facture::where(['nom_client'=>Auth::user()->name, 'est_reglé' => '0'])->get();
        $contrats = Contrat::where('nom_client',Auth::user()->name)->get();
        return view('dashboardClient', compact(
            'client',
            'factures',
            'paiements',
            'abonnements',
            'contrats',
        ));
    }
}
