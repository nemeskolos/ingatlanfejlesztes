<?php

namespace App\Http\Controllers;

use Advertisement;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;


class AdvertisementController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function insertform()
    {
        return view('index');
    }

    public function create(Request $request)
    {

        $price = $request->input('price');
        $rooms = $request->input('rooms');
        $city = $request->input('city');
        $county = $request->input('county');
        $user_id = $request->user()->id;

        $datas = array('price' => $price, 'rooms' => $rooms, 'city' => $city, 'county' => $county, 'user_id' => $user_id);

        DB::table('advertisement')->insert([$datas]);

        return  view('sucadvmsg');
    }

    public function store(Request $request)
    {
        $asd = request('city');
        dd($request);

        $asd = DB::table('advertisement')->where('city', request('city'));
        return view('ad', ['advertisement' => $asd]);
    }

    public function searchcontent()
    {
        $searchkey = \Request::get('title');
        $posts = DB::table('advertisement')->where('city', 'like', '%' . $searchkey . '%')->paginate(5);
        return view('searchcontent', ['advertisement' => $posts]);
    }


    public function store1(Request $request)
    {

        $asd1 = request('city');
        dd($request);

        $asd1 = DB::table('advertisement')->where('city', request('city'));
        return view('advdel', ['advertisement' => $asd1]);
    }

    public function delete($id)
    {

        DB::table('advertisement')->where('id', $id)->delete();
        
        return view('sucdelmsg');
    }

    public function edit($id)
    {

        $advertisement = Advertisement::find($id);
        return view('edit', compact('$advertisement', 'id'));
    }

    public function update(Request $request)
    { }
}
