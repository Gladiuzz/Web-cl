<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InternshipController extends Controller
{
    //
    public function index()
    {
        # code...
        $internship = DB::table('cl_internship')
        ->get();

        $data = array(
            'internship' => $internship
        );

        return view('Admin.internship',$data);
    }
}
