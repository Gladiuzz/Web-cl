<?php

namespace App\Http\Controllers;

use App\Model\News ;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index()
    {
        // $News = DB::table('cl_news')
        // ->orderBy('cl_news.tgl_news','DESC')
        // ->paginate(10);

        // $Client = DB::table('cl_clients')
        // ->orderBy('cl_clients.tgl_submit','DESC')
        // ->paginate(10);





        return view('Admin.home');
    }

}
