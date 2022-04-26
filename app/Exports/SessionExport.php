<?php

namespace App\Exports;
use App\Models\session;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SessionExport implements  FromView
{

       public function view(): View
       {
           return view('pdfSession', [
               'sessions' => session::all()
            ]);
    }
}

