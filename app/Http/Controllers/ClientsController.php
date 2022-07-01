<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ClientsController extends Controller
{
    public function index(){

        $clients = User::all();

        return view('tables.clients', compact('clients'));
    }
    //
}
