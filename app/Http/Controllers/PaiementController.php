<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paiement;

class PaiementController extends Controller
{
    public function index(){
    
        $paiements=Paiement::all();
        return view('tables.paiements',compact('paiements'));
    }
}
