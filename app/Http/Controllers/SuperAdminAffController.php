<?php

namespace App\Http\Controllers;

use App\Models\Etablissement;
use App\Models\EtablissementParent;
use Facade\FlareClient\View;
use App\Models\User;
use Illuminate\Http\Request;

class SuperAdminAffController extends Controller
{
    //                                          ACCUEIL 
    public function accueil()
    {
        return view('SuperAdministrateur.accueil');
    }

    //                                          LOCK-SCREEN
    public function lockscreen()
    {
        return view('SuperAdministrateur.lock-screen');
    }


    //                                          ETABLISSEMENT
    // Pour afficher tous les etablissements
    public function alletablissement()
    {
        // 
        $user = user::All();
        return view('SuperAdministrateur.Etablissement.alletablissement', compact('user'));
    }
    // Pour avoir les détails sur un etablissement 
    public function detailetablissement($id)
    {
        // 
        // dd('detailetablissement');
        // $user = user::All();
        // dd('breeeef');
        $userdetail = user::findOrFail($id);

        // $userdetail = user::findOrFail($user);



        return view('SuperAdministrateur.Etablissement.detailetablissement', compact('userdetail'));
    }
    // Pour ajouter un etablissement 
    public function addetablissement()
    {
        // 
        return view('SuperAdministrateur.Etablissement.addetablissement');
    }

    //                                          ADMINISTRATEUR
    // Pour voir tous les administrateurs 
    public function alladmin()
    {
        // 
        return view('SuperAdministrateur.Admin.alladmin');
    }
    // Pour voir les détails sur un administrateur 
    public function detailadmin()
    {
        // 
        return view('SuperAdministrateur.Admin.detailadmin');
    }
    // Pour ajouter un administrateur 
    public function addadmin()
    {
        // 
        return view('SuperAdministrateur.Admin.addadmin');
    }

    //                                          NOTIFICATIONS 
    public function notice()
    {
        // 
        return view('SuperAdministrateur.notice');
    }

    //                                          MESSAGES
    public function message()
    {
        // 
        return view('SuperAdministrateur.message');
    }














    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
