<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Classe;
use App\Models\Matiere;
use App\Models\Relative;
use App\Models\Professeur;
use Illuminate\Http\Request;
use App\Models\Etablissement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function afficheconnexion()
    // {
    //     // 
    //     return view('');
    // }
    public function connexion(Request $request)
    {
        $eleve = Eleve::all();
        $prof = Professeur::all();
        $parent = Relative::all();
        $classe = Classe::all();
        $et = Etablissement::all();
        $matiere = Matiere::all();
        //  
        // $h = Eleve::where('activeEleve', '=', 't')->get();
        $eleve = DB::table('Eleves')
            ->select('Eleves.*')
            ->where('Eleves.activeEleve', '=', 't')
            ->get();
        // 
        // dd($eleve);
        // 
        $this->validate(
            $request,
            [
                'login' => 'required|min:3',
                'password' => 'required|min:3',
                'role' => 'required',
            ],
            [
                // 
                'login.required' => "Veuillez saisir le nom d'utilisateur",
                'password.required' => "Veuillez saisir le mot de passe",
            ]
        );

        if ($request->role == 'eleve') {
            // 

        }




        // 
    }
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
