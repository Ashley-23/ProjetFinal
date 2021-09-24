<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiteAffController;
use App\Http\Controllers\AdminAffController;
use App\Http\Controllers\connexionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeconnexionControler;

use App\Http\Controllers\SuperAdminAffController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route d'authentification pour tous(qui amène chacun à sa page d'accueil ) 

Route::group(['middleware' => ['auth']], function () {
    // 


    Route::get('/dashboard', 'DashboardController@index')
        ->name('dashboard');

    // dd('je suis là');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';




Route::get('/ashleylogin', function () {
    return view('login');
})->name('ashleylogin');

Route::get('/ashleyregister', function () {
    return view('register');
})->name('ashleyregister');

Route::get('/connexion1', function () {
    return view('connexion');
})->name('connexion');

Route::get('/inscription', function () {
    return view('inscription');
})->name('inscriptioncompte');



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('admin/students/allstudent');
// });


//                                                   Routes pour afficher le site vitrine


//          Accueil
// Route::get('/', function () {
//     return view('superadministrateur/accueil');
// });


Route::get('/siteaccueil', 'SiteAffController@accueil')->name('vue_siteaccueil');

//          Connexion

Route::get('/connexion', 'SiteAffController@connexion')->name('vue_Siteconnexion');

//          Inscription

Route::get('/inscription', 'SiteAffController@inscription')->name('vue_siteinscription');


// pour la déconnexion
Route::get('/deconnexion', 'DeconnexionControler@deconnexion')->name('vue_deconnexion');



//                                                  ROUTES POUR LES SUPERADMINISTRATEURS 

// Route::get('/ash', 'connexionController@accueiladmin')->middleware(['auth']);
// Appel du controller 
Route::resource('superAdminAff', SuperAdminAffController::class);

// Pour afficher l'accueil 


Route::get('/superadmin_accueil', 'SuperAdminAffController@accueil')->name('vue_superadmin_accueil');
//                                                                  ETABLISSEMENT
// Pour afficher la liste des etablissements 
Route::get('/superadmin_alletablissement', 'SuperAdminAffController@alletablissement')->name('vue_superadmin_alletablissement');
// Pour afficher la vue d'ajout d'un etablissement 
Route::get('/superadmin_addetablissementaff', 'SuperAdminAffController@addetablissementaff')->name('vue_superadmin_addetablissementaff');
// Pour ajouter un etablissement
Route::post('/superadmin_addetablissement', 'SuperAdminAffController@addetablissement')->name('vue_superadmin_addetablissement');
// Pour afficher le detail sur un etablissement en particulier  
Route::get('/superadmin_detailetablissement/{id}', 'SuperAdminAffController@detailetablissement')->name('vue_superadmin_detailetablissement');
// Pour afficher l'interface de mise à jour d'un etablissement 
Route::get('/superadmin_updateetablissementaff/{id}', 'SuperAdminAffController@updateetablissementaff')->name('vue_superadmin_updateetablissementaff');
// Pour mettre à jour les données d'un etablissement
Route::post('/superadmin_updateetablissement/{id}', 'SuperAdminAffController@updateetablissement')->name('vue_superadmin_updateetablissement');

//                                                                  CLASSE


// Pour afficher la liste des etablissements 
Route::get('/superadmin_allclasse', 'SuperAdminAffController@allclasse')->name('vue_superadmin_allclasse');
// Pour afficher la vue d'ajout d'un etablissement 
Route::get('/superadmin_addclasseaff', 'SuperAdminAffController@addclasseaff')->name('vue_superadmin_addclasseaff');
// Pour ajouter un etablissement
Route::post('/superadmin_addclasse', 'SuperAdminAffController@addclasse')->name('vue_superadmin_addclasse');
// Pour afficher le detail sur un etablissement en particulier  
Route::get('/superadmin_detailclasse/{id}', 'SuperAdminAffController@detailclasse')->name('vue_superadmin_detailclasse');
// Pour afficher l'interface de mise à jour d'un etablissement 
Route::get('/superadmin_updateclasseaff/{id}', 'SuperAdminAffController@updateclasseaff')->name('vue_superadmin_updateclasseaff');
// Pour mettre à jour les données d'un etablissement
Route::post('/superadmin_updateclasse/{id}', 'SuperAdminAffController@updateclasse')->name('vue_superadmin_updateclasse');


//                                                                  MATIERE


// Pour afficher la liste des etablissements 
Route::get('/superadmin_allmatiere', 'SuperAdminAffController@allmatiere')->name('vue_superadmin_allmatiere');
// Pour afficher la vue d'ajout d'un etablissement 
Route::get('/superadmin_addmatiereaff', 'SuperAdminAffController@addmatiereaff')->name('vue_superadmin_addmatiereaff');
// Pour ajouter un etablissement
Route::post('/superadmin_addmatiere', 'SuperAdminAffController@addmatiere')->name('vue_superadmin_addmatiere');
// Pour afficher le detail sur un etablissement en particulier  
Route::get('/superadmin_detailmatiere/{id}', 'SuperAdminAffController@detailmatiere')->name('vue_superadmin_detailmatiere');
// Pour afficher l'interface de mise à jour d'un etablissement 
Route::get('/superadmin_updatematiereaff/{id}', 'SuperAdminAffController@updatematiereaff')->name('vue_superadmin_updatematiereaff');
// Pour mettre à jour les données d'un etablissement
Route::post('/superadmin_updatematiere/{id}', 'SuperAdminAffController@updatematiere')->name('vue_superadmin_updatematiere');

//                                                                  CLASSE/MATIERE

//Pour afficher la liste des classes après click sur une matiere 
Route::get('/superadmin_listeclasse/{id}', 'SuperAdminAffController@listeclasse')->name('vue_superadmin_listeclasse');
//Pour afficher la liste des eleves après click sur une classe 
Route::get('/superadmin_listeeleve/{idclasse}/{idmatiere}', 'SuperAdminAffController@listeeleve')->name('vue_superadmin_listeeleve');

//Pour afficher la liste des notes des élèves à éditer 
Route::get('/superadmin_addnoteaff/{idclasse}/{idmatiere}/{ideleve}', 'SuperAdminAffController@addnoteaff')->name('vue_superadmin_addnoteaff');

//Pour editer la note des eleves après click sur un élève 
Route::post('/superadmin_addnote/{ideleve}/{idcm}', 'SuperAdminAffController@addnote')->name('vue_superadmin_addnote');

//Pour afficher l'interface de mise à jour des élèves 
Route::get('/superadmin_updatenoteaff/{idclasse}/{idmatiere}/{ideleve}', 'SuperAdminAffController@updatenoteaff')->name('vue_superadmin_updatenoteaff');

//Pour mettre à jour la note des eleves après click sur un élève 
Route::post('/superadmin_updatenote/{idnote}/{idcm}', 'SuperAdminAffController@updatenote')->name('vue_superadmin_updatenote');

// Pour afficher la liste notes déjà par eleves et par classe
Route::get('/superadmin_allnote/{id}', 'SuperAdminAffController@allnote')->name('vue_superadmin_allnote');
// Pour afficher la liste des etablissements 
Route::get('/superadmin_allcm', 'SuperAdminAffController@allcm')->name('vue_superadmin_allcm');
// Pour afficher la vue d'ajout d'un etablissement 
Route::get('/superadmin_addcmaff', 'SuperAdminAffController@addcmaff')->name('vue_superadmin_addcmaff');
// Pour ajouter un etablissement
Route::post('/superadmin_addcm', 'SuperAdminAffController@addcm')->name('vue_superadmin_addcm');
// Pour afficher le detail sur un etablissement en particulier  
Route::get('/superadmin_detailcm/{id}', 'SuperAdminAffController@detailcm')->name('vue_superadmin_detailcm');
// Pour afficher l'interface de mise à jour d'un etablissement 
Route::get('/superadmin_updatecmaff/{id}', 'SuperAdminAffController@updatecmaff')->name('vue_superadmin_updatecmaff');
// Pour mettre à jour les données d'un etablissement
Route::post('/superadmin_updatecm/{id}', 'SuperAdminAffController@updatecm')->name('vue_superadmin_updatecm');




//                                                                 ELEVE


// Pour afficher la liste des etablissements 
Route::get('/superadmin_alleleve', 'SuperAdminAffController@alleleve')->name('vue_superadmin_alleleve');
// Pour afficher la vue d'ajout d'un etablissement 
Route::get('/superadmin_addeleveaff', 'SuperAdminAffController@addeleveaff')->name('vue_superadmin_addeleveaff');
// Pour ajouter un etablissement
Route::post('/superadmin_addeleve', 'SuperAdminAffController@addeleve')->name('vue_superadmin_addeleve');
// Pour afficher le detail sur un etablissement en particulier  
Route::get('/superadmin_detaileleve/{id}', 'SuperAdminAffController@detaileleve')->name('vue_superadmin_detaileleve');
// Pour afficher l'interface de mise à jour d'un etablissement 
Route::get('/superadmin_updateeleveaff/{id}', 'SuperAdminAffController@updateeleveaff')->name('vue_superadmin_updateeleveaff');
// Pour mettre à jour les données d'un etablissement
Route::post('/superadmin_updateeleve/{id}', 'SuperAdminAffController@updateeleve')->name('vue_superadmin_updateeleve');




//                                                                 PROFESSEURS


// Pour afficher la liste des professeurs 
Route::get('/superadmin_allprof', 'SuperAdminAffController@allprof')->name('vue_superadmin_allprof');
// Pour afficher la vue d'ajout d'un professeur 
Route::get('/superadmin_addprofaff', 'SuperAdminAffController@addprofaff')->name('vue_superadmin_addprofaff');
// Pour ajouter un professeur
Route::post('/superadmin_addprof', 'SuperAdminAffController@addprof')->name('vue_superadmin_addprof');
// Pour afficher le detail sur un professeur en particulier  
Route::get('/superadmin_detailprof/{id}', 'SuperAdminAffController@detailprof')->name('vue_superadmin_detailprof');
// Pour afficher l'interface de mise à jour d'un professeur
Route::get('/superadmin_updateprofaff/{id}', 'SuperAdminAffController@updateprofaff')->name('vue_superadmin_updateprofaff');
// Pour mettre à jour les données d'un professeur
Route::post('/superadmin_updateprof/{id}', 'SuperAdminAffController@updateprof')->name('vue_superadmin_updateprof');





//                                                                 PARENTS


// Pour afficher la liste des parents 
Route::get('/superadmin_allparent', 'SuperAdminAffController@allparent')->name('vue_superadmin_allparent');
// Pour afficher la vue d'ajout d'un parent 
Route::get('/superadmin_addparentaff', 'SuperAdminAffController@addparentaff')->name('vue_superadmin_addparentaff');
// Pour ajouter un parent
Route::post('/superadmin_addparent', 'SuperAdminAffController@addparent')->name('vue_superadmin_addparent');
// Pour afficher le detail sur un parent en particulier  
Route::get('/superadmin_detailparent/{id}', 'SuperAdminAffController@detailparent')->name('vue_superadmin_detailparent');
// Pour afficher l'interface de mise à jour d'un parent
Route::get('/superadmin_updateparentaff/{id}', 'SuperAdminAffController@updateparentaff')->name('vue_superadmin_updateparentaff');
// Pour mettre à jour les données d'un parent
Route::post('/superadmin_updateparent/{id}', 'SuperAdminAffController@updateparent')->name('vue_superadmin_updateparent');
































//                                                                  Routes pour les administrateurs

// Pour afficher la page d'acccueil 

Route::get('/admin_accueil', 'AdminAffController@accueil')->name('vue_admin_accueil');



//  Tous les eleves
Route::get('/admin_AllStudent', 'AdminAffController@allstudent')->name('vue_admin_allstudent');
//Detail sur les eleves 
Route::get('/admin_detailstudent', 'AdminAffController@detailstudent')->name('vue_admin_detailstudent');
// Ajouter eleve
Route::get('/admin_AddStudent', 'AdminAffController@addstudent')->name('vue_admin_addstudent');
// tous les profs
Route::get('/admin_Allteacher', 'AdminAffController@allteacher')->name('vue_admin_allteacher');
// details profs
Route::get('/admin_Detailteacher', 'AdminAffController@detailteacher')->name('vue_admin_detailteacher');
// ajouter prof 
Route::get('/admin_Addteacher', 'AdminAffController@addteacher')->name('vue_admin_addteacher');
// tous les parents
Route::get('/admin_allparent', 'AdminAffController@allparent')->name('vue_admin_allparent');
// details parents
Route::get('/admin_detailparent', 'AdminAffController@detailparent')->name('vue_admin_detailparent');
// ajouter parent
Route::get('/admin_addparent', 'AdminAffController@addparent')->name('vue_admin_addparent');
// frais scolaire
Route::get('/admin_fraisscolaire', 'AdminAffController@fraisscolaire')->name('vue_admin_fraisscolaire');
// depenses 
Route::get('/admin_depense', 'AdminAffController@depense')->name('vue_admin_depense');
// ajouter frais 
Route::get('/admin_addfrais', 'AdminAffController@addfrais')->name('vue_admin_addfrais');
// toutes les classes
Route::get('/admin_allclass', 'AdminAffController@allclass')->name('vue_admin_allclass');
// ajouter classe 
Route::get('/admin_addclass', 'AdminAffController@addclass')->name('vue_admin_addclass');
// examen horaire 
Route::get('/admin_horaire', 'AdminAffController@horaire')->name('vue_admin_horaire');
// examen note 
Route::get('/admin_mark', 'AdminAffController@mark')->name('vue_admin_mark');
// matieres 
Route::get('/admin_subject', 'AdminAffController@subject')->name('vue_admin_subject');
// classe routine 
Route::get('/admin_classroutine', 'AdminAffController@classroutine')->name('vue_admin_classroutine');
// presence 
Route::get('/admin_presence', 'AdminAffController@presence')->name('vue_admin_presence');
// notification 
Route::get('/admin_notice', 'AdminAffController@notice')->name('vue_admin_notice');
// messages 
Route::get('/admin_message', 'AdminAffController@Message')->name('vue_admin_message');
//  compte 
Route::get('/admin_account', 'AdminAffController@account')->name('vue_admin_account');



//                                                                  Routes pour les professeurs






//                                                                  Routes pour les eleves







//                                                                  Routes pour les parents







//                                                                  Routes pour l'etablissement













































































































































































































// //route vers l'accueil du site
// Route::get(
//     '/accueil',
//     function () {
//         return view('siteaccueil');
//     }
// )->name('vue_accueil');
// // //route vers le default du site
// // Route::get(
// //     '/Sitedefault',
// //     function () {
// //         return view('sitedefault');
// //     }
// // )->name('vue_site_default');
// //route vers la connexion
// Route::get(
//     '/connexion',
//     function () {
//         return view('siteconnexion');
//     }
// )->name('vue_connexion');
// //route vers l'inscription
// Route::get(
//     '/inscription',
//     function () {
//         return view('siteinscription');
//     }
// )->name('vue_inscription');

route::get('/index', function () {
    return view('index');
})->name('vue_index');
