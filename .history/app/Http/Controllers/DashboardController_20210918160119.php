<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Professeur;
use App\Models\Admin;
use App\Models\SuperAdmin;
use App\Models\Etablissement;
use App\Models\Relative;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Quand c'était resté bloqué dans une session, on a fait :
        // 1: public function index(Request $request) au lie ude public function index()
        // 2:  $request->session()->flush();
        // 3: on a re-actualiser la page et badaboum, ça a marché 


        // Dieu merci 
        // on va rediriger les utilisateurs vers ces différentes pages s'ils sont authentifiés 
        // eleve
        // relative
        // professeur 
        // etablissement 
        // admin 
        // superadmin 

        //dd("Peut-être que c'est moi ");
        if (Auth::user()->hasRole('eleve')) {
            // dd('Je suis un eleve');
            return view('Eleve.accueil');
        } elseif (Auth::user()->hasRole('relative')) {
            // dd('Je suis un parent');
            return view('Relative.accueil');
        } elseif (Auth::user()->hasRole('professeur')) {
            // dd('Je suis un professeur');
            return view('Professeur.accueil');
        } elseif (Auth::user()->hasRole('etablissement')) {
            // dd('Je suis un etablissement');
            return view('Etablissement.accueil');
        } elseif (Auth::user()->hasRole('admin')) {
            // dd('Je suis un admin');
            return view('admin.accueil');
        } elseif (Auth::user()->hasRole('superadmin')) {
            // dd('Je suis un superadmin');
            return redirect(route(''));
        }
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
