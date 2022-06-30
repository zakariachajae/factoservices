<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class DashboardController extends Controller
{

    public function index()
    {
        $clients=User::all();
        return view('dashboard',compact('clients'));
    }
}
