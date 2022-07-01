<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Forfait;
use App\Models\Facture;
use App\Models\Paiement;
use App\Models\Contrat;

class DashboardController extends Controller
{

    public function index()
    {
        $clients = User::all();
        $forfaits = Forfait::all();
        $paiements = Paiement::all();
        $factures = Facture::all();
        $contrats = Contrat::all();
        $dernierClients = User::orderBy('created_at', 'DESC')->limit(5)->get();
        $dernierFactures = Facture::orderBy('created_at', 'DESC')->limit(5)->get();
        $dernierForfaits = Forfait::orderBy('created_at', 'DESC')->limit(5)->get();
        $dernierPaiements = Paiement::orderBy('created_at', 'DESC')->limit(5)->get();
        $dernierContrats = Contrat::orderBy('created_at', 'DESC')->limit(5)->get();
        return view(
            'dashboard',
            compact(
                'clients',
                'factures',
                'paiements',
                'forfaits',
                'contrats',
                'dernierClients',
                'dernierFactures',
                'dernierForfaits',
                'dernierContrats',
                'dernierPaiements',
            )
        );
    }
}
