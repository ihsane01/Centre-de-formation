<?php

namespace App\Http\Controllers;

use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AdministrateurExport;
use App\Exports\FormateurExport;
use App\Exports\EtudiantExport;
use App\Exports\FormationExport;
use App\Exports\SessionExport;
use Illuminate\Http\Request;
use App\Models\Utilisateur;
use App\Models\Formation;
use App\Models\session;
use App\Models\Administrateur;

class generatePDF extends Controller
{
    //
    public function ListeFormateur()
    {
        $formateurs = Utilisateur::where('profil', "formateur")->get();

        view()->share('formateurs', $formateurs);
        $pdf = PDF::loadview('pdfListeFormateur');

        return $pdf->download('ListeFormateur.pdf');
    }

    public function ListeFormation()
    {
        $formation = Formation::all();
        view()->share('formations', $formation);
        $pdf = PDF::loadview('pdfListeFormation');

        return $pdf->download('ListeFormation.pdf');
    }

    public function pdfListeAdministrateur()
    {
        $employes = Administrateur::all();
        view()->share('employes', $employes);
        $pdf = PDF::loadview('pdfListeFAdministrateur');

        return $pdf->download('ListeAdministrateur.pdf');
    }
    public function ListeEtudiant()
    {
        $etudiants = Utilisateur::where('profil', "etudiant")->get();

        view()->share('etudiants', $etudiants);
        $pdf = PDF::loadview('pdfListeEtudiant');
        
        return $pdf->download('ListeEtudiants.pdf');
    }

    public function pdfSession()
    {
        $sessions = session::all();
        view()->share('sessions', $sessions);
        $pdf = PDF::loadview('pdfSession');

        return $pdf->download('ListeSessions.pdf');
    }

    function excelListeAdministrateur(){
        return Excel::download(new AdministrateurExport, 'Administrateurs.xlsx');
    }
    function excelListeFormateur(){
        return Excel::download(new FormateurExport, 'Formateurs.xlsx');
        }
    function excelListeEtudiant(){
            return Excel::download(new EtudiantExport, 'Etudiants.xlsx');
        }
    function excelListeSession(){
        return Excel::download(new SessionExport, 'Sessions.xlsx');
    }
    function excelListeFormation(){
        return Excel::download(new FormationExport, 'Formations.xlsx');
    }
}
