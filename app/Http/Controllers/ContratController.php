<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrat;

class ContratController extends Controller
{
    public function index(){
    
        $contrats=Contrat::all();
        return view('tables.contrats.contrats',compact('contrats'));
    }

    public function delete($id){
        $contrat = Contrat::findOrFail($id);
        return view('tables.contrats.destroy',compact('contrat'));
    }
    public function destroy($id)
    {
        $contrat = Contrat::findOrFail($id);
        $contrat->delete();

        return redirect('/tables/contrats/contrats')->with('success', 'Game Data is successfully deleted');
    }
}
