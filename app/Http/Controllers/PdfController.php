<?php

namespace App\Http\Controllers;

use App\Models\Kajian;
use Barryvdh\DomPDF\Facade\Pdf; // Add this import statement

class PdfController extends Controller
{
    public function generatePdf()
    {
        $kajians = Kajian::all();
        $data = [
            'judul' => 'ini kajian odf',
            'kajians' => $kajians,

        ];
        $pdf = Pdf::loadView('kajian.main.generate-kajian-pdf', $data);

        return $pdf->download('kajian.pdf');
    }
}
