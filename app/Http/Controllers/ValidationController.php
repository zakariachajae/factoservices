<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facture;

class ValidationController extends Controller
{
    public function index(){

        $factures=Facture::where('est_validé',0)->get();
        return view('validation',compact('factures'));
    }
    public function valider($id, $v){
        $facture=Facture::findOrFail($id);
        $facture->est_validé = $v;
        $facture->save();
        return redirect('/validation')->with('success','facture validé');
        
    }
}
