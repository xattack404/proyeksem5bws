<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengurus;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pengurus::paginate(10);
        return view('pengurus.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengurus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = 'img-' . date('Ymdhis') . '.' . $request->foto->getClientOriginalExtension();
        $request->foto->move('img_profil/', $fileName);
        Pengurus::create([
            'nama_pengurus'          => $request->nama_pengurus,
            'tempat_lahir'           => $request->tmpt_lahir,
            'tgl_lahir'              => $request->tgl_lahir,
            'pendidikan_terakhir'    => $request->pendidikan_terakhir,
            'deskripsi'              => $request->deskripsi,
            'foto'                   => $fileName
        ]);
        return redirect()->route('pengurus.index');
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
        $data = Pengurus::find($id);
        return view('pengurus.edit', compact('data'));
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
        $fileName = 'img-' . date('Ymdhis') . '.' . $request->foto->getClientOriginalExtension();
        $request->foto->move('img_profil/', $fileName);
        Pengurus::create([
            'nama_pengurus'          => $request->nama_pengurus,
            'tempat_lahir'           => $request->tmpt_lahir,
            'tgl_lahir'              => $request->tgl_lahir,
            'pendidikan_terakhir'    => $request->pendidikan_terakhir,
            'deskripsi'              => $request->deskripsi,
            'foto'                   => $fileName
        ]);
        return redirect()->route('pengurus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = Pengurus::find($id);
        if (\File::exists(public_path('img_profil/' . $data->foto))) {

            \File::delete(public_path('img_profil/' . $data->foto));
        }
        Pengurus::whereId($id)->delete();
        return redirect()->route('pengurus.index');
    }
}
