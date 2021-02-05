<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontak;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kontak::paginate(10);
        return view('kontak.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kontak.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           Kontak::create([
                'nama'             => $request->nama,
                'alamat'           => $request->alamat,
                'no_telp'          => $request->no_telp,
                'email'            => $request->email,
                'rekening'         => $request->rekening,
                'nama_bank'        => $request->nama_bank
                ]);    
        return redirect()->route('kontak.index');
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
        $data = Kontak::find($id);
        return view('kontak.edit',compact('data'));
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
        Kontak::whereId($id)->update([
            'nama'             => $request->nama,
            'alamat'           => $request->alamat,
            'no_telp'          => $request->no_telp,
            'email'            => $request->email,
            'rekening'         => $request->rekening,
            'nama_bank'         => $request->nama_bank
        ]);
        return redirect()->route('kontak.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Kontak::whereId($id)->delete();
        return redirect()->route('kontak.index');
    }
    
}
