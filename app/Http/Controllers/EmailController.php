<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmailController extends Controller
{
    //
    public function index()
    {
        $Email = DB::table('cl_email')
        ->get();

        $data = array(
            'Email' => $Email
        );

        return view('Admin.email', $data);
    }
}
