<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Artikel::paginate(10);
        return view('artikel.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artikel.create');
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
        $request->foto->move('img_artikel/', $fileName);
        Artikel::create([
            'judul'                  => $request->judul,
            'seo'                    => $request->seo,
            'isi'                    => $request->isi,
            'gambar'                 => $fileName,
            'video'                  => $request->video
        ]);
        return redirect()->route('artikel.index');
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
        $data = Artikel::find($id);
        return view('artikel.edit', compact('data'));
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
            Artikel::whereId($id)->update([
                'judul'            => $request->judul,
                'seo'              => $request->seo,
                'isi'              => $request->isi,
                'video'            => $request->video,
            ]);
            return redirect()->route('artikel.index');
        } else {
            $fileName = 'img-' . date('Ymdhis') . '.' . $request->foto->getClientOriginalExtension();
            $request->foto->move('img_artikel/', $fileName);
            Artikel::whereId($id)->update([
                'judul'            => $request->judul,
                'seo'              => $request->seo,
                'isi'              => $request->isi,
                'gambar'           => $fileName,
                'video'            => $request->video
            ]);
            return redirect()->route('artikel.index');
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
        $data = Artikel::find($id);
        if (\File::exists(public_path('img_artikel/' . $data->foto))) {

            \File::delete(public_path('img_artikel/' . $data->foto));
        }
        Artikel::whereId($id)->delete();
        return redirect()->route('artikel.index');
    }
}
