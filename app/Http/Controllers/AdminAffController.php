<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAffController extends Controller
{




    public function accueil()
    {
        // 
        return view('admin.accueil');
    }
    //                                                      ELEVES

    // Pour afficher la page de la liste de tous les élèves 
    public function allstudent()
    {
        // 
        return view('admin.Student.allstudent');
    }
    // Detail sur les eleves 
    public function detailstudent()
    {
        // 
        return view('admin.Student.detailstudent');
    }
    // Ajouter un eleve 
    public function addstudent()
    {
        // 
        return view('admin.Student.add');
    }




    //                                                         Professeurs
    // Pour afficher la liste de tous les professeurs 
    public function allteacher()
    {
        // 
        return view('admin.Teacher.allteacher');
    }
    // Pour afficher les details sur un professeur 
    public function detailteacher()
    {
        // 
        return view('admin.Teacher.detailteacher');
    }
    //   ajouter un professeur
    public function addteacher()
    {
        // 
        return view('admin.Teacher.addteacher');
    }

    //                                                                 Parents
    // Afficher la liste des parents 
    public function allparent()
    {
        // 
        return view('admin.Parent.allparent');
    }
    // Details sur les parents 
    public function detailparent()
    {
        // 
        return view('admin.Parent.detailparent');
    }
    // ajouter un parent 
    public function addparent()
    {
        // 
        return view('admin.Parent.addparent');
    }



    //                                                                    Comptes

    // Pour afficher les frais scolaires 
    public function fraisscolaire()
    {
        // 
        return view('admin.Compte.fraisscolaire');
    }
    // Pour afficher les dépenses 
    public function depense()
    {
        // 
        return view('admin.Compte.depense');
    }
    // Pour ajouter des frais 
    public function addfrais()
    {
        // 
        return view('admin.Compte.addfrais');
    }



    //                                                               CLASSES
    // Toutes les classes 
    public function allclass()
    {
        // 
        return view('admin.classe.allclass');
    }
    // Ajouter une classe 
    public function addclass()
    {
        // 
        return view('admin.classe.addclass');
    }


    //                                                                  Matiere
    public function subject()
    {
        // 
        return view('admin.Subject');
    }
    //                                                                  CLASSE ROUTINE
    public function classroutine()
    {
        // 
        return view('admin.classroutine');
    }
    //                                                                  PRESENCE
    public function presence()
    {
        // 
        return view('admin.presence');
    }
    //                                                                  NOTIFICATION
    public function notice()
    {
        // 
        return view('admin.notice');
    }
    //                                                                  MESSAGES
    public function Message()
    {
        // 
        return view('admin.message');
    }
    //                                                                  COMPTE
    public function account()
    {
        // 

        return view('admin.account');
    }

    //                                                                  EXAMS 

    // pour les horaires 
    public function horaire()
    {
        // 

        return view('admin.Examen.horaire');
    }
    // pour les notes 
    public function mark()
    {
        // 

        return view('admin.Examen.mark');
    }





















    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Admin/Students/allstudent');
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
