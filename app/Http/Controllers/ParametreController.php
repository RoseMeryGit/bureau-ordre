<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;

use App\Models\Service_traitant;
use App\Models\Type_courrier;

use Illuminate\Http\Request;

class ParametreController extends Controller
{
// Type Courrier

    public function index_Type_Courrier(){

        if(!Gate::allows('access_admin')) {
            abort(403);
            }
        $type_courrier = Type_courrier::all();

        return view('parametre.Type_courrier.ajoute',["type_courrier"=>$type_courrier]);
    }


    public function store_Type_Courrier(Request $req){
        if(!Gate::allows('access_admin')) {
            abort(403);
            }
        try {
            $data = new Type_courrier;
            $data->type = $req->type;
            $data->save();
    
            // Si l'enregistrement réussit, envoyer un message de succès
            return redirect()->back()->with('success', 'Le type de courrier a été enregistré avec succès.');
    
        } catch (\Exception $e) {
            // Si une erreur survient, envoyer un message d'erreur
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'enregistrement. Veuillez réessayer.');
        }
        
    }

    public function show_update_Type_Courrier($id){

        $type_courrier = Type_courrier::find($id);

        return view('parametre.Type_courrier.modifier',["type_courrier"=>$type_courrier]);
        
    }

    public function update_Type_Courrier(Request $req,$id){
        if(!Gate::allows('access_admin')) {
            abort(403);
            }
        // Récupérer le type de courrier à modifier
        $type_courrier = Type_courrier::find($id);
    
        if ($type_courrier) {

        // Mettre à jour les informations
        $type_courrier->type = $req->input('type');
        $type_courrier->save();

        return redirect()->route('parametre.Type_courrier.ajoute')->with('success', 'Le type de courrier a été mis à jour avec succès.');
        
        } else {
            // Si le type de courrier n'existe pas, envoyer un message d'erreur
            return redirect()->route('parametre.Type_courrier.ajoute')->with('error', 'Le type de courrier n\'a pas été trouvé.');
        }

    }


    public function delete_Type_Courrier($id)
    {
        if(!Gate::allows('access_admin')) {
            abort(403);
            }
        // Récupérer le type de courrier à supprimer
        $type_courrier = Type_courrier::find($id);
    
        // Vérifier si le type de courrier existe
        if ($type_courrier) {
            // Supprimer le type de courrier
            $type_courrier->delete();
    
            // Rediriger avec un message de succès
            return redirect()->route('parametre.Type_courrier.ajoute')->with('success', 'Le type de courrier a été supprimé avec succès.');
        
        } else {
            // Si le type de courrier n'existe pas, renvoyer un message d'erreur
            return redirect()->route('parametre.Type_courrier.ajoute')->with('error', 'Le type de courrier n\'a pas été trouvé.');
        }
    }

//Service_Traiter

    public function index_Service_Traiter(){
        if(!Gate::allows('access_admin')) {
            abort(403);
            }
        $type_service = Service_traitant::all();

        return view('parametre.Service_traiter.ajoute',["type_service"=>$type_service]);
    }

    public function store_Service_Traiter(Request $req){
        if(!Gate::allows('access_admin')) {
            abort(403);
            }
        try {
            $data = new Service_traitant;
            $data->service=$req->service;
            $data->save();
    
            // Si l'enregistrement réussit, envoyer un message de succès
            return redirect()->back()->with('success', 'Le type de service a été enregistré avec succès.');
    
        } catch (\Exception $e) {
            // Si une erreur survient, envoyer un message d'erreur
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'enregistrement. Veuillez réessayer.');
        }
        
    }

    public function show_update_Service_Traiter($id){
        if(!Gate::allows('access_admin')) {
            abort(403);
            }
        $service_traiter = Service_traitant::find($id);

        return view('parametre.Service_traiter.modifier_service',["service_traiter"=>$service_traiter]);
        
    }

    public function update_Service_Traiter(Request $req){
        if(!Gate::allows('access_admin')) {
            abort(403);
            }
        $service_id=$req->input('service_id');
        
        // Récupérer le service_traiter à modifier
        $service_traiter = Service_traitant::find($service_id);
    
        if ($service_traiter) {

        // Mettre à jour les informations
        $service_traiter->service = $req->input('service');
        $service_traiter->save();

        return redirect()->route('parametre.Service_traiter.ajoute')->with('success', 'Le type de service a été mis à jour avec succès.');
        
        } else {
            // Si le service_traiter n'existe pas, envoyer un message d'erreur
            return redirect()->route('parametre.Service_traiter.ajoute')->with('error', 'Le type de service n\'a pas été trouvé.');
        }

    }


    public function delete_Service_Traiter($id)
    {
        if(!Gate::allows('access_admin')) {
            abort(403);
            }
        // Récupérer le type de courrier à supprimer
        $service_traiter = Service_traitant::find($id);
    
        // Vérifier si le type de courrier existe
        if ($service_traiter) {
            // Supprimer le type de courrier
            $service_traiter->delete();
    
            // Rediriger avec un message de succès
            return redirect()->route('parametre.Service_traiter.ajoute')->with('success', 'Le type de service a été supprimé avec succès.');
        
        } else {
            // Si le type de courrier n'existe pas, renvoyer un message d'erreur
            return redirect()->route('parametre.Service_traiter.ajoute')->with('error', 'Le type de service n\'a pas été trouvé.');
        }
    }
}
