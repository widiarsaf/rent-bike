<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::get(); // Mengambil semua isi tabel
        return view('kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
            ]);
        
        Kategori::create($request->all());
        // if the data is added successfully, will return to the main page
        return redirect()->route('kategori.index')
            ->with('success', 'Kategori telah ditambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $kategori = Kategori::where('id_kategori', $id)->first();
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id_kategori)
    {
        $request->validate([
            'nama_kategori' => 'required',
            ]);
        
        Kategori::find($id_kategori)->update($request->all());
        
        return redirect()->route('kategori.index')
            ->with('success', 'Kategori berhasil diperbarui');
    }

    public function destroy($id)
    {
        Kategori::find($id)->delete();
        return redirect()->route('kategori.index')
            ->with('success', 'Kategori berhasil dihapus');
    }
}
