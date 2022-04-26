<?php

namespace App\Exports;
use App\Models\Utilisateur;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class EtudiantExport implements  FromView
{

       public function view(): View
       {
           return view('pdfListeEtudiant', [
               'etudiants' => Utilisateur::where('profil', "etudiant")->get()
            ]);
    }
}

