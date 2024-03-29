<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\santriaktif;
use App\Registrasi;
use App\DetailRegistrasi;

class Datasantricontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['santri_aktif'] =  santriaktif::paginate(5);
        $data['registrasi']   =  Registrasi::paginate(5);
        return view('datasantri.index', compact('data'));
    }
    public function form($nisn_santri)
    {
        $data['santri_aktif'] = santriaktif::where('nisn_santri', $nisn_santri)->first();
        $data['registrasi'] = Registrasi::all();

        return view('datasantri.form', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
