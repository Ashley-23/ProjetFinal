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
use App\Http\Controllers\SuperAdministrateurAffichageController;

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






//                                                                 Routes pour les superadministrateurs

// Route::get('/ash', 'connexionController@accueiladmin')->middleware(['auth']);
Route::resource('superadminaff', superAdminAffController::class);
// Pour afficher la page d'accueil 
Route::get('/superadmin_accueil', 'SuperAdminAffController@accueil')->name('vue_superadmin_accueil');
// Pour afficher le lock-screen 
Route::get('/superadmin_lock-screen', 'SuperAdminAffController@lockscreen')->name('vue_superadmin_lockscreen');
//                                ETABLISSEMENTS
// Pour afficher tous les etablissements 
Route::get('/superadmin_alletablissement', 'SuperAdminAffController@alletablissement')->name('vue_superadmin_alletablissement');
// Pour avoir des détails sur les etablissements 
Route::get('/superadmin_detailetablissement/{id}', 'SuperAdminAffController@detailetablissement')->name('vue_superadmin_detailetablissement');

// Pour afficher la vue de modification d'un etablissement
Route::get('/superadmin_editetablissement/{id}', 'SuperAdminAffController@editetablissement')->name('vue_superadmin_editetablissement');

// Pour modifier un etablissement

Route::get('/superadmin_updateetablissement/{id}', 'SuperAdminAffController@editetablissement')->name('vue_superadmin_updateetablissement');

// Pour ajouter un etablissement 
Route::post('/superadmin_addetablissement', 'SuperAdminAffController@addetablissement')->name('vue_superadmin_addetablissement');


// Pour ajouter un etablissement juste l'affichage de la page 
Route::get('/superadmin_addetablissementaff', 'SuperAdminAffController@addetablissementaff')->name('vue_superadmin_addetablissementaff');
//                               ADMINISTRATEURS
// Pour afficher tous les administrateurs 
Route::get('/superadmin_alladmin', 'SuperAdminAffController@alladmin')->name('vue_superadmin_alladmin');
// Pour avoir des détails sur les administrateurs 
Route::get('/superadmin_detailadmin', 'SuperAdminAffController@detailadmin')->name('vue_superadmin_detailadmin');
// Pour ajouter un administrateur 
Route::get('/superadmin_addadmin', 'SuperAdminAffController@addadmin')->name('vue_superadmin_addadmin');
//                               NOTIFICATIONS
Route::get('/superadmin_notice', 'SuperAdminAffController@notice')->name('vue_superadmin_notice');
//                              AFFICHER INSCRIPTION
Route::get('/superadmin_inscription', 'SuperAdminAffController@inscription')->name('vue_superadmin_inscription');
//                              AJOUTER INSCRIPTION
Route::post('/superadmin_addinscription', 'SuperAdminAffController@addinscription')->name('vue_superadmin_addinscription');
//                              AJOUTER CLASSE
Route::post('/superadmin_addclasse', 'SuperAdminAffController@addclasse')->name('vue_superadmin_addclasse');
//                              AJOUTER MATIERE 
Route::post('/superadmin_addmatiere', 'SuperAdminAffController@addmatiere')->name('vue_superadmin_addmatiere');

// Pour afficher tous les eleves 
Route::get('/superadmin_alleleve', 'SuperAdminAffController@alleleve')->name('vue_superadmin_alleleve');

// Pour afficher tous les matieres 
Route::get('/superadmin_allmatiere', 'SuperAdminAffController@allmatiere')->name('vue_superadmin_allmatiere');

// Pour afficher tous les classes 
Route::get('/superadmin_allclasse', 'SuperAdminAffController@allclasse')->name('vue_superadmin_allclasse');






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







//                                                  SUPERADMINISTRATEURCONTROLLER

Route::resources('SuperadministrateurAffichage', SuperAdministrateurAffichageController::class);

Route::get('/accueil','suparad')












































































































































































































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
