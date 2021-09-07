<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Eleve;
use App\Models\Etablissement;
use App\Models\EtablissementParent;
use App\Models\Matiere;
use Facade\FlareClient\View;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        // $user = user::all();
        $userdetail = user::findOrFail($id);


        // $userdetail = user::findOrFail($user);



        return view('SuperAdministrateur.Etablissement.detailetablissement', compact('userdetail'));
    }

    // Pour ajouter un etablissement 
    public function addetablissementaff()
    {
        return view('SuperAdministrateur.Etablissement.addetablissement');
    }

    // Pour ajouter un etablissement 
    public function addetablissement(Request $request)
    {
        // 
        $this->validate(
            // 
            $request,
            [
                // 
                'nom' => 'required',
                'prenom' => 'required',
                'sexe' => 'required',
                'datenaiss' => 'required',
                'login' => 'required',
                // 'password' => $request->password,
                'password' => 'required',
                'email' => 'required',
                'adresse' => 'required',
                // 'telephone' => $request->telephone,

            ]
        );
        // dd('store'); 
        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'sexe' => $request->sexe,
            'datenaiss' => $request->datenaiss,
            'login' => $request->login,
            // 'password' => $request->password,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'adresse' => $request->adresse,
            // 'telephone' => $request->telephone,

        ]);
        // role_user::create([
        //     'role_id' => $request->role_id,

        // ]);
        $user->attachRole($request->role_id);


        return view('SuperAdministrateur.Etablissement.addetablissement');
    }
    //  Pour afficher la vue de modification des etablissements
    public function editetablissement($id)
    {
        // 
        // dd('detailetablissement');
        // $user = user::All();
        // dd('breeeef');
        // $user = user::all();
        $user = user::findOrFail($id);


        // $userdetail = user::findOrFail($user);



        return view('SuperAdministrateur.Etablissement.updateetablissement', compact('user'));
    }

    // Pour ajouter un etablissement 
    public function updateetablissement()
    {
        dd('update');
        return view('SuperAdministrateur.Etablissement.updateetablissement');
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

    //                                          INSCRIPTION
    public function inscription()
    {
        // 
        return view('SuperAdministrateur.Inscription');
    }


    // Pour ajouter un etablissement 
    public function addinscription(Request $request)
    {
        // 
        $this->validate(
            // 
            $request,
            [
                // 
                'nomEleve' => 'required',
                'prenomEleve' => 'required',
                'sexeEleve' => 'required',
                'datenaissEleve' => 'required',
                'loginEleve' => 'required',
                // 'password' => $request->password,
                'passwordEleve' => 'required',
                'emailEleve' => 'required',
                'adresseEleve' => 'required',
                'telephoneEleve' => 'required',
                'classe' => 'required',

            ]
        );
        // dd('store'); 
        $eleve = Eleve::create([
            'nom' => $request->nomEleve,
            'prenom' => $request->prenomEleve,
            'sexe' => $request->sexeEleve,
            'datenaiss' => $request->datenaissEleve,
            'login' => $request->login,
            // 'password' => $request->password,
            'password' => Hash::make($request->passwordEleve),
            'email' => $request->emailEleve,
            'adresse' => $request->adresseEleve,
            'telephone' => $request->telephoneEleve,

        ]);
        // $classe = Classe::create;


        return view('SuperAdministrateur.inscription', compact('eleve'));
    }

    // POUR AJOUTER UNE MATIERE 
    public function addmatiere(Request $request)
    {
        // 
        $this->validate(
            // 
            $request,
            [
                // 
                'nomMatiere' => 'required',
            ]
        );
        // dd('store'); 

        // if ($matiere->nomMatiere->exist())
        $matiere = Matiere::create([
            'nomMatiere' => $request->nomMatiere,
        ]);

        return view('SuperAdministrateur.inscription', compact('matiere'));
    }

    // POUR AJOUTER UNE CLASSE 
    public function addclasse(Request $request)
    {
        // 
        $this->validate(
            // 
            $request,
            [
                // 
                'nomClasse' => 'required',
                'typeClasse' => 'required',

            ]
        );

        // dd('store'); 
        $classe = Classe::create([
            'nomClasse' => $request->nomClasse,
            'typeClasse' => $request->typeClasse,

        ]);
        // $classe = Classe::create;


        return view('SuperAdministrateur.inscription', compact('classe'));
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
