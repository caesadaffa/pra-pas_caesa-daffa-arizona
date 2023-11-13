<?php

namespace App\Http\Controllers;

use App\Models\buah;
use Illuminate\Http\Request;

class buahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pages.buah.all", [
            "title"=>"buah",
            "buahs"=>buah::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($buah)
    {
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\buah  $buah
     * @return \Illuminate\Http\Response
     */
    public function show($buah)
    {
        return view("pages.buah.detail", [
            "title"=>"buah",
            'buah'=> buah::find($buah),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\buah  $buah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, buah $buah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\buah  $buah
     * @return \Illuminate\Http\Response
     */
    public function destroy(buah $buah)
    {
        //
    }
}
