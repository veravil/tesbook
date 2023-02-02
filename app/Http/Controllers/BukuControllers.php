<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
USE Illuminate\Support\Facades\Hash;

class BukuControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bu = Buku::latest()->paginate(5);
        return view ('bu.index',compact('bu'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'JudulBuku' => 'required',
            'Descripsi' => 'required',
            'Kategori' => 'required',
            'Keywords' => 'required',
            'Harga' => 'required',
            'Stok' => 'required',
            'Penerbit' => 'required',
        ]);
        Buku::create($request->all());

        return redirect()->route('bu.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $bu)
    {
        return view('bu.show',compact('bu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $bu)
    {
        return view('bu.edit', compact('bu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $bu)
    {
        $request->validate([
            'JudulBuku' => 'required',
            'Descripsi' => 'required',
            'Kategori' => 'required',
            'Keywords' => 'required',
            'Harga' => 'required',
            'Stok' => 'required',
            'Penerbit' => 'required',
        ]);

        $bu->update($request->all());

        return redirect()->route('bu.index')->with('succes','Siswa Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $bu)
    {
        $bu->delete();

        return redirect()->route('bu.index')->with('succes','Siswa Berhasil di Hapus');
    }
}
