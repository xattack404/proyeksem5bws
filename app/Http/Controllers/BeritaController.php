<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Kategori;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Berita::paginate(10);
        return view('berita.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['kategori'] = Kategori::all();
        return view('berita.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = 'berita-' . date('Ymdhis') . '.' . $request->foto->getClientOriginalExtension();
        $request->foto->move('foto/', $fileName);

        Berita::create([
            'judul' => $request->judul,
            'seo_berita' => strtolower(str_replace(" ", "-", $request->judul)),
            'isi' => $request->isi,
            'gambar' =>  $fileName,
            'kategori' => $request->kategori
        ]);
        return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $id)
    {
        $data['kategori'] = Kategori::all();
        $data['berita'] = Berita::find($id);
        return view('berita.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $id)
    {
        $fileName = 'lomba-' . date('Ymdhis') . '.' . $request->foto->getClientOriginalExtension();
        $request->foto->move('image/', $fileName);
        Berita::whereId($id)->update([
            'judul' => $request->judul,
            'seo_berita' => strtolower(str_replace(" ", "-", $request->judul)),
            'isi' => $request->isi,
            'foto' =>  $fileName,
            'kategori' => $request->kategori
        ]);
        return redirect()->route('cabangolahraga.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $id)
    {
        $data = Berita::find($id);
        if (\File::exists(public_path('image/' . $data->foto))) {

            \File::delete(public_path('image/' . $data->foto));
        }
        Berita::whereId($id)->delete();
        return redirect()->route('cabangolahraga.index');
    }
}
