<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    //
    public function index()
    {
        # code...
        $Client = DB::table('cl_clients')
        ->orderBy('cl_clients.tgl_submit','DESC')
        ->paginate(10);

        $data = array(
            // 'News' => $News,
            'Clients' => $Client,
            // 'Portfolios' => $Portfolio,
        );

        return view('Admin.client', $data);
    }
}
