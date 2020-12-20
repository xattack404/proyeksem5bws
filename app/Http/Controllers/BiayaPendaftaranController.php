<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BiayaPendaftaran;

class BiayaPendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BiayaPendaftaran::paginate(10);
        return view('biayapendaftaran.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('biayapendaftaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           BiayaPendaftaran::create([
                'jejang_didik'          => $request->jejang_didik,
                'harga_kitab'           => $request->harga_kitab,
                'harga_seragam'         => $request->harga_seragam
                ]);    
        return redirect()->route('biayapendaftaran.index');
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
        $data = BiayaPendaftaran::find($id);
        return view('biayapendaftaran.edit',compact('data'));
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
        BiayaPendaftaran::whereId($id)->update([
            'jejang_didik'          => $request->jejang_didik,
            'harga_kitab'           => $request->harga_kitab,
            'harga_seragam'         => $request->harga_seragam
        ]);
        return redirect()->route('biayapendaftaran.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        BiayaPendaftaran::whereId($id)->delete();
        return redirect()->route('biayapendaftaran.index');
    }
    
}
