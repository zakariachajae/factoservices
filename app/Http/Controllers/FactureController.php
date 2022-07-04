<?php

namespace App\Http\Controllers;
use App\Models\Facture;
use App\Models\Forfait;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class FactureController extends Controller
{
    public function index(){
    
        $factures=Facture::all();
        return view('tables.factures',compact('factures'));
    }

    public function show(){

        $factures = Facture::where(['nom_client'=>Auth::user()->name, 'est_validé' => '1'])->get();

      
        

        return view('mesFacture',compact('factures'));
    }
}
