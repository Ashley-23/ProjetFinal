<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminAffController extends Controller
{



    //                                          ETABLISSEMENT
    // Pour afficher tous les etablissements
    public function alletablissement()
    {
        // 
        return view('SuperAdministrateur.Etablissement.alletablissement');
    }
    // Pour avoir les détails sur un etablissement 
    public function detailetablissement()
    {
        // 
        return view('SuperAdministrateur.Etablissement.detailetablissement');
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
    public function detailadministrateur()
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
