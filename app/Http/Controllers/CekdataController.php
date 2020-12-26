<?php

namespace App\Http\Controllers;

use App\BiayaPendaftaran;
use App\Pembayaran;
use App\Registrasi;

use Illuminate\Http\Request;

class CekdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.cekdata.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function print($nisn)
    {
        $data = Pembayaran::where('nisn', $nisn)->first();
        return view('frontend.cekdata.print', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function form($nisn)
    {
        $data = Pembayaran::where('nisn', $nisn)->first();
        return view('frontend.cekdata.form', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $fileName = 'buktibyr-' . date('Ymdhis') . '.' . $request->foto->getClientOriginalExtension();
        $request->foto->move('buktipembayaran/', $fileName);
        Pembayaran::whereNisn($request->nisn)->update([
            'bukti_pembayaran' => $fileName
        ]);
        return redirect()->route('frontend.cekdata.index');
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
