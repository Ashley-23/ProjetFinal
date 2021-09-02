<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiteAffController;
use App\Http\Controllers\AdminAffController;
use App\Http\Controllers\DeconnexionControler;
use App\Http\Controllers\SuperAdminAffController;
use App\Http\Controllers\connexionController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

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

Route::get('/ash', 'connexionController@accueiladmin')->middleware(['auth']);

// Pour afficher la page d'accueil 
Route::get('/superadmin_accueil', 'SuperAdminAffController@accueil')->name('vue_superadmin_accueil');
// Pour afficher le lock-screen 
Route::get('/superadmin_lock-screen', 'SuperAdminAffController@lockscreen')->name('vue_superadmin_lockscreen');
//                                ETABLISSEMENTS
// Pour afficher tous les etablissements 
Route::get('/superadmin_alletablissement', 'SuperAdminAffController@alletablissement')->name('vue_superadmin_alletablissement');
// Pour avoir des détails sur les etablissements 
Route::get('/superadmin_detailetablissement', 'SuperAdminAffController@detailetablissement')->name('vue_superadmin_detailetablissement');
// Pour ajouter un etablissement
Route::get('/superadmin_addetablissement', 'SuperAdminAffController@addetablissement')->name('vue_superadmin_addetablissement');
//                               ADMINISTRATEURS
// Pour afficher tous les administrateurs 
Route::get('/superadmin_alladmin', 'SuperAdminAffController@alladmin')->name('vue_superadmin_alladmin');
// Pour avoir des détails sur les administrateurs 
Route::get('/superadmin_detailadmin', 'SuperAdminAffController@detailadmin')->name('vue_superadmin_detailadmin');
// Pour ajouter un administrateur 
Route::get('/superadmin_addadmin', 'SuperAdminAffController@addadmin')->name('vue_superadmin_addadmin');
//                               NOTIFICATIONS
Route::get('/superadmin_notice', 'SuperAdminAffController@notice')->name('vue_superadmin_notice');
//                               MESSAGES
Route::get('/superadmin_message', 'SuperAdminAffController@message')->name('vue_superadmin_message');





//                                                                  Routes pour les administrateurs

// Pour afficher la page d'acccueil 

Route::get('/adminaccueil', 'AdminAffController@accueil')->name('vue_admin_accueil');



//  Tous les eleves
Route::get('/AllStudent', 'AdminAffController@allstudent')->name('vue_admin_allstudent');
//Detail sur les eleves 
Route::get('/detailstudent', 'AdminAffController@detailstudent')->name('vue_admin_detailstudent');
// Ajouter eleve
Route::get('/AddStudent', 'AdminAffController@addstudent')->name('vue_admin_addstudent');
// tous les profs
Route::get('/Allteacher', 'AdminAffController@allteacher')->name('vue_admin_allteacher');
// details profs
Route::get('/Detailteacher', 'AdminAffController@detailteacher')->name('vue_admin_detailteacher');
// ajouter prof 
Route::get('/Addteacher', 'AdminAffController@addteacher')->name('vue_admin_addteacher');
// tous les parents
Route::get('/allparent', 'AdminAffController@allparent')->name('vue_admin_allparent');
// details parents
Route::get('/detailparent', 'AdminAffController@detailparent')->name('vue_admin_detailparent');
// ajouter parent
Route::get('/addparent', 'AdminAffController@addparent')->name('vue_admin_addparent');
// frais scolaire
Route::get('/fraisscolaire', 'AdminAffController@fraisscolaire')->name('vue_admin_fraisscolaire');
// depenses 
Route::get('/depense', 'AdminAffController@depense')->name('vue_admin_depense');
// ajouter frais 
Route::get('/addfrais', 'AdminAffController@addfrais')->name('vue_admin_addfrais');
// toutes les classes
Route::get('/allclass', 'AdminAffController@allclass')->name('vue_admin_allclass');
// ajouter classe 
Route::get('/addclass', 'AdminAffController@addclass')->name('vue_admin_addclass');
// examen horaire 
Route::get('/horaire', 'AdminAffController@horaire')->name('vue_admin_horaire');
// examen note 
Route::get('/mark', 'AdminAffController@mark')->name('vue_admin_mark');
// matieres 
Route::get('/subject', 'AdminAffController@subject')->name('vue_admin_subject');
// classe routine 
Route::get('/classroutine', 'AdminAffController@classroutine')->name('vue_admin_classroutine');
// presence 
Route::get('/presence', 'AdminAffController@presence')->name('vue_admin_presence');
// notification 
Route::get('/notice', 'AdminAffController@notice')->name('vue_admin_notice');
// messages 
Route::get('/message', 'AdminAffController@Message')->name('vue_admin_message');
//  compte 
Route::get('/account', 'AdminAffController@account')->name('vue_admin_account');



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
