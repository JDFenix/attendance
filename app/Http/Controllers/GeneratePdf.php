<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class GeneratePdf extends Controller
{
    public function generatePdf()
{
    $data = "";

    $pdf = PDF::loadView('pdf.pdf', compact('data'));

    return $pdf->download('Asistencia.pdf');
}
}




