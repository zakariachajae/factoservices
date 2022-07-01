<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Facture;
class DashboardController extends Controller
{

    public function index()
    {
        $clients=User::all();
        $factures=Facture::all();
        return view('dashboard',compact('clients','factures'));
    }
}
