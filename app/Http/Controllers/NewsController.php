<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    //
    public function index()
    {
        # code...
        $News = DB::table('cl_news')
        ->orderBy('cl_news.tgl_news','DESC')
        ->paginate(10);

        $data = array(
            'News' => $News,
            // 'Clients' => $Client,
            // 'Portfolios' => $Portfolio,
        );

        return view('Admin.news', $data);
    }

    public function edit_index()
    {
        return view('Admin.create_news');
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'subject' => 'required',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_desc' => 'required',
            'artikel' => 'required',
            'article_short' => 'required',
            'gambar' => 'required',
            'caption' => 'required',
            'permalink' =>'required',
            'bahasa' =>'required'


        ]);
    }
}
