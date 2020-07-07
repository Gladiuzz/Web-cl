<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsletterController extends Controller
{
    //
    public function index()
    {
        $newsletter = DB::table('cl_newsletter')
        ->orderBy('cl_newsletter.tgl_submit','DESC')
        ->paginate(10);

        $data = array(
            'newsletter' => $newsletter
        );

        return view('Admin.newsletter', $data);
    }
}
