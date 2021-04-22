<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Paket;

class PaketController extends Controller
{
   
    public function index()
    {
        $paket = Paket::get(); // Mengambil semua isi tabel
        return view('paket.index', compact('paket'));
    }

    public function create()
    {
        return view('paket.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_paket' => 'required',
            'jam' => 'required',
            'harga' => 'required',
            ]);
        
        Paket::create($request->all());
        // if the data is added successfully, will return to the main page
        return redirect()->route('paket.index')
            ->with('success', 'Paket telah ditambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $paket = Paket::where('id_paket', $id)->first();
        return view('paket.edit', compact('paket'));
    }

    public function update(Request $request, $id_paket)
    {
        $request->validate([
            'nama_paket' => 'required',
            'jam' => 'required',
            'harga' => 'required',
            ]);
        
        Paket::find($id_paket)->update($request->all());
        
        return redirect()->route('paket.index')
            ->with('success', 'Paket berhasil diperbarui');
    }

    public function destroy($id)
    {
        Paket::find($id)->delete();
        return redirect()->route('paket.index')
            ->with('success', 'Paket berhasil dihapus');
    }
}
