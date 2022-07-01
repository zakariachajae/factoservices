<?php

namespace App\Http\Controllers;
use App\Models\Facture;

use Illuminate\Http\Request;

class FactureController extends Controller
{
    public function index(){
    
        $factures=Facture::all();
        return view('tables.factures',compact('factures'));
    }
}
