<?php

namespace App\Http\Controllers;

use App\Models\Produks;
use App\Models\Categorys;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function home()
    {
        $produks = Produks::all();
        $categorys = Categorys::all();

        return view(
            'welcome',
            [
                'produks' => $produks,
                'categorys' => $categorys
            ]
        );
    }

    function detail($slug = true)
    {
        $produks = Produks::where('slug', $slug)->first();

        return view('detail-produk', ['produks' => $produks]);
    }

    function login()
    {
        
    }
}
