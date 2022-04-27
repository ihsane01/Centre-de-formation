<?php

use App\Http\Controllers\generatePDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\UtilisateurController;
use App\Models\Formation;
use App\Models\Role;
use App\Models\session;
use App\Models\Utilisateur;

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

Route::get('/registerf', function () {
    return view('Admin.registerformateur');})->name('registerf');


// Route::get('/registerf', function () {
//     return view('Admin.registerformateur');
// })->name('registerf');




Route::get('/registerformateur', [App\Http\Controllers\UtilisateurController::class, 'createf'])->name('registerforma');







Route::get('/registerformateur', [App\Http\Controllers\UtilisateurController::class, 'createf'])->name('registerforma');


Auth::routes();


Route::middleware(['auth', 'role:formateur'])->group(function () {
    Route::get('/homeformateur', [App\Http\Controllers\UtilisateurController::class, 'index'])->name('homeformateur');
    Route::get('ajouterC', [UtilisateurController::class, 'ajouterC'])->name('ajouterC');
    Route::post('uploadFile', [UtilisateurController::class, 'storeC'])->name('uploadFile');
    Route::get('getCours', [UtilisateurController::class, 'showC'])->name('getCours');
    Route::get('telecharger/{file}', [UtilisateurController::class, 'telechargerC'])->name('telecharger');
    Route::get('etudiants', [UtilisateurController::class, 'getEtudiant'])->name('etudiants');
 
});


Route::middleware(['auth', 'role:etudiant'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});





Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/home', [App\Http\Controllers\AdministrateurController::class, 'index'])->name('home');
    Route::get('/listeformations', [App\Http\Controllers\AdministrateurController::class, 'listeformation'])->name('listeformation');
    Route::get('/Addfrmt', [App\Http\Controllers\AdministrateurController::class, 'addfo'])->name('addfo');
    Route::post('/AddFormation', [App\Http\Controllers\AdministrateurController::class, 'addformation'])->name('addformation');
    Route::post('/updateFormation/{id}', [App\Http\Controllers\AdministrateurController::class, 'updateFormation'])->name('updateFormation');
    Route::get('/editFormation/{id}', [App\Http\Controllers\AdministrateurController::class, 'editFormation'])->name('editFormation');
    Route::get('/deleteFormation', [App\Http\Controllers\AdministrateurController::class, 'deleteformation'])->name('deleteformation');
    Route::get('/Listeformation', [generatePDF::class, 'ListeFormation'])->name('pdfListeFormation');
    Route::get('/ListeFormationExcel', [generatePDF::class, 'excelListeFormation'])->name('ListeFormationExcel');


    Route::get('/gestionFormateurs', [App\Http\Controllers\AdministrateurController::class, 'listeformateur'])->name('listeformateur');
    Route::get('/Addfrm', [App\Http\Controllers\AdministrateurController::class, 'addf'])->name('addf');
    Route::get('/AddFormateur', [App\Http\Controllers\AdministrateurController::class, 'addformateur'])->name('addformateur');
    Route::get('/updateFormateur/{id}', [App\Http\Controllers\AdministrateurController::class, 'updateFormateur'])->name('updateformateur');
    Route::get('/editFormateur/{id}', [App\Http\Controllers\AdministrateurController::class, 'editFormateur'])->name('editFormateur');
    Route::get('/deleteFormateur', [App\Http\Controllers\AdministrateurController::class, 'deleteformateur'])->name('deleteformateur');
    Route::get('/Liste2', [generatePDF::class, 'ListeFormateur'])->name('pdfListeFormateur2');
    Route::get('/ListeFormateurExcel', [generatePDF::class, 'excelListeFormateur'])->name('ListeFormateurExcel');


    Route::get('/Adminhome', [App\Http\Controllers\AdministrateurController::class, 'index'])->name('Adminhome');
    Route::get('/gestionPersonnels', [App\Http\Controllers\AdministrateurController::class, 'gestionpersonnels'])->name('gestionpersonnels');
    Route::get('/gestionAdministration', [App\Http\Controllers\AdministrateurController::class, 'listeAdministrateur'])->name('liste');
    Route::get('/addadministrateur', [App\Http\Controllers\AdministrateurController::class, 'add'])->name('add');
    Route::get('/gestionAdmini', [App\Http\Controllers\AdministrateurController::class, 'addAdministrateur'])->name('addadmini');
    Route::get('/editAdministrateur/{id}', [App\Http\Controllers\AdministrateurController::class, 'editeAdministrateur'])->name('editAdministrateur');
    Route::get('/updateadmini/{id}', [App\Http\Controllers\AdministrateurController::class, 'updateAdministrateur'])->name('updateadmini');
    Route::get('/Listeadmin', [generatePDF::class, 'pdfListeAdministrateur'])->name('pdfListeAdministrateur');
    Route::get('/Listeadminexcel', [generatePDF::class, 'excelListeAdministrateur'])->name('excelListeAdministrateur');
    Route::get('/deleteAdministrateur', [App\Http\Controllers\AdministrateurController::class, 'deleteAdministrateur']);
});
// Route::get('/home', [App\Http\Controllers\AdministrateurController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\AdministrateurController::class, 'index'])->name('home');
Route::middleware(['auth', 'role:secretaire'])->group(function () {
    Route::get('/homeSecretaire', [AdministrateurController::class, 'first'])->name('homeSecretaire');
    Route::get('/ListeFormateurs', [AdministrateurController::class, 'listeFormateurSec'])->name('listeFormateur');
    Route::get('/Liste', [generatePDF::class, 'ListeFormateur'])->name('pdfListeFormateur');
    Route::get('/ListeFormateurExcel', [generatePDF::class, 'excelListeFormateur'])->name('ListeFormateurExcel');

    Route::get('/gestionEtudiant', [AdministrateurController::class, 'gestionEtudiant'])->name('gestionEtudiant');
    Route::delete('/deleteEtudiant/{id}', [AdministrateurController::class, 'deleteEtudiant'])->name('deleteEtudiant');
    Route::get('/modifierEtudiant/{id}', [AdministrateurController::class, 'modifierEtudiant'])->name("modifierEtudiant");
    Route::put('/updateEtudiant/{id}', [AdministrateurController::class, 'updateEtudiant'])->name("updateEtudiant");
    Route::get('/ListeEtudiant', [generatePDF::class, 'ListeEtudiant'])->name('pdfListeEtudiant');
    Route::get('/ListeEtudiantExcel', [generatePDF::class, 'excelListeEtudiant'])->name('ListeEtudiantExcel');

    Route::get('/gestionSession', [AdministrateurController::class, 'gestionSession'])->name('gestionSession');
    Route::get('/ajouterSession', [AdministrateurController::class, 'ajouterSession'])->name('ajouterSession');
    Route::post('/createSession', [AdministrateurController::class, 'createSession'])->name('createSession');
    Route::delete('/deleteSession/{id}', [AdministrateurController::class, 'deleteSession'])->name('deleteSession');
    Route::get('/editSession/{id}', [AdministrateurController::class, 'editSession'])->name('editSession');
    Route::put('/updateSession/{id}', [AdministrateurController::class, 'updateSession'])->name('updateSession');
    Route::get('/ListeSession', [generatePDF::class, 'pdfSession'])->name('pdfSession');
    Route::get('/ListeSessionExcel', [generatePDF::class, 'excelListeSession'])->name('ListeSessionExcel');
});




Route::get('/classe', function () {
    $session = session::find(10);
    echo $session->sallee->name . "<br>";
    $formateur = Utilisateur::find(2);
    foreach ($formateur->session as $session) {
        echo $session->id . "<br>";
    }
    $formation = Formation::find(2);
    foreach ($formation->session as $session) {
        echo $session->id . "<br>";
    }
});
// Route::get('/listeformations', [App\Http\Controllers\AdministrateurController::class, 'listeformation'])->name('listeformation');

Route::get('/user/formations', [UtilisateurController::class, 'getAllFormations'])->name('user_listeformations');
Route::get('/user/formation/{formation}', [UtilisateurController::class, 'getFormation'])->name('user_formation');
Route::get('user/inscription/{session}', [UtilisateurController::class, 'inscriptionEtudiant'])->name('user_inscription');
Route::get('user/addEtudiant', [UtilisateurController::class, 'addEtudiant'])->name('add_user');
Route::get('/user/Formations', [UtilisateurController::class, 'listeFormation'])->name('listeC');
Route::get('/user/coursdeFormation/{formation}', [UtilisateurController::class, 'CoursDeFormation'])->name('CoursDeFormation');
Route::get('/user/downloadCours/{file}', [UtilisateurController::class, 'telechargerC'])->name('downloadCours');


Route::get('/test', [UtilisateurController::class, 'getAllFormations']);
