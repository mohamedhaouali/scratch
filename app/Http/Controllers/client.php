<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\DetailsUsers;
use Illuminate\Support\Facades\File;

class client extends Controller
{
    function modifierprofilaction(Request $request){
        $user = User::find($request->id);
        $detail = DetailsUsers::where('id_users',$request->id)->firstOrfail();
        $image_old=$detail->photo_profil;
        $image_new="";
        if ($request->hasFile('photo_profil')) {
            File::delete('images/'.$image_old);
            $image_new= rand(1, 1000000) . '_' . $request->file('photo_profil')->getClientOriginalName();
            $request->file('photo_profil')->move("images", $image_new);
        }
        if($image_new!=""){
            $detail->photo_profil= $image_new;
        }else{
            $detail->photo_profil= $image_old;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        $detail->tel1 = $request->tel1;
        $detail->tel2 = $request->tel2;
        $detail->fax = $request->fax;
        $detail->ville = $request->ville;
        $detail->adress = $request->adress;
        $detail->cp = $request->cp;
        $detail->poste = $request->poste;
        $detail->typeinfluencer = $request->typeinfluencer;
        $detail->urlfb = $request->urlfb;
        $detail->urlinstagram = $request->urlinstagram;
        $detail->presentation = $request->presentation;
        $detail->save();
        return back()->with('status','Modification términer avec succées');
    }
    function modifierprofileform($id){
        $user = User::find($id);
       $detail = DetailsUsers::where('id_users',$id)->firstOrfail();
        return view('layouts/modifierprofil', compact('user','detail'));
    }

    function verifcode (Request $request, $id){
        $client = User::find($id);
        if($request->token === $client->token){
            User::find($id)->update(['etat' => 'verifier']);
        }
        return back();

    }

    function accueilForm () {
        return view('layouts/acceuil');
    }

    function profilUserForm() {
        return view('profil_user');
    }
    public function viewlogin(){
        return view('viewlogin');
    }
}
