<?php

namespace App\Exports;
use App\Models\Formation;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class FormationExport implements  FromView
{

       public function view(): View
       {
           return view('pdfListeFormation', [
               'formations' => Formation::all()
            ]);
    }
}
