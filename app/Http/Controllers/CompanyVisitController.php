<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyVisitController extends Controller
{
    //
    public function index()
    {
        # code...
        $company_visit = DB::table('cl_company_visit')
        ->orderBy('cl_company_visit.tgl_news','DESC')
        ->paginate(10);

        $data = array(
            'company_visit' => $company_visit
        );

        return view('Admin.company_visit', $data);
    }
}
