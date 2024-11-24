<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourriersEntrantsController;
use App\Http\Controllers\CourriersSortantsController;
use App\Http\Controllers\ArchivesController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ParametreController;
use App\Http\Controllers\RapportsController;
use App\Http\Controllers\UtilisateurController;


Route::get('/', function () {
    return view('welcome');
});
// 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('dashboard',[RapportsController::class,'dashboard'])->name('dashboard');
});

// COURRIERS ENTRANTS

Route::get('/courriers/entrants/ajoute', [CourriersEntrantsController::class,'create'])->name('courriers.entrants.ajoute');
Route::post('/courriers/entrants/ajoute', [CourriersEntrantsController::class,'store'])->name('courriers.entrants.store');

Route::get('/courriers/entrants/liste', [CourriersEntrantsController::class,'index'])->name('courriers.entrants.liste');

Route::get('/courriers/entrants/archiver/{id}', [CourriersEntrantsController::class,'archiver'])->name('courriers.entrants.archiver');
Route::get('/courriers/entrants/consulter/{id}', [CourriersEntrantsController::class,'consulter'])->name('courriers.entrants.consulter');

   //Update Courrier

Route::get('/courriers/entrants/modifier/{id}', [CourriersEntrantsController::class,'show_update'])->name('courriers.entrants.show_update');
Route::post('/courriers/entrants/modifier', [CourriersEntrantsController::class,'update'])->name('courriers.entrants.update');

   //delete

Route::get('/courriers/courriers/supprimer/{id}', [CourriersEntrantsController::class,'delete_Courrier_entrant'])->name('courriers.entrants.supprimer');
  

// COURRIERS SORTANTS

Route::get('/courriers/sortants/ajoute', [CourriersSortantsController::class,'create'])->name('courriers.sortants.ajoute');
Route::post('/courriers/sortants/ajoute', [CourriersSortantsController::class,'store'])->name('courriers.sortants.store');

Route::get('/courriers/sortants/liste', [CourriersSortantsController::class,'index'])->name('courriers.sortants.liste');

Route::get('/courriers/sortants/archiver/{id}', [CourriersSortantsController::class,'archiver'])->name('courriers.sortants.archiver');
Route::get('/courriers/sortants/consulter/{id}', [CourriersSortantsController::class,'consulter'])->name('courriers.sortants.consulter');

    //Update Courrier

Route::get('/courriers/sortants/modifier/{id}', [CourriersSortantsController::class,'show_update'])->name('courriers.sortants.show_update');
Route::post('/courriers/sortants/modifier', [CourriersSortantsController::class,'update'])->name('courriers.sortants.update');
  
     //delete
  
Route::get('/courriers/sortants/supprimer/{id}', [CourriersSortantsController::class,'delete_Courrier_sortant'])->name('courriers.sortants.supprimer');
    

// COURRIERS ARCHIVES

Route::get('/archives/liste', [ArchivesController::class,'index'])->name('archives.liste');
Route::get('/archives/liste/sortant/{id}', [ArchivesController::class,'sortant_desarchiver'])->name('archives.liste.sortant.desarchiver');
Route::get('/archives/liste/entrant/{id}', [ArchivesController::class,'entrant_desarchiver'])->name('archives.liste.entrant.desarchiver');


// CLIENTS

Route::get('/clients/ajoute', [ClientsController::class,'create'])->name('clients.ajoute');
Route::post('/clients/ajoute', [ClientsController::class,'store'])->name('clients.store');
Route::get('/clients/liste', [ClientsController::class,'index'])->name('clients.liste');
Route::get('/clients/supprimer/{id}', [ClientsController::class,'delete'])->name('clients.delete');
Route::get('/clients/modifier/{id}', [ClientsController::class,'show_update'])->name('clients.show');
Route::post('/clients/update', [ClientsController::class,'update'])->name('clients.update');


// RECHERCHE les meme routes dans les autres table courrier entrants sortants archives


// RAPPORT
Route::get('/rapport/courriers/entrants', [RapportsController::class,'create'])->name('rapport.entrants');
Route::get('/rapport/courriers/sortants', [RapportsController::class,'create2'])->name('rapport.sortants');

// PARAMETRE
   //Type courrier
   Route::get('/type/courrier/ajoute', [ParametreController::class,'index_Type_Courrier'])->name('parametre.Type_courrier.ajoute');
   Route::post('/type/courrier/ajoute', [ParametreController::class,'store_Type_Courrier'])->name('parametre.Type_courrier.store');
   
   Route::get('/type/courrier/modifier/{id}', [ParametreController::class,'show_update_Type_Courrier'])->name('parametre.Type_courrier.modifier');
   Route::post('/type/courrier/modifier/{id}', [ParametreController::class,'update_Type_Courrier'])->name('parametre.Type_courrier.modifier');
   
   Route::get('/type/courrier/supprimer/{id}', [ParametreController::class,'delete_Type_Courrier'])->name('parametre.Type_courrier.supprimer');
  

  //Service Traitant
  Route::get('/service/traiter/ajoute', [ParametreController::class,'index_Service_Traiter'])->name('parametre.Service_traiter.ajoute');
  Route::post('/service/traiter/ajoute', [ParametreController::class,'store_Service_Traiter'])->name('parametre.Service_traiter.store');
  
  Route::get('/service/traiter/modifier/{id}', [ParametreController::class,'show_update_Service_Traiter'])->name('parametre.Service_traiter.modifier');
  Route::post('/service/traiter/modifier', [ParametreController::class,'update_Service_Traiter'])->name('parametre.Service_traiter.modifier_service');
  
  Route::get('/service/traiter/supprimer/{id}', [ParametreController::class,'delete_Service_Traiter'])->name('parametre.Service_traiter.supprimer');

  //utilisateur
Route::get('/create/utilisateur', [UtilisateurController::class,'view'])->name('add.utilisateur');
Route::post('/create/utilisateur', [UtilisateurController::class,'create'])->name('add.utilisateur');

Route::get('/utilisateurs', [UtilisateurController::class,'index'])->name('utilisateurs');


Route::get('/user/update/{id}', [UtilisateurController::class,'view_update']);
Route::post('/update/utilisateur', [UtilisateurController::class,'update'])->name('update.utilisateur');

Route::get('/user/delete/{id}', [UtilisateurController::class,'remove']);




