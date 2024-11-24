<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Type_courrier;
use App\Models\CourriersEntrant;
use App\Models\Service_traitant;
use App\Models\Client;
use App\Models\User;

class CourriersEntrantsController extends Controller
{
    public function index(){
        $entrants = CourriersEntrant::all()->where("archiver",false);

        return view('courriers.entrants.index',["entrants"=>$entrants]);
    }
    public function create(){

        $type_courrier= Type_courrier::all();
        $service= Service_traitant::all();
        $client= Client::all();
        $user= User::all();

        return view('courriers.entrants.create',["user"=>$user,"type_courrier"=>$type_courrier,"service"=>$service,"client"=>$client]); 
    }

    public function store(Request $req){
        $req->validate([
            'reference' => 'required',
            'objet' => 'required',
            'date_arriver' => 'required',
            'agent' => 'required',
            'action' => 'required',
            'file' => 'required',
    // Other validation rules
        ], [
            'reference.required' => 'Le champ Référence est obligatoire.',
            'objet.required' => 'Le champ Objet est obligatoire.',
            'date_arriver.required' => 'la date d envoi est obligatoire.',
            'agent.required' => 'Le champ agent est obligatoire.',
            'action.required' => 'Le champ action est obligatoire.',
            'file.required' => 'L\'importation du document est obligatoire.',

            // Other custom messages
        ]);
        try{
        $data = new CourriersEntrant;

        $data->reference=$req->reference;
        $data->date_courrier=$req->date_courrier;
        $data->date_arriver=$req->date_arriver;
        $data->client_id=$req->client;
        $data->type_courrier_id=$req->type_courrier;
        $data->service_traitant_id=$req->service_traitant;
        
        $data->objet=$req->objet;

        if($req->agent){

            $data->agent = implode('#',$req->agent);
        }
        if($req->action){

            $data->action = implode('#',$req->action);
        }
        

        if($req->file('file')){
            $file = $req->file('file');
            $type=$file->getClientOriginalName();
            $type=explode('.',$type);
            $filename = $req->reference.'.'.$type[1];
       
            $file-> move(public_path('Courriers/Entrants'),$filename);
            $data['file']= $filename;
        }

        $data->save();
        // Si l'enregistrement réussit, envoyer un message de succès
        return redirect()->route('courriers.entrants.liste')->with('success', 'Le courrier a été enregistré avec succès.');
           
       } catch (\Exception $e) {
           // Si une erreur survient, envoyer un message d'erreur
           return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'enregistrement. Veuillez réessayer.');
       }
    }

    // archiver courrier

    public function archiver($id){

        $entrants = CourriersEntrant::find($id);
        $entrants->archiver = true;
        $entrants->save();
        return redirect()->back()->with('success', 'Le courrier a été archiver avec succès.');
        
    }

    // consulter courrier

    public function consulter($id){

        $entrants = CourriersEntrant::find($id);
        $file = $entrants->file;
        $type=explode('.',$file);
        $filename_type = $type[1];
        return view('courriers.entrants.consulter',["entrants"=>$entrants,"filename_type"=>$filename_type]);
    
    }

    //Update courrier

    public function show_update($id){

        $courrier_entrant = CourriersEntrant::find($id);
        $type_courrier= Type_courrier::all();
        $service= Service_traitant::all();
        $client= Client::all();
        $user= User::all();
        
        $selectedAgents = explode('#', $courrier_entrant->agent);

        $selectedActions = explode('/', $courrier_entrant->actions);
        
        return view('courriers.entrants.modifier',["type_courrier"=>$type_courrier,
        "courrier_entrant"=>$courrier_entrant,"user"=>$user,"service"=>$service,
        "client"=>$client,"selectedAgents" => $selectedAgents,"selectedActions" => $selectedActions]);
        
    }

    public function update(Request $req){

        $req->validate([
            'reference' => 'required',
            'objet' => 'required',
            'date_arriver' => 'required',
            'agent' => 'required',
            'action' => 'required',
    // Other validation rules
        ], [
            'reference.required' => 'Le champ Référence est obligatoire.',
            'objet.required' => 'Le champ Objet est obligatoire.',
            'date_arriver.required' => 'la date d envoi est obligatoire.',
            'agent.required' => 'Le champ agent est obligatoire.',
            'action.required' => 'Le champ action est obligatoire.',
            // Other custom messages
        ]);
        $courrier_id=$req->courrier_id;

        // Récupérer le type de courrier à modifier
        $courrier_entrant = CourriersEntrant::find($courrier_id);
        if ($courrier_entrant) {
            
            $courrier_entrant->reference = $req->reference;
            $courrier_entrant->date_arriver = $req->date_arriver;
            $courrier_entrant->client_id = $req->client;
            $courrier_entrant->type_courrier_id = $req->type_courrier;
            $courrier_entrant->service_traitant_id = $req->service_traitant;
            $courrier_entrant->objet = $req->objet;
        
            // Join agents into a single string
            $courrier_entrant->agent = implode('#', $req->agent);
        
            // Join actions into a single string
            $courrier_entrant->action = implode('/', $req->action);

            if($req->file('file')){
                $file = $req->file('file');
                $type=$file->getClientOriginalName();
                $type=explode('.',$type);
                $filename = $req->reference.'.'.$type[1];
           
                $file-> move(public_path('Courriers/Entrants'),$filename);
                $courrier_entrant['file']= $filename;
            }

            // Save the updated record
            $courrier_entrant->save();
       

        return redirect()->route('courriers.entrants.liste')->with('success', 'Le courrier a été mis à jour avec succès.');
        
        } else {
            // Si le type de courrier n'existe pas, envoyer un message d'erreur
            return redirect()->route('')->with('error', 'Le courrier n\'a pas été trouvé.');
        }
    }

    //Delete courrier

    public function delete_Courrier_entrant($id)
    {
        if(!Gate::allows('access_admin')) {
            abort(403);
            }
        // Récupérer le courrier à supprimer
        $courrier_entrant = CourriersEntrant::find($id);
    
        // Vérifier si le type de courrier existe
        if ($courrier_entrant) {
            // Supprimer le type de courrier
            $courrier_entrant->delete();
    
            // Rediriger avec un message de succès
            return redirect()->route('courriers.entrants.liste')->with('success', 'Le courrier a été supprimé avec succès.');
        
        } else {
            // Si le courrier n'existe pas, renvoyer un message d'erreur
            return redirect()->route('courriers.entrants.liste')->with('error', 'Le courrier n\'a pas été trouvé.');
        }
    }

}
