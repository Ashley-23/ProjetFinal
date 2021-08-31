<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAffController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DeconnexionControler;



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

Route::get('/', 'AdminAffController@index')->name('all_student');

// Route::get('/', 'AdminController@index')->name('all_student');
// Route::resource('adminAff', AdminController::class);

// pour la déconnexion
Route::get('/deconnexion', 'DeconnexionControler@deconnexion')->name('vue_deconnexion');

//route vers l'accueil du site
Route::get(
    '/accueil',
    function () {
        return view('siteaccueil');
    }
)->name('vue_accueil');
// //route vers le default du site
// Route::get(
//     '/Sitedefault',
//     function () {
//         return view('sitedefault');
//     }
// )->name('vue_site_default');
//route vers la connexion
Route::get(
    '/connexion',
    function () {
        return view('siteconnexion');
    }
)->name('vue_connexion');
//route vers l'inscription
Route::get(
    '/inscription',
    function () {
        return view('siteinscription');
    }
)->name('vue_inscription');

route::get('/index', function () {
    return view('index');
})->name('vue_index');
