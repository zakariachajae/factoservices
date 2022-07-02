<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forfait;

class OffreAbonnementController extends Controller
{
    public function index(){

        $forfaits=Forfait::all();

        return view('offreAbonnements.offreAbonnement',compact('forfaits'));
    }
}
