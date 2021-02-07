<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profil;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Profil::paginate(10);
        return view('profil.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profil.create');
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
        $request->foto->move('img_profil1/', $fileName);
        Profil::create([
            'nama_pondok'          => $request->nama_pondok,
            'visi'                 => $request->visi,
            'misi'                 => $request->misi,
            'foto'                 => $fileName
        ]);
        return redirect()->route('profil.index');
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
        $data = Profil::find($id);
        return view('profil.edit', compact('data'));
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
        if (empty($request->foto)) {
            Profil::whereId($id)->update([
                'nama_pondok'          => $request->nama_pondok,
                'visi'                 => $request->visi,
                'misi'                 => $request->misi,
            ]);
            return redirect()->route('profil.index');
        } else {
            $fileName = 'img-' . date('Ymdhis') . '.' . $request->foto->getClientOriginalExtension();
            $request->foto->move('img_profil1/', $fileName);
            Profil::whereId($id)->update([
                'nama_pondok'          => $request->nama_pondok,
                'visi'                 => $request->visi,
                'misi'                 => $request->misi,
                'foto'                 => $fileName
            ]);
            return redirect()->route('profil.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = Profil::find($id);
        if (\File::exists(public_path('img_profil1/' . $data->foto))) {

            \File::delete(public_path('img_profil1/' . $data->foto));
        }
        Profil::whereId($id)->delete();
        return redirect()->route('profil.index');
    }
}
