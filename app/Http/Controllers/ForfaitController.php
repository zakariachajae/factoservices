<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forfait;

class ForfaitController extends Controller
{
    public function index(){
    
        $forfaits=Forfait::all();
        return view('tables.forfaits.forfaits',compact('forfaits'));
    }

    public function create()


    {
        return view('tables.forfaits.create');
    }


    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            "nom_forfait" => "required",
            "description" => "required",
            "prix" => "required",
            
        ]);

        Forfait::create([
            "nom_forfait" => $request->nom_forfait,
            "description" => $request->description,
            "prix" => $request->prix,
            
        ]);


        return redirect('/tables/forfaits/forfaits')->with("success", "forfait ajoutée");
    }

    /*public function show($id)
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
        $forfait = Forfait::findOrFail($id);
        return view('tables.forfaits.edit', compact('forfait'));
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
            "nom_forfait" => "required",
            "description" => "required",
            "prix" => "required",
            
        ]);

        Forfait::whereId($id)->update($validatedData);

        return redirect('/tables/forfaits/forfaits')->with('success', 'forfait is successfully updated');
    }

    public function destroy($id)
    {
        $forfait = Forfait::findOrFail($id);
        $forfait->delete();

        return redirect('/tables/client/forfaits')->with('success', 'forfaitis successfully deleted');
    }
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function delete($id){
        $user = User::findOrFail($id);
        return view('tables.clients.destroy',compact('user'));
    }
    */

   
    //


