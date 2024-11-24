<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourriersEntrant;
use App\Models\CourriersSortant;

class ArchivesController extends Controller
{
    public function index(){
        $entrants = CourriersEntrant::all()->where("archiver",true);
        $sortants = CourriersSortant::all()->where("archiver",true);

        return view('archives.index',["entrants"=>$entrants,"sortants"=>$sortants]);
    }

    public function entrant_desarchiver($id){

            $entrants = CourriersEntrant::find($id);
            $entrants->archiver = false;
            $entrants->save();
            
        return redirect()->route('archives.liste')->with('success', 'Le courrier a été désarchiver avec succès.');
        
    }

    public function sortant_desarchiver($id){

        $sortants = CourriersSortant::find($id);
        $sortants->archiver = false;
        $sortants->save();
    return redirect()->route('archives.liste')->with('success', 'Le courrier a été désarchiver avec succès.');
    
}
    
}
