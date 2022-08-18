<?php

namespace App\Http\Controllers;


use App\Models\Polres;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PdfCon extends Controller
{
    /**
     * generate PDF file from blade view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $person = DB::table('personils')
        // ->where('polres', '=', $id)
        ->get();

        $pdf = PDF::loadView('/layout/pdf',['personil'=>$person]);
        return $pdf->stream();
    }

    public function index2()
    {

        $person = DB::table('personils')
        // ->where('polres', '=', $id)
        ->get();
        return view('/layout/pdf',['personil'=>$person]);
    }

    public function htmlPdf()
    {
        // selecting PDF view
        $pdf = PDF::loadView('/layout/pdf');

        // download pdf file
        return $pdf->download('pdfview.pdf');
    }
}
