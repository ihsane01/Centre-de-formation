<?php

namespace App\Exports;
use App\Models\Administrateur;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AdministrateurExport implements  FromView
{

       public function view(): View
       {
           return view('pdfListeFAdministrateur', [
               'employes' => Administrateur::all()
            ]);
    }
}

