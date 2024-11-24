<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientsController extends Controller
{
    // Afficher la liste clients
    public function index(){

        $clients = Client::all();

        return view('clients.index',["clients"=>$clients]);
    }
    // Affiche la formulaire de creation client
    public function create(){
    
        return view('clients.create');
        
    }
    // sauvegarder le noveau client
    public function store(Request $req){
        
        $client = new Client;
        $client->email = $req->email;
        $client->phone = $req->phone;
        $client->nom_complet = $req->nom_complet;
        $client->save();
        return redirect()->back()->with('success', 'Votre noveau client a été enregistrer avec success'); 
    }
    //supprimer un client
    public function delete($id){
        if(!Gate::allows('access_admin')) {
            abort(403);
            }
        $res=Client::find($id)->delete();
        return redirect()->back()->with('delete', 'Votre client a été supprimer'); 
    }
    // modifier un client
    public function show_update($id){
        
        $client=Client::find($id);
        
        return view('clients.update',["client"=>$client]);
    }
    public function update(Request $req){
        
        $res=Client::find($req->id);
        $res->email = $req->email;
        $res->phone = $req->phone;
        $res->nom_complet = $req->nom_complet;
        $res->save();

        $clients = Client::all();
        return redirect()->route('clients.liste')->with('warning', 'Votre client a été modifier avec success',["clients"=>$clients]); 
    }
}
