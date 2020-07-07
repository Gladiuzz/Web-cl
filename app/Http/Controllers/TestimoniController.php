<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimoniController extends Controller
{
    //
    public function index()
    {
        # code...
        $Testimoni = DB::table('cl_testimoni')
        ->paginate(10);

        $data = array(
            // 'News' => $News,
            // 'Clients' => $Client,
            'Testimoni' => $Testimoni
        );

        return view('Admin.testimoni', $data);
    }
}
