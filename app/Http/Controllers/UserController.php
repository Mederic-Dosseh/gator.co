<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function allUser(){

        $users = User::all();
        return view('backend.users.show',compact('users'));

    }

    public function addUser(){
        return view('auth.add-user');
    }

    public function storeUser(Request $request){
        $validateData = $request->validate(
            [
                'name' => 'string|required|min:4',
                'email'=>'email|required|unique:users',
                'password' => 'required|confirmed|min:8', 
            ]
        );


        User::insert(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'created_at' => Carbon::now()
            ]
        );

        return Redirect()->route('show.user')->with('success','Utilisateurs ajouter');
        
    }

    public function editUser($id){
        $user = User::find($id);


        return view('auth.edit-user',compact('user'));

    }

    public function updateUser(Request $request){
        
        $id=$request->id;
        $user = User::find($id);
        if( $user->email == $request->email){
            $validateData = $request->validate(
                [
                    'name' => 'string|required|min:4',
                    'email'=>'email|required',
                ]
            );

        }else{
            $validateData = $request->validate(
                [
                    'name' => 'string|required|min:4',
                    'email'=>'email|required|unique:users',
                ]
            );
        }
            User::find($id)->update([

                'name'=>$request->name,
                'email'=>$request->email,
            ]);
            return Redirect()->route('show.user')->with('success','Utilisateurs Mis à jour ');
    }

    public function deleteUser($id){
        User::findOrFail($id)->delete();
        return Redirect()->route('show.user')->with('success','Utilisateurs Supprimer');


    }

    public function demandeUser (){

        $demandes = Contact::get();
        return view('backend.demandes',compact('demandes'));

    }
}
