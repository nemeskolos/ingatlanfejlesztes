<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


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

    public function search(Request $request)
    {
        $citysearch = $request->get('search');
        $post = DB::table('advertisement')->where ('city', 'like' , '%'.$citysearch.'%'); 
        return view('ad', ['post'=> $post]);
    }
}
