<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Barryvdh\DomPDF\PDF;
use PDF;

class PDFController extends Controller
{
    public function generatePDF($in_data)
    {
        dd($in_data);
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];
          
        $pdf = PDF::loadView('myPDF', $data);
    
        return $pdf->download('itsolutionstuff.pdf');
    }
}
