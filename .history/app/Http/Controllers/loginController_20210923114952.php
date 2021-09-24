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
    public function affichage()
    {
        $erreur = "";
        return view('connexion', compact('erreur'));
    }
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
        // $eleve = DB::table('Eleves')
        //     ->select('Eleves.*')
        //     ->where('Eleves.activeEleve', '=', 't')
        //     ->get();
        // // 
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
            $confirmeconnexioneleve = DB::table('Eleves')
                ->select('Eleves.*')
                ->where([
                    ['Eleves.login', $request->login],
                ])
                ->first();

            // 
            // dd($confirmeconnexion);

            // Connexion eleve
            if ($confirmeconnexioneleve != null) {
                // 
                if (($request->login == $confirmeconnexioneleve->login && Hash::check($request->password, $confirmeconnexioneleve->passwordEleve))) {
                    // 
                    dd('eleve');
                    return view('Superadmin.accueil', compact('eleve', 'prof', 'parent', 'classe', 'et', 'matiere'));
                } else {
                    // 
                    $erreur = "Veuillez revérifier vos informations";
                    return view('connexion', compact('erreur'));
                }
            } else {
            }
        } elseif ($request->role == 'parent') {
            // CONNEXION PARENT

            $confirmeconnexionparent = DB::table('Relatives')
                ->select('Relatives.*')
                ->where([
                    ['Relatives.login', $request->login],
                ])
                ->first();

            // 
            // dd($confirmeconnexionparent);
            if ($confirmeconnexionparent != null) {
                if (($request->login == $confirmeconnexionparent->login && Hash::check($request->password, $confirmeconnexionparent->passwordRelative))) {
                    // 
                    dd('parent');
                    return view('Superadmin.accueil', compact('eleve', 'prof', 'parent', 'classe', 'et', 'matiere'));
                } else {
                    dd('non parent');
                }
            } else {

                dd('non parent est null');
            }
            // 
        } elseif ($request->role == 'professeur') {
            // CONNEXION PROFESSEUR
            $confirmeconnexionprof = DB::table('Professeurs')
                ->select('Professeurs.*')
                ->where([
                    ['Professeurs.login', $request->login],
                ])
                ->get();

            // 
            // dd($confirmeconnexionprof);
            if (($request->login == $confirmeconnexionprof->login && Hash::check($request->password, $confirmeconnexionprof->passwordProfesseur))) {
                // 
                dd('professeur');
                return view('Superadmin.accueil', compact('eleve', 'prof', 'parent', 'classe', 'et', 'matiere'));
            } else {
                dd('non professeur');
            }
        } elseif ($request->role == 'etablissement') {
            // Connexion etablissement
            $confirmeconnexionet = DB::table('Etablissements')
                ->select('Etablissements.*')
                ->where([
                    ['Etablissements.login', $request->login],
                ])
                ->first();

            // 
            // dd($confirmeconnexion);
            if (($request->login == $confirmeconnexionet->login && Hash::check($request->password, $confirmeconnexionet->passwordEtablissement))) {
                // 
                dd('etablissement');
                return view('Superadmin.accueil', compact('eleve', 'prof', 'parent', 'classe', 'et', 'matiere'));
            }
        } elseif ($request->role == 'administrateur') {
            // CONEXION ADMINISTRATEUR

            $confirmeconnexionadmin = DB::table('Admins')
                ->select()
                ->where([
                    ['Admins.login', $request->login],
                ])
                ->first();

            // 
            // dd($confirmeconnexionadmin);
            if (($request->login == $confirmeconnexionadmin->login && Hash::check($request->password, $confirmeconnexionadmin->passwordAdmin))) {
                // 
                dd('admin');
                return view('Superadmin.accueil', compact('eleve', 'prof', 'parent', 'classe', 'et', 'matiere'));
            } else {
                dd('non admin');
            }
        }
    }




    // 

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
