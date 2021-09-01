<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    // Permet de vérifier si l'utilisateur est connecté avant de le diriger vers les routes en dessous 
    public function __construct()
    {
        // 
        $this->middleware('auth');
    }

    // Route vers accueil de eleve 
    public function accueileleve()
    {
        // 
        return view('Eleve.accueil');
    }
    // Route vers accueil du parent 
    public function accueilparent()
    {
        // 
        return view('Relative.accueil');
    }
    // Route vers accueil du professeur 
    public function accueilprofesseur()
    {
        // 
        return view('professeur.accueil');
    }
    // Route vers accueil de l'etablissement
    public function accueiletablissement()
    {
        // 
        return view('Etablissement.accueil');
    }
    // Route vers accueil de l'admin
    public function accueiladmin()
    {
        // 
        return view('admin.accueil');
    }
    // Route vers accueil du superadmin
    public function accueilsuperadmin()
    {
        // 
        return view('SuperAdministrateur.accueil');
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
