<?php

namespace App\Exports;
use App\Models\Utilisateur;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class FormateurExport implements  FromView
{

       public function view(): View
       {
           return view('pdfListeFormateur', [
               'formateurs' => Utilisateur::where('profil', "formateur")->get()
            ]);
    }
}

