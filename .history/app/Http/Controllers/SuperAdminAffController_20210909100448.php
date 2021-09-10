<?php

namespace App\Http\Controllers;

use App\Models\Etablissement;
use Illuminate\Http\Request;

class SuperAdminAffController extends Controller
{



    //          ACCUEIL 

    public function accueil()
    {
        return view('Superadmin.accueil');
    }

    //          ETABLISSEMENT

    // Afficher tous les etablissements
    public function alletablissement()
    {
        $etablissement = Etablissement::all();

        return view('Superadmin.Etablissement.alletablissement', compact('etablissement'));
    }
    // Afficher tous les etablissements
    public function addetablissementaff()
    {
        $etablissement = Etablissement::all();

        return view('Superadmin.Etablissement.alletablissement', compact('etablissement'));
    }

    // Ajouter un etablissement
    public function addetablissement()
    {


        return view('Superadmin.Etablissement.addetablissement');
    }

    // Afficher le detail d'un etablissement
    public function detailetablissement()
    {


        return view('Superadmin.Etablissement.detailetablissement');
    }


    // Afficher tous les etablissements
    public function updateetablissement()
    {


        return view('Superadmin.Etablissement.updateetablissement');
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
