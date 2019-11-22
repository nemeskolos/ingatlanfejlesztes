<?php

namespace App\Http\Controllers;

use Advertisement;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;
use File;


class AdvertisementController extends Controller
{
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asd= request('city');
        dd($request);

        $asd = DB::table('advertisement')->where('city', request('city'));
        return view('ad', ['advertisement' => $asd]);
    }

    public function searchcontent()
    {
        $searchkey = \Request::get('title');
        $posts = DB::table('advertisement')->where('city', 'like', '%' .$searchkey. '%')->paginate(5);
        return view('searchcontent', ['advertisement'=> $posts]);
    }
}
