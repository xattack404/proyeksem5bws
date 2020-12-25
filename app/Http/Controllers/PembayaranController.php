<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembayaran;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pembayaran::paginate(5);
        return view('pembayaran.index', compact('data'));
    }

    public function proses($no_invoice)
    {
        Pembayaran::where('no_invoice', $no_invoice)->update([
            'status' => 'Proses'

        ]);
        return redirect()->route('pembayaran.index');
    }

    public function verifikasi($no_invoice)
    {
        Pembayaran::where('no_invoice', $no_invoice)->update([
            'status' => 'Verifikasi'

        ]);
        return redirect()->route('pembayaran.index');
    }
    public function tolak($no_invoice)
    {
        Pembayaran::where('no_invoice', $no_invoice)->update([
            'status' => 'Ditolak'

        ]);
        return redirect()->route('pembayaran.index');
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
