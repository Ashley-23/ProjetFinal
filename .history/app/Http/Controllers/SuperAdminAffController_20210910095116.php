<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etablissement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SuperAdminAffController extends Controller
{



    //          ACCUEIL 

    public function accueil()
    {
        return view('Superadmin.accueil');
    }

    //                                                                                    ETABLISSEMENT

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

        return view('Superadmin.Etablissement.addetablissement', compact('etablissement'));
    }

    // Ajouter un etablissement
    public function addetablissement(Request $request)
    {
        // dd('Ajouter un etablissement');
        $etablissement = Etablissement::All();

        $this->validate(
            $request,
            [
                'nomEtablissement' => 'required|min:3',
                'login' => 'required|min:3',
                'adresseEtablissement' => 'required',
                'emailEtablissement' => 'required',
                'password' => 'required|min:6',
                'telephoneEtablissement' => 'required|min:8|max:8',

            ]
        );
        // dd('store');
        Etablissement::create([
            'nomEtablissement' => $request->nomEtablissement,
            'login' => $request->login,
            'adresseEtablissement' => $request->adresseEtablissement,
            'emailEtablissement' => $request->emailEtablissement,
            'password' => Hash::make($request->password),
            'telephoneEtablissement' => $request->telephoneEtablissement,
        ]);

        return redirect(route('vue_superadmin_alletablissement'));
    }

    // Afficher le detail d'un etablissement
    public function detailetablissement($idEtablissement)
    {
        // dd('Affichage des détails sur les etablissements');
        $etablissementdetail = Etablissement::findOrFail($idEtablissement);

        return view('Superadmin.Etablissement.detailetablissement', compact('etablissementdetail'));
    }


    // Afficher tous les etablissements
    public function updateetablissementaff($idEtablissement)
    {
        $etablissement = Etablissement::all();
        $etablissementedit = Etablissement::findOrFail($idEtablissement);
        return view('Superadmin.Etablissement.updateetablissement', compact('etablissementedit', 'etablissement'));
    }

    // Afficher tous les etablissements
    public function updateetablissement(Request $request, $id)
    {

        $this->validate(
            $request,
            [
                'nomEtablissement' => 'required|min:3',
                'login' => 'required|min:3',
                'adresseEtablissement' => 'required',
                'emailEtablissement' => 'required',
                'telephoneEtablissement' => 'required|min:8|max:8',

            ]
        );

        // 
        //dd('update');
        // $updateetablissement->update([
        //     'nomEtablissement' => $request->nomEtablissement,
        //     'login' => $request->login,
        //     'adresseEtablis4sement' => $request->adresseEtablissement,
        //     'emailEtablissement' => $request->emailEtablissement,
        //     'telephoneEtablissement' => $request->telephoneEtablissement,
        // ]);

        Etablissement::where('idEtablissement', $id)->update(
            [
                'nomEtablissement' => $request->nomEtablissement,
                'login' => $request->login,
                'adresseEtablissement' => $request->adresseEtablissement,
                'emailEtablissement' => $request->emailEtablissement,
                'telephoneEtablissement' => $request->telephoneEtablissement,
            ]
        );

        return redirect(route('vue_superadmin_alletablissement'));
    }











    //                                                                                   CLASSE

    // Afficher toutes les classes
    public function allclasse()
    {
        $classe = Classe::all();

        return view('Superadmin.Classe.allclasse', compact('classe'));
    }
    // Afficher tous les etablissements
    public function addclasseaff()
    {
        $classe = Classe::all();

        return view('Superadmin.Classe.addclasse', compact('classe'));
    }

    // Ajouter un etablissement
    public function addclasse(Request $request)
    {
        // dd('Ajouter un etablissement');
        $classe = Classe::All();

        $this->validate(
            $request,
            [
                'nomClasse' => 'required|min:3',
                'typeClasse' => 'required|min:3',
            ]
        );
        // dd('store');
        Etablissement::create([
            'nomClasset' => $request->nomClasse,
            'typeClasse' => $request->typeClasse,
        ]);

        // return redirect(route('vue_superadmin_alletablissement'));
    }

    // Afficher le detail d'un etablissement
    public function detailclasse($idClasse)
    {
        // dd('Affichage des détails sur les etablissements');
        $classedetail = Etablissement::findOrFail($idClasse);

        return view('Superadmin.Classe.detailclasse', compact('classedetail'));
    }


    // Afficher tous les etablissements
    public function updateclasseaff($idEtablissement)
    {
        $classe = Classe::all();
        $classeedit = Classe::findOrFail($idEtablissement);
        return view('Superadmin.Etablissement.updateclasse', compact('etablissementedit', 'etablissement'));
    }

    // Afficher tous les etablissements
    public function updateetablissement(Request $request, $id)
    {

        $this->validate(
            $request,
            [
                'nomEtablissement' => 'required|min:3',
                'login' => 'required|min:3',
                'adresseEtablissement' => 'required',
                'emailEtablissement' => 'required',
                'telephoneEtablissement' => 'required|min:8|max:8',

            ]
        );

        // 
        //dd('update');
        // $updateetablissement->update([
        //     'nomEtablissement' => $request->nomEtablissement,
        //     'login' => $request->login,
        //     'adresseEtablis4sement' => $request->adresseEtablissement,
        //     'emailEtablissement' => $request->emailEtablissement,
        //     'telephoneEtablissement' => $request->telephoneEtablissement,
        // ]);

        Etablissement::where('idEtablissement', $id)->update(
            [
                'nomEtablissement' => $request->nomEtablissement,
                'login' => $request->login,
                'adresseEtablissement' => $request->adresseEtablissement,
                'emailEtablissement' => $request->emailEtablissement,
                'telephoneEtablissement' => $request->telephoneEtablissement,
            ]
        );

        return redirect(route('vue_superadmin_alletablissement'));
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
