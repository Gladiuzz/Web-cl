<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    //
    public function index()
    {
        # code...
        $Portfolio = DB::table('cl_portofolio')
        ->orderBy('cl_portofolio.id_portofolio','asc')
        ->paginate(10);

        $data = array(
            // 'News' => $News,
            // 'Clients' => $Client,
            'Portfolios' => $Portfolio,
        );

        return view('Admin.portfolio', $data);
    }
}
