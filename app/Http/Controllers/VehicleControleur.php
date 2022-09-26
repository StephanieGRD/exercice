<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleControleur extends Controller
{

    public function listVehicle(){
        // Retourne à l'utilisateur le template nommés « monLayout » avec dedans une variable nommé `$demos` qui contiendra l'ensemble des éléments dans la table
        // Votre template devra utiliser cette variable avec par exemple un @foreach($demos as $demo) … @endforeach
        return view('vehicle', ["vehicles" => Vehicle::all()]);
        //, 
    }

    // Ajout d'un véhicule en base
    public function store(Request $request){
        $request->validate([
            'brand' => ['required', 'string', 'max:255'],
            'model' => ['required', 'string', 'max:255']
        ]);

        Vehicle::create($request->all());
        return redirect("/vehicle");
    }

    // Suppression d'un véhicule en base
    public function destroy($id){
        $vehicle = Vehicle::find($id);
        $vehicle->delete();
        return redirect("/vehicle");
    }
}
