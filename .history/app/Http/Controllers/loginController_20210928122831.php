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

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function deconnexion()
    // {
    //     $erreur = "a";
    //     return view('connexion', compact('erreur'));
    // }
    public function affichage()
    {
        $erreur = "";
        return view('connexion', compact('erreur'));
    }
    public function eleve()
    {
        $erreur = "";
        return view('connexion', compact('erreur'));
    }
    public function parent()
    {
        $erreur = "";
        return view('', compact('erreur'));
    }
    public function professeur()
    {
        return view('Professeur.dashboardprofesseur');
    }
    public function administrateur()
    {
        return view('admin.dashboardadmin');
    }
    public function deconnexion(Request $request)
    {
        // Eleve::logout();
        $l = Session::flash("message", "You have been logged out!");
        // dd($l);
        // return $this->logout();
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
                    // dd('eleve');
                    // $eleveclasse = DB::table('Eleves')
                    //     ->join('Classes', 'Eleves.idClasse', '=', 'Classes.idClasse')
                    //     ->select()
                    $eleveclasse = DB::table('Eleves')
                        ->join('Classes', 'Eleves.idClasse', '=', 'Classes.idClasse')
                        ->select('Eleves.*',  'Classes.*')
                        ->where([
                            ['Eleves.activeEleve', '=', 't'],
                            ['Eleves.idEleve', $confirmeconnexioneleve->idEleve],
                        ])
                        ->first();
                    $elevenote = DB::table('Eleves')
                        ->join('Notes', 'Eleves.idEleve', '=', 'Notes.idEleve')
                        ->join('Classes', 'Eleves.idClasse', '=', 'Classes.idClasse')
                        ->join('Classe_Matieres', 'Classe_Matieres.id', '=', 'Notes.id')
                        ->join('Matieres', 'Matieres.idMatiere', '=', 'Classe_Matieres.idMatiere')
                        ->select('Notes.*', 'Matieres.*')
                        ->where([
                            ['Eleves.activeEleve', '=', 't'],
                            ['Notes.idEleve', $confirmeconnexioneleve->idEleve],
                        ])
                        ->get();
                    // dd($elevenote);
                    $notecompte = count($elevenote);
                    return view('Eleve.accueil', compact('eleve', 'prof', 'parent', 'classe', 'et', 'matiere', 'confirmeconnexioneleve', 'eleveclasse', 'elevenote', 'notecompte'));

                    // return redirect(route('eleve', compact('eleve', 'prof', 'parent', 'classe', 'et', 'matiere', 'confirmeconnexioneleve')));
                } else {
                    // 
                    $erreur = "Veuillez revérifier vos informations";
                    return view('connexion', compact('erreur'));
                }
            } else {
                // 
                $erreur = " Nous n'avons aucun élève de ce nom. Veuillez revérifier vos informations";
                return view('connexion', compact('erreur'));
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
            // if ($confirmeconnexionparent != null) {
            //     // 
            if ($confirmeconnexionparent != null) {
                if (($request->login == $confirmeconnexionparent->login && Hash::check($request->password, $confirmeconnexionparent->passwordRelative))) {
                    // 
                    $mykids = DB::table('Eleves')
                        ->join('Relatives', 'Eleves.idRelative', '=', 'Relatives.idrelative')
                        ->select('Eleves.*', 'Relatives.*')
                        ->where([
                            ['relatives.login', '=', $confirmeconnexionparent->login],
                            ['Eleves.activeEleve', '=', 't'],
                            ['Eleves.idRelative', '=', $confirmeconnexionparent->idRelative],
                        ])
                        ->get();

                    $mykidsclasse = DB::table('Eleves')
                        ->join('Relatives', 'Eleves.idRelative', '=', 'Relatives.idrelative')
                        ->join('Classes', 'Classes.idClasse', '=', 'Eleves.idClasse')
                        ->select('Eleves.*', 'Classes.*', 'Relatives.*')
                        ->where([
                            ['relatives.login', '=', $confirmeconnexionparent->login],
                            ['Eleves.activeEleve', '=', 't'],
                            ['Eleves.idRelative', '=', $confirmeconnexionparent->idRelative],
                        ])
                        ->get();


                    // dd($mykids, $mykidsclasse);

                    $enfantcompte = count($mykids);
                    $notekids = DB::table('Notes')
                        ->join('Eleves', 'Eleves.idEleve', '=', 'Notes.idEleve')
                        ->join('Relatives', 'Eleves.idRelative', '=', 'Relatives.idrelative')
                        ->join('Classe_Matieres', 'Classe_Matieres.id', '=', 'Notes.id')
                        ->join('Matieres', 'Matieres.idMatiere', '=', 'Classe_Matieres.idMatiere')
                        ->join('Classes', 'Classes.idClasse', '=', 'Classe_Matieres.idClasse')
                        ->select('Eleves.*', 'Notes.*', 'Matieres.*', 'Classes.*')
                        ->where([
                            ['relatives.login', '=', $confirmeconnexionparent->login],
                            ['Eleves.activeEleve', '=', 't'],
                            ['Eleves.idRelative', '=', $confirmeconnexionparent->idRelative],
                        ])
                        ->get();
                    // dd($mykids, $notekids);
                    return view('Relative.accueil', compact('eleve', 'prof', 'parent', 'classe', 'et', 'matiere', 'confirmeconnexionparent', 'notekids', 'mykids', 'enfantcompte', 'mykidsclasse'));
                } else {
                    $erreur = "Veuillez revérifier vos informations";
                    return view('connexion', compact('erreur'));
                }
            } else {
                // 
                $erreur = " Nous n'avons aucun parent de ce nom. Veuillez revérifier vos informations";
                return view('connexion', compact('erreur'));
            }
            // }
        } elseif ($request->role == 'professeur') {
            // CONNEXION PROFESSEUR
            $confirmeconnexionprof = DB::table('Professeurs')
                ->select('Professeurs.*')
                ->where([
                    ['Professeurs.login', $request->login],
                ])
                ->first();

            // 
            // dd($confirmeconnexionprof);
            if ($confirmeconnexionprof != null) {
                // 
                if (($request->login == $confirmeconnexionprof->login && Hash::check($request->password, $confirmeconnexionprof->passwordProfesseur))) {
                    // 
                    $classep = DB::table('Professeurs')
                        ->select('Professeurs.*')
                        ->where(
                            [
                                ['Professeurs.activeProfesseur', '=', 't'],
                                ['Professeurs.login', $confirmeconnexionprof->login]
                            ]
                        )
                        ->get();
                    $classeprofesseur = DB::table('Professeurs')
                        ->join('Classe_Matieres', 'Classe_Matieres.idProfesseur', '=', 'Professeurs.idProfesseur')
                        ->join('Classes', 'Classe_Matieres.idClasse', '=', 'Classes.idClasse')
                        ->join('Matieres', 'Classe_Matieres.idMatiere', '=', 'Matieres.idClasse')
                        ->select('Professeur.*', 'Classes.*', 'Matieres.*')
                        ->where([
                            ['Professeurs.activeProfesseur', '=', 't'],
                            ['Professeurs.login', $confirmeconnexionprof],

                        ])
                        ->get();
                    // 
                    dd($classep);
                    return view('Professeur.dashboardprofesseur', compact('eleve', 'prof', 'parent', 'classe', 'et', 'matiere', 'confirmeconnexionprof'));
                } else {
                    $erreur = "Veuillez revérifier vos informations";
                    return view('connexion', compact('erreur'));
                }
            } else {
                // 
                $erreur = " Nous n'avons aucun professeur de ce nom. Veuillez revérifier vos informations";
                return view('connexion', compact('erreur'));
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
            if ($confirmeconnexionet != null) {
                // 
                // dd($confirmeconnexion);
                if (($request->login == $confirmeconnexionet->login && Hash::check($request->password, $confirmeconnexionet->passwordEtablissement))) {
                    // 
                    dd('etablissement');
                    return view('Superadmin.accueil', compact('eleve', 'prof', 'parent', 'classe', 'et', 'matiere'));
                } else {
                    // 
                    $erreur = "Veuillez revérifier vos informations";
                    return view('connexion', compact('erreur'));
                }
            } else {
                // 
                $erreur = " Nous n'avons aucun etablissement de ce nom. Veuillez revérifier vos informations";
                return view('connexion', compact('erreur'));
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
            if ($confirmeconnexionadmin != null) {

                if (($request->login == $confirmeconnexionadmin->login && Hash::check($request->password, $confirmeconnexionadmin->passwordAdmin))) {
                    // 
                    dd('admin');
                    return view('Superadmin.accueil', compact('eleve', 'prof', 'parent', 'classe', 'et', 'matiere'));
                } else {
                    $erreur = "Veuillez revérifier vos informations";
                    return view('connexion', compact('erreur'));
                }
            } else {
                // 
                $erreur = " Nous n'avons aucun administrateur de ce nom. Veuillez revérifier vos informations";
                return view('connexion', compact('erreur'));
            }
        }
    }



    public function detailnote($idParent, $idEnfant)
    {

        $parent = DB::table('Relatives')
            ->join('Eleves', 'Eleves.idRelatives', '=', 'Relatives.idRelative')
            ->select
            // 
            $info = DB::table('Eleves')
            ->join('Relatives', 'Relatives.idRelative', '=', 'Eleves.idRelative')
            ->join('Notes', 'Eleves.idEleve', '=', 'Notes.idEleve')
            ->join('Classe_Matieres', 'Classe_Matieres.id', '=', 'Notes.id')
            ->join('Matieres', 'Matieres.idMatiere', '=', 'Classe_Matieres.idMatiere')
            ->join('Classes', 'Classes.idClasse', '=', 'Classe_Matieres.idClasse')
            ->select('Eleves.*', 'Notes.*', 'Relatives.*', 'Classe_Matieres.*', 'Matieres.*', 'Classes.*')
            ->where([
                ['Eleves.idEleve', $idEnfant],
                ['Relatives.idRelative', $idParent]
            ])
            ->get();
        // dd($idParent, $idEnfant, $info);
        return view('Relative.detailnote', compact('info', 'parent'));
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
