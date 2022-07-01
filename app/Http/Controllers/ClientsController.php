<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ClientsController extends Controller
{
    public function index()
    {

        $clients = User::all();

        return view('tables.clients.clients', compact('clients'));
    }

    public function create()


    {
        return view('tables.clients.create');
    }


    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
            "type_client" => "required"
        ]);

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
            "type_client" => $request->type_client
        ]);


        return redirect('/tables/clients/clients')->with("success", "client ajoutée");
    }
    public function show($id)
    {
        $user = User::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('tables.clients.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
            "type_client" => "required"
        ]);

        User::whereId($id)->update($validatedData);

        return redirect('/tables/clients/clients')->with('success', 'client is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id){
        $user = User::findOrFail($id);
        return view('tables.clients.destroy',compact('user'));
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/tables/client')->with('success', 'Game Data is successfully deleted');
    }
    //
}
