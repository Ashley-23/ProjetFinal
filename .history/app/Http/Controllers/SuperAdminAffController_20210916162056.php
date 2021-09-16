<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\ClasseMatiere;
use App\Models\Eleve;
use App\Models\Etablissement;
use App\Models\Matiere;
use App\Models\Note;
use App\Models\Professeur;
use App\Models\Relative;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Types\Parent_;
use Symfony\Component\CssSelector\Parser\Shortcut\ElementParser;

class SuperAdminAffController extends Controller
{



    //          ACCUEIL 

    public function accueil()
    {
        $eleve = Eleve::all();
        $prof = Professeur::all();
        $parent = Relative::all();
        $classe = Classe::all();
        $et = Etablissement::all();
        $matiere = Matiere::all();
        return view('Superadmin.accueil', compact('eleve', 'prof', 'parent', 'classe', 'et', 'matiere'));
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
    // Afficher tous les classes
    public function addclasseaff()
    {
        $classe = Classe::all();

        return view('Superadmin.Classe.addclasse', compact('classe'));
    }

    // Ajouter un classe
    public function addclasse(Request $request)
    {
        // dd('Ajouter un classe');
        $classe = Classe::All();

        $this->validate(
            $request,
            [
                'nomClasse' => 'required|min:3',
                'typeClasse' => 'required',
            ]
        );
        // dd('store');
        Classe::create([
            'nomClasse' => $request->nomClasse,
            'typeClasse' => $request->typeClasse,
        ]);

        return redirect(route('vue_superadmin_allclasse'));
    }

    // Afficher le detail d'un classe
    public function detailclasse($idClasse)
    {
        // dd('Affichage des détails sur les classes');
        $classedetail = Classe::findOrFail($idClasse);

        return view('Superadmin.Classe.detailclasse', compact('classedetail'));
    }


    // Afficher tous les classes
    public function updateclasseaff($idClasse)
    {
        $classe = Classe::all();
        $classeedit = Classe::findOrFail($idClasse);
        return view('Superadmin.Classe.updateclasse', compact('classeedit', 'classe'));
    }

    // Afficher tous les classes
    public function updateclasse(Request $request, $id)
    {

        $this->validate(
            $request,
            [
                'nomClasse' => 'required|min:3',
                'typeClasse' => 'required',

            ]
        );

        // 
        //dd('update');

        Classe::where('idClasse', $id)->update(
            [
                'nomClasse' => $request->nomClasse,
                'typeClasse' => $request->typeClasse,
            ]
        );

        return redirect(route('vue_superadmin_allclasse'));
    }







    //                                                                                   MATIERE

    // Afficher toutes les matieres
    public function allmatiere()
    {
        $matiere = Matiere::all();

        return view('Superadmin.Matiere.allmatiere', compact('matiere'));
    }
    // Afficher toutes les matieres
    public function addmatiereaff()
    {
        $matiere = Matiere::all();

        return view('Superadmin.Matiere.addmatiere', compact('matiere'));
    }

    // Ajouter une matiere
    public function addmatiere(Request $request)
    {
        // dd('Ajouter une matiere');
        $matiere = Matiere::All();

        $this->validate(
            $request,
            [
                'nomMatiere' => 'required|min:3',
            ]
        );
        // dd('store');
        Matiere::create([
            'nomMatiere' => $request->nomMatiere,
        ]);

        return redirect(route('vue_superadmin_allmatiere'));
    }

    // Afficher le detail d'une matiere
    public function detailmatiere($idMatiere)
    {
        // dd('Affichage des détails sur les matieres');
        $matieredetail = Matiere::findOrFail($idMatiere);
        $matiere = Matiere::all();

        return view('Superadmin.Matiere.detailmatiere', compact('matieredetail', 'matiere'));
    }


    // Afficher tous les matieres
    public function updatematiereaff($idMatiere)
    {
        $matiere = Matiere::all();
        $matiereedit = Matiere::findOrFail($idMatiere);
        return view('Superadmin.Matiere.updatematiere', compact('matiereedit', 'matiere'));
    }

    // Afficher tous les matieres
    public function updatematiere(Request $request, $id)
    {

        $this->validate(
            $request,
            [
                'nomMatiere' => 'required|min:3',
            ]
        );

        // 
        // dd('update');

        Matiere::where('idMatiere', $id)->update(
            [
                'nomMatiere' => $request->nomMatiere,
            ]
        );

        return redirect(route('vue_superadmin_allmatiere'));
    }

















    //                                                                                   MATIERE/CLASSE

    // Liste des matieres après clic sur classe 
    public function listeclasse($id)
    {
        // dd('Affichage de la liste des matieres associés à une classe');
        $cm = ClasseMatiere::all();
        $classe = Classe::all();
        $matiere = Matiere::all();
        // dd($cm);


        // 
        $listeclasse = DB::table('Classe_Matieres')
            ->join('Classes', 'Classes.idClasse', '=', 'Classe_Matieres.idClasse')
            ->join('Matieres', 'Matieres.idMatiere', '=', 'Classe_Matieres.idMatiere')
            ->select('Classes.*', 'Classe_Matieres.*', 'Matieres.*')
            ->where('Classe_Matieres.idMatiere', $id)
            ->get();


        // dd($listeclasse);
        // $ridcm = DB::table('Classe_Matieres')
        //     ->select('Classe_Matieres.*')
        //     ->where('Classe_Matieres.idMatiere', $id)
        //     ->and('Classe_Matieres.idClasse')
        //     ->get();

        // dd($ridcm);
        return view('Superadmin.ClasseMatiere.listeclasse', compact('cm', 'classe', 'matiere', 'listeclasse'));
    }


    // Afficher la liste des eleves par classe 

    public function listeeleve($idclasse, $idmatiere)
    {
        // 
        $cm = ClasseMatiere::all();
        $classe = Classe::all();
        $matiere = Matiere::all();
        $professeur = Professeur::all();
        $eleve = Eleve::all();
        // dd($idclasse, $idmatiere);
        $ridcm = DB::table('Classe_Matieres')
            ->select('Classe_Matieres.*')
            ->where([
                ['Classe_Matieres.idClasse', '=', $idclasse],
                ['Classe_Matieres.idMatiere', '=', $idmatiere],
            ])
            ->first();
        // dd($ridcm);

        $listeeleve = DB::table('Classes')
            ->join('Eleves', 'Classes.idClasse', '=', 'Eleves.idClasse')
            ->join('Classe_Matieres', 'Classe_Matieres.idClasse', '=', "Eleves.idClasse")
            ->select('Eleves.*', 'Classes.*', 'Classe_Matieres.*')
            ->where(
                [
                    ['Classes.idClasse', '=', $idclasse],
                    ['Classe_Matieres.idMatiere', '=', $idmatiere],
                ]
            )
            ->get();
        // dd($listeeleve);
        $e = count($listeeleve);
        // dd($e);

        return view('Superadmin.ClasseMatiere.listeeleve', compact('cm', 'classe', 'matiere', 'professeur', 'eleve', 'listeeleve', 'ridcm', 'e'));
    }



    // afficher la page d'insertion des notes 
    public function addnoteaff($idmatiere, $idclasse, $ideleve)
    {
        $cm = ClasseMatiere::all();
        $classe = Classe::all();
        $matiere = Matiere::all();
        $professeur = Professeur::all();
        $eleve = Eleve::all();
        $note = Note::all();
        // dd($idmatiere, $idclasse, $ideleve);
        // dd($ideleve);
        $eleveaff = Eleve::findOrFail($ideleve);
        // dd($eleveaff->idEleve);
        // $elevenote = DB::table('Notes')
        //     // ->join('Eleves', 'Eleves.idEleve', '=', 'Notes.idEleve')
        //     ->select('Notes.idNote')
        //     ->where('Notes.idEleve', $ideleve)
        //     ->first();
        // dd($elevenote);
        // 
        $idcmaff = DB::table('Classe_Matieres')
            ->select('Classe_Matieres.id')
            ->where([
                ['Classe_Matieres.idClasse', '=', $idclasse],
                ['Classe_Matieres.idMatiere', '=', $idmatiere],
            ])
            ->first();
        // dd($idcmaff);

        return view('Superadmin.ClasseMatiere.addnote', compact('cm', 'classe', 'matiere', 'professeur', 'eleve', 'note', 'eleveaff', 'idcmaff'));
    }


    // Ajouter une note à un élève
    public function addnote(Request $request)
    {
        // dd('Ajouter une note');
        $note = Note::All();
        // $elevenote = DB::table('Notes')
        //     // ->join('Eleves', 'Eleves.idEleve', '=', 'Notes.idEleve')
        //     ->select('Notes.idNote')
        //     ->where('Notes.idEleve', $id)
        //     ->first();
        // dd($elevenote);

        // $this->validate(
        //     $request,
        //     [
        //         'note1' => 'required',
        //         'note2' => 'required',
        //         'note3' => 'required',
        //     ]
        // );
        // dd('store');
        Note::create([
            'note1' => $request->note1,
            'note2' => $request->note2,
            'note3' => $request->note3,
            'idEleve' => $request->idEleve,
            'id' => $request->id,
        ]);

        return redirect(route('vue_superadmin_allcm'));
    }
    // Afficher la liste des eleves par classe 

    public function allnote($id)
    {

        $cm = ClasseMatiere::all();
        $classe = Classe::all();
        $matiere = Matiere::all();
        $prof = Professeur::all();
        $eleve = Eleve::all();
        $note = Note::all();
        // dd($id);
        // dd($note);
        $el = DB::table('Eleves')
            ->select('Eleves.idEleve')
            ->first();
        $noteel = DB::table('Notes')
            ->select('Notes.idEleve')
            ->get();
        $avg = DB::table('Notes')
        ->select() average('Notes.note1', 'Notes.note2', 'Notes.note3'))
        ->get());
        dd($avg);
        $listenote = DB::table('Notes')
            ->join('Eleves', 'Eleves.idEleve', '=', 'Notes.idEleve')
            ->join('Classe_Matieres', 'Classe_Matieres.id', '=', 'Notes.id')
            ->join('Classes', 'Classes.idClasse', '=', 'Classe_Matieres.idClasse')
            ->join('Matieres', 'Matieres.idMatiere', '=', 'Classe_Matieres.idMatiere')
            ->select('Notes.*', 'Eleves.*', 'Classe_Matieres.*', 'Classes.*', 'Matieres.*')
            // ->whereExists('Notes.idNote')
            ->where('Classe_Matieres.id', $id)
            ->first();
        // dd($listenote);
        // 

        // 


        return view('Superadmin.ClasseMatiere.allnote',  compact('cm', 'classe', 'matiere', 'prof', 'eleve', 'note', 'listenote'));
    }

    // Afficher toutes les matieres
    public function allcm()
    {
        $cm = ClasseMatiere::all();
        $classe = Classe::all();
        $matiere = Matiere::all();
        $prof = Professeur::all();

        $all = DB::table('Classe_Matieres')
            ->join('Classes', 'Classes.idClasse', '=', 'Classe_Matieres.idClasse')
            ->join('Matieres', 'Matieres.idMatiere', '=', 'Classe_Matieres.idMatiere')
            ->select('Classes.*', 'Matieres.*')
            // ->where('idEleve', $idEleve)
            ->get();
        // dd($all); 

        // $users = GestionEcole::table('users')
        //     ->join('contacts', 'users.id', '=', 'contacts.user_id')
        //     ->join('orders', 'users.id', '=', 'orders.user_id')
        //     ->select('users.*', 'contacts.phone', 'orders.price')
        //     ->get();
        // dd($all);

        return view('Superadmin.ClasseMatiere.allcm', compact('cm', 'classe', 'matiere', 'all', 'prof'));
    }


    // Afficher toutes les matieres
    public function addcmaff()
    {
        $cm = ClasseMatiere::all();
        $classe = Classe::all();
        $matiere = Matiere::all();
        $professeur = Professeur::all();

        return view('Superadmin.ClasseMatiere.addcm', compact('cm', 'classe', 'matiere', 'professeur'));
    }

    // Ajouter une matiere
    public function addcm(Request $request)
    {
        // dd('Ajouter une matiere');
        $cm = ClasseMatiere::All();

        $this->validate(
            $request,
            [
                'classeEleve' => 'required',
                'matiereEleve' => 'required',
                'nomProfesseur' => 'required',
            ]
        );
        // dd('store');
        ClasseMatiere::create([
            // 'nomMatiere' => $request->nomMAtiere,
            'idClasse' => $request->classeEleve,
            'idMatiere' => $request->matiereEleve,
            'idProfesseur' => $request->nomProfesseur,
        ]);

        return redirect(route('vue_superadmin_allcm'));
    }

    // Afficher le detail d'une matiere
    public function detailcm($id)
    {
        // dd('Affichage des détails sur les matieres');
        $cmdetail = Matiere::findOrFail($id);
        $classe = Classe::all();
        $matiere = Matiere::all();

        return view('Superadmin.ClasseMatiere.detailcm', compact('cmdetail', 'classe', 'matiere'));
    }


    // Afficher tous les matieres
    public function updatecmaff($idcm)
    {
        $cm = ClasseMatiere::all();
        $classe = Classe::all();
        $matiere = Matiere::all();
        $cmedit = Matiere::findOrFail($idcm);
        return view('Superadmin.ClasseMatiere.updatecm', compact('cm', 'cmedit', 'matiere', 'classe'));
    }

    // Afficher tous les matieres
    public function updatecm(Request $request, $id)
    {

        $this->validate(
            $request,
            [
                // 'nomMatiere' => 'required|min:3',
            ]
        );

        // 
        //dd('update');

        Matiere::where('idMatiere', $id)->update(
            [
                // 'nomMatiere' => $request->nomMatiere,
            ]
        );

        return redirect(route('vue_superadmin_allcm'));
    }













    //                                                                                   ELEVE

    // Afficher tous les eleves
    public function alleleve()
    {
        $eleve = Eleve::all();

        return view('Superadmin.Eleve.alleleve', compact('eleve'));
    }
    // Afficher tous les eleves
    public function addeleveaff()
    {
        $eleve = Eleve::all();
        $classe = Classe::All();


        return view('Superadmin.Eleve.addeleve', compact('eleve', 'classe'));
    }

    // Ajouter un eleve
    public function addeleve(Request $request)
    {

        // $eleve = Eleve::All();
        $classe = Classe::All();

        //dd('Ajouter une eleve');
        // $this->validate(
        //     $request,
        //     [
        //         'nomEleve' => 'required|min:3',
        //         'prenomEleve' => 'required|min:3',
        //         'login' => 'required|min:3',
        //         'dateNaissEleve' => 'required',
        //         'sexeEleve' => 'required',
        //         'emailEleve' => 'required',
        //         'passwordEleve' => 'required|min:8',
        //         'telephoneEleve' => 'required|min:8|max:8',
        //         'adresseEleve' => 'required|min:3',
        //         'classeEleve' => 'required',

        //     ]
        // );

        $this->validate(
            $request,
            [
                'nomEleve' => 'required|min:3',
                'prenomEleve' => 'required|min:3',
                'login' => 'required|min:3',
                'dateNaissEleve' => 'required',
                'sexeEleve' => 'required',
                'emailEleve' => 'required',
                'passwordEleve' => 'required|min:8',
                'telephoneEleve' => 'required|min:8|max:8',
                'adresseEleve' => 'required|min:3',
                'classeEleve' => 'required',

            ]
        );

        //dd('store');
        Eleve::create([
            // 'nomMatiere' => $request->nomMatiere,
            'nomEleve' => $request->nomEleve,
            'prenomEleve' => $request->prenomEleve,
            'login' => $request->login,
            'dateNaissEleve' => $request->dateNaissEleve,
            'sexeEleve' => $request->sexeEleve,
            'emailEleve' => $request->emailEleve,
            'passwordEleve' => Hash::make($request->passwordEleve),
            'telephoneEleve' => $request->telephoneEleve,
            'adresseEleve' => $request->adresseEleve,
            'idClasse' => $request->classeEleve,
        ]);

        return redirect(route('vue_superadmin_alleleve'));
    }

    // Afficher le detail d'une matiere
    public function detaileleve($idEleve)
    {
        // dd('Affichage des détails sur les matieres');
        $elevedetail = Eleve::findOrFail($idEleve);
        $eleve = Eleve::all();

        return view('Superadmin.Eleve.detaileleve', compact('elevedetail', 'eleve'));
    }


    // Afficher tous les matieres
    public function updateeleveaff($idEleve)
    {
        $eleve = Eleve::all();
        $eleveedit = Eleve::findOrFail($idEleve);
        $classe = Classe::all();
        $nom = DB::table('Classes')
            ->join('Eleves', 'Classes.idClasse', '=', 'Eleves.idClasse')
            ->select('Classes.nomClasse', 'Classes.typeClasse')
            ->where('idEleve', $idEleve)
            ->first();

        // $users = GestionEcole::table('users')
        //     ->join('contacts', 'users.id', '=', 'contacts.user_id')
        //     ->join('orders', 'users.id', '=', 'orders.user_id')
        //     ->select('users.*', 'contacts.phone', 'orders.price')
        //     ->get();
        //dd($nom);
        return view('Superadmin.Eleve.updateeleve', compact('eleveedit', 'eleve', 'classe', 'nom'));
    }

    // Afficher tous les matieres
    public function updateeleve(Request $request, $id)
    {

        //dd('update');
        $classe = Classe::all();

        $this->validate(
            $request,
            [
                'nomEleve' => 'required|min:3',
                'prenomEleve' => 'required|min:3',
                'login' => 'required|min:3',
                'dateNaissEleve' => 'required',
                'sexeEleve' => 'required',
                'emailEleve' => 'required',
                'telephoneEleve' => 'required|min:8|max:8',
                'adresseEleve' => 'required|min:3',
                'classeEleve' => 'required',
            ]
        );

        // 
        // dd('update');

        Eleve::where('idEleve', $id)->update(
            [
                'nomEleve' => $request->nomEleve,
                'prenomEleve' => $request->prenomEleve,
                'login' => $request->login,
                'dateNaissEleve' => $request->dateNaissEleve,
                'sexeEleve' => $request->sexeEleve,
                'emailEleve' => $request->emailEleve,
                'telephoneEleve' => $request->telephoneEleve,
                'adresseEleve' => $request->adresseEleve,
                'idClasse' => $request->classeEleve,
            ]
        );

        return redirect(route('vue_superadmin_alleleve',));
    }












    //                                                                                   PROFESSEUR

    // Afficher tous les professeurs
    public function allprof()
    {
        $prof = Professeur::all();

        return view('Superadmin.Professeur.allprof', compact('prof'));
    }
    // Afficher tous les professeurs
    public function addprofaff()
    {
        $prof = Professeur::all();

        return view('Superadmin.Professeur.addprof', compact('prof'));
    }

    // Ajouter un professeur
    public function addprof(Request $request)
    {

        $prof = Professeur::All();

        //dd('Ajouter une Professeur');

        $this->validate(
            $request,
            [
                'nomProfesseur' => 'required|min:3',
                'prenomProfesseur' => 'required|min:3',
                'login' => 'required|min:3',
                'dateNaissProfesseur' => 'required',
                'sexeProfesseur' => 'required',
                'emailProfesseur' => 'required',
                'passwordProfesseur' => 'required|min:8',
                'telephoneProfesseur' => 'required|min:8|max:8',
                'adresseProfesseur' => 'required|min:3',

            ]
        );

        //dd('store');
        Professeur::create([
            // 'nomMatiere' => $request->nomMatiere,
            'nomProfesseur' => $request->nomProfesseur,
            'prenomProfesseur' => $request->prenomProfesseur,
            'login' => $request->login,
            'dateNaissProfesseur' => $request->dateNaissProfesseur,
            'sexeProfesseur' => $request->sexeProfesseur,
            'emailProfesseur' => $request->emailProfesseur,
            'passwordProfesseur' => Hash::make($request->passwordProfesseur),
            'telephoneProfesseur' => $request->telephoneProfesseur,
            'adresseProfesseur' => $request->adresseProfesseur,
        ]);

        return redirect(route('vue_superadmin_allprof'));
    }

    // Afficher le detail d'une matiere
    public function detailprof($idProfesseur)
    {
        // dd('Affichage des détails sur les Professeur');
        $profdetail = Professeur::findOrFail($idProfesseur);
        $prof = Professeur::all();

        return view('Superadmin.Professeur.detailprof', compact('profdetail', 'prof'));
    }


    // editer tous les Professeur
    public function updateprofaff($idProfesseur)
    {
        $prof = Professeur::all();
        $profedit = Professeur::findOrFail($idProfesseur);

        return view('Superadmin.Professeur.updateprof', compact('profedit', 'prof'));
    }

    // Afficher tous les Professeur
    public function updateprof(Request $request, $id)
    {

        //dd('update');

        $this->validate(
            $request,
            [
                'nomProfesseur' => 'required|min:3',
                'prenomProfesseur' => 'required|min:3',
                'login' => 'required|min:3',
                'dateNaissProfesseur' => 'required',
                'sexeProfesseur' => 'required',
                'emailProfesseur' => 'required',
                'telephoneProfesseur' => 'required|min:8|max:8',
                'adresseProfesseur' => 'required|min:3',
            ]
        );

        // 
        // dd('update');

        Professeur::where('idProfesseur', $id)->update(
            [
                'nomProfesseur' => $request->nomProfesseur,
                'prenomProfesseur' => $request->prenomProfesseur,
                'login' => $request->login,
                'dateNaissProfesseur' => $request->dateNaissProfesseur,
                'sexeProfesseur' => $request->sexeProfesseur,
                'emailProfesseur' => $request->emailProfesseur,
                'telephoneProfesseur' => $request->telephoneProfesseur,
                'adresseProfesseur' => $request->adresseProfesseur,
            ]
        );

        return redirect(route('vue_superadmin_allprof',));
    }













    //                                                                                  PARENTS

    // Afficher tous les parents
    public function allparent()
    {
        $parent = Relative::all();

        return view('Superadmin.Parent.allparent', compact('parent'));
    }
    // Afficher tous les professeurs
    public function addparentaff()
    {
        $parent = Relative::all();
        $eleve = Eleve::all();
        $classe = Classe::all();

        return view('Superadmin.Parent.addparent', compact('parent', 'eleve', 'classe'));
    }

    // Ajouter un professeur
    public function addparent(Request $request)
    {

        $parent = Relative::All();
        $eleve = Eleve::all();


        //dd('Ajouter un parent');

        $this->validate(
            $request,
            [
                'nomRelative' => 'required|min:3',
                'prenomRelative' => 'required|min:3',
                'login' => 'required|min:3',
                'dateNaissRelative' => 'required',
                'sexeRelative' => 'required',
                'emailRelative' => 'required',
                'passwordRelative' => 'required|min:8',
                'telephoneRelative' => 'required|min:8|max:8',
                'adresseRelative' => 'required|min:3',
                'EleveParent' => 'required',
            ]
        );

        //dd('store');
        Relative::create([
            // 'nomMatiere' => $request->nomMatiere,
            'nomRelative' => $request->nomRelative,
            'prenomRelative' => $request->prenomRelative,
            'login' => $request->login,
            'dateNaissRelative' => $request->dateNaissRelative,
            'sexeRelative' => $request->sexeRelative,
            'emailRelative' => $request->emailRelative,
            'passwordRelative' => Hash::make($request->passwordRelative),
            'telephoneRelative' => $request->telephoneRelative,
            'adresseRelative' => $request->adresseRelative,
        ]);

        return redirect(route('vue_superadmin_allparent'));
    }

    // Afficher le detail d'une matiere
    public function detailparent($idRelative)
    {
        // dd('Affichage des détails sur les Professeur');
        $parentdetail = Relative::findOrFail($idRelative);
        $parent = Relative::all();

        return view('Superadmin.Parent.detailparent', compact('parentdetail', 'parent'));
    }


    // editer tous les Professeur
    public function updateparentaff($idRelative)
    {
        $parent = Relative::all();
        $parentedit = Relative::findOrFail($idRelative);

        return view('Superadmin.Parent.updateparent', compact('parentedit', 'parent'));
    }

    // Afficher tous les Professeur
    public function updateparent(Request $request, $id)
    {

        //dd('update');

        $this->validate(
            $request,
            [
                'nomRelative' => 'required|min:3',
                'prenomRelative' => 'required|min:3',
                'login' => 'required|min:3',
                'dateNaissRelative' => 'required',
                'sexeRelative' => 'required',
                'emailRelative' => 'required',
                'telephoneRelative' => 'required|min:8|max:8',
                'adresseRelative' => 'required|min:3',
            ]
        );

        // 
        // dd('update');

        Relative::where('idRelative', $id)->update(
            [
                'nomRelative' => $request->nomRelative,
                'prenomRelative' => $request->prenomRelative,
                'login' => $request->login,
                'dateNaissRelative' => $request->dateNaissRelative,
                'sexeRelative' => $request->sexeRelative,
                'emailRelative' => $request->emailRelative,
                'telephoneRelative' => $request->telephoneRelative,
                'adresseRelative' => $request->adresseRelative,
            ]
        );

        return redirect(route('vue_superadmin_allparent',));
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
