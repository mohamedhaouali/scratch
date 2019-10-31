<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use App\Mots;
use Auth;
use App\DetailsUsers;
use App\User;
use App\sousservices;
use App\servicesproposes;

class ServicesController extends Controller
{
    function index(){
        $service = Services::OrderBy('created_at','DESC')->paginate(4);
        $DetailsUser=DetailsUsers::all();
        return view ('layouts/index',compact('service','DetailsUser'));

    }

    function viewrecherche(){
        $all=Services::OrderBy('created_at','DESC')->paginate(4);
        $DetailsUsers=DetailsUsers::all();
        return view('layouts/rechercheview',compact('all','DetailsUsers'));
    }

    function afficher(Request $request){
        return $request;
    }
    function AjouterServicesForm(){
        $servicepropose = servicesproposes::all();
        return view('layouts/AjouterServicesForm')->with('services', $servicepropose);
    }

    function AjouterServicesAction(Request $request){
        $document="";
       if ($request->hasFile('document')) {
           $document= rand(1, 10000).'_'.$request->file('document')->getClientOriginalName();
           $request->file('document')->move("images\Document", $document);
       }
        $tab = count($request->tags);
        $service = new Services;
        $service->user_id = Auth::user()->id;
        $service->titre = $request->titre;
        $service->type = null;
        $service->localisation = $request->localisation;
        $service->salaire_min = $request->salaire_min;
        $service->salaire_max = $request->salaire_max;
        $service->description = $request->description;
        $service->sous_services = $request->sousservice;
        $service->noms_services = $request->servicepropose;
        $service->document = $document;
        $service->save();
        $identifient = $service->id;
        for ($k=0; $k<$tab;$k++){
            $mot = new mots;
            $mot->id_offre = $identifient;
            $mot->tags = $request->tags[$k];
            $mot->id_user = Auth::user()->id;
            $mot->save();
        }

        return back()->with('status','Ajout términé avec succées');
    }

    function filtrationServices($prix_min,$prix_max,$titre,$dt,$localisation) {

        $filters = [
            'prix_min'    => $prix_min,
            'prix_max' => $prix_max,
            'titre'    => $titre,
            'dt' => $dt,
            'localisation'    => $localisation,
        ];
      $res = Services::where(function ($query) use ($filters) {
        if ($filters['prix_min']!='all') {
            $query->where('salaire_min', '>', $filters['prix_min']-1);
        }

        if ($filters['prix_max']!='all') {
                $query->where('salaire_max', '<', $filters['prix_max']+1);
        }

        if ($filters['titre']!='all') {

                $query->where('titre', '=', $filters['titre']);

        }

        if ($filters['dt']!='all') {
                    $query->where('created_at', 'like', "%".$filters['dt']."%");
        }

        if ($filters['localisation']!='all') {


                $query->where('localisation', '=', $filters['localisation']);


        }

        })->get();


         return $res;
    }


    public function ShowDetailService($id){
        $service = Services::find($id);
        $detail=DetailsUsers::where('id_users',$service->user_id)->get();
        return view ('ShowDetailService',compact('service','detail'));

    }

    public function Detailfreelancer($id){
        $service = Services::find($id);
        $detail=DetailsUsers::where('id_users',$id)->firstOrfail();
        return view ('Detailfreelancer',compact('service','detail'));

    }

    public function Sousservices($id){
        $sousservices=sousservices::where('id_service',$id)->get();
        return $sousservices;

    }

    public function ServiceUser($id){

        $service=Services::where('user_id', $id)->OrderBy('created_at','DESC')->paginate(4);
        $DetailsUser=DetailsUsers::where('id_users',$id)->get();
        return view('layouts/ServiceUser',compact('service','DetailsUser'));
    }

    public function EditServicesForm($id){

        $service=Services::where('id', $id)->get();
        $servicepropose = servicesproposes::all();
        foreach ( $service as $service){
            $sousservice = sousservices::where('id_service', $service->noms_services)->get();
        }
        return view ('EditServicesForm', compact('service','servicepropose','sousservice'));


    }

    public function EditServicesAction(Request $request){


        $service=Services::find($request->id);

        $service->titre=$request->titre;
        $service->type=null;
        $service->localisation=$request->localisation;
        $service->sous_services=$request->sous_services;
        $service->noms_services=$request->noms_services;
        $service->description=$request->description;
        $service->salaire_min=$request->salaire_min;
        $service->salaire_max=$request->salaire_max;
        $service->save();
        return back()
            ->with('status','Service modifié avec succés');

    }

    public function DeleteServicesAction($id){


        Services::destroy($id);
        return back()
            ->with('status','Service supprimé avec succés');

    }






}
