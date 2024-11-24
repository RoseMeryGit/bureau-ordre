<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;
class UtilisateurController extends Controller
{
       public function view(){
 
        if(!Gate::allows('access_admin')) {
         abort(403);
         }
        return view('utilisateur.create');
       }

       public function create(Request $req){
        if(!Gate::allows('access_admin')) {
            abort(403);
            }
        $req->validate([
            'nom'=>'required',
            'email'=>'required',
            'pwd'=>[
                    'required',
                    'min:8'],
        ]);

        $data=new User();
        $data->name=$req->nom;
        $data->email=$req->email;
        $data->usertype=$req->user;
        $data->password=Hash::make($req->pwd);
        $data->save();
        return redirect()->back()->with('success','L\'utilisateur a été ajouter');
       }

       public function index(){
 
        if(!Gate::allows('access_admin')) {
         abort(403);
         }

         $data= User::all();
        return view('utilisateur.index',['data'=>$data]);
       }

       public function view_update($id){
 
        if(!Gate::allows('access_admin')) {
         abort(403);
         }

         $var =$id;
         $data= User::find($var);
        return view('utilisateur.update',['data'=>$data,'var'=>$var]);
       }

       public function update(Request $req){
 
        if(!Gate::allows('access_admin')) {
         abort(403);
         }

         
        $req->validate([
            'nom'=>'required',
            'email'=>'required',
            'pwd'=>[
                    'required',
                    'min:8'],
        ]);

        $id= $req->id;
        $data=User::find($id);
        $data->name=$req->nom;
        $data->email=$req->email;
        $data->usertype=$req->user;
        $data->password=Hash::make($req->pwd);
        $data->save();
        return redirect()->back()->with('success','L\'utilisateur a été modifier avec success');
       }
       
       public function remove($id){
        if(!Gate::allows('access_admin')) {
            abort(403);
            }
        $data = User::find($id)->delete();
        return redirect()->back()->with('delete','L\'utilisateur a été supprimer avec success');
       }
}
