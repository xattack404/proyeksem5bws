<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registrasi;
use App\DetailRegistrasi;
use App\Pembayaran;

class RegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.registrasi.index');
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
        // dd(request()->all());
        // $validatedData = $request->validate([
        //     'nisn' => 'required|max:10|unique:nisn',
        // ]);

        $scan_ijazah = 'scnijz-' . date('Ymdhis') . '.' . $request->scan_ijazah->getClientOriginalExtension();
        $request->scan_ijazah->move('scn_ijz/', $scan_ijazah);

        $foto = 'foto-' . date('Ymdhis') . '.' . $request->foto->getClientOriginalExtension();
        $request->foto->move('foto_santri/', $foto);

        $scan_kk = 'scnkk-' . date('Ymdhis') . '.' . $request->scan_kk->getClientOriginalExtension();
        $request->scan_kk->move('scn_kk/', $scan_kk);

        $getId = Registrasi::create([
            'nisn'                  => $request->nisn,
            'nama'                  => $request->nama,
            'jenis_kelamin'         => $request->jenis_kelamin,
            'tempat_lahir'          => $request->tempat_lahir,
            'tgl_lahir'             => $request->tgl_lahir,
            'email'                 => $request->email,
            'no_telp'               => $request->no_telp,
            'alamat'                => $request->alamat,
            'kecamatan'             => $request->kec,
            'kabupaten_kota'        => $request->kabkot,
            'provinsi'              => $request->prov,
            'kode_pos'              => $request->kode_pos,
            'foto'                  => $foto,
            'pendidikan_terakhir'   => $request->pend_ter,
            'asal_sekolah'          => $request->asal_sekolah,
            'tahun_lulus'           => $request->thn_lulus,
            'file_ijazah'           => $scan_ijazah
        ]);

        // $validatedData = $request->validate([
        //     'no_kk' => 'required|max:20|unique:no_k',
        //     'nkk' => 'required|max:20|unique:nik_kepala_keluarga'
        // ]);

        DetailRegistrasi::create([
            'id_registrasi'         => $getId->id,
            'no_kk'                 => $request->no_kk,
            'nik_kepala_keluarga'   => $request->nkk,
            'nama_ayah'             => $request->nama_ayah,
            'pekerjaan_ayah'        => $request->pekerjaan_ayah,
            'nama_ibu'              => $request->nama_ibu,
            'pekerjaan_ibu'         => $request->pekerjaan_ibu,
            'status_ayah'           => $request->status_ayah,
            'status_ibu'            => $request->status_ibu,
            'scan_kk'               => $scan_kk
        ]);

        $no_invoice = 'REG-' . $request->nisn;
        Pembayaran::create([
            'no_invoice'        => $no_invoice,
            'nisn'              => $request->nisn,
            'total_pembayaran'  => 100000
        ]);

        return redirect()->route('frontend.registrasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function show(Registrasi $registrasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Registrasi $registrasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registrasi $registrasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registrasi $registrasi)
    {
        //
    }
}
