<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class PdfCon extends Controller
{
    /**
     * generate PDF file from blade view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pdf = PDF::loadView('/layout/pdf');
        return $pdf->stream();
    }

    public function index2()
    {
        return view('/layout/pdf');
    }

    public function htmlPdf()
    {
        // selecting PDF view
        $pdf = PDF::loadView('/layout/pdf');

        // download pdf file
        return $pdf->download('pdfview.pdf');
    }
}
