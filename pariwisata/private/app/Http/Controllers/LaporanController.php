<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Export\WisataExport;
use \App\Export\DataExport;
use PDF;
use Excel;

class LaporanController extends Controller
{
    public function wisatapdf(){
        $pdf = PDF::loadView('admin.wisata.laporan');
        return $pdf->download('wisata.pdf');
    }

    // public function eventexcel(){
    //     return Excel::download(new EventExport, 'namanya.xlsx');
    //   }
    public function wisataexcel(){
    return Excel::download(new DataExport('\App\Wisata'), 'namanya.xlsx');
    }

}

