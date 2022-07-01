<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forfait;

class ForfaitController extends Controller
{
    public function index(){
    
        $forfaits=Forfait::all();
        return view('tables.forfaits',compact('forfaits'));
    }
    
}
