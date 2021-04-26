<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sepeda;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;

class SepedaController extends Controller
{
    public function index()
    {
        $sepeda = Sepeda::with('kategori')->get();
        return view('sepeda.index', compact('sepeda'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('sepeda.create', ['kategori' => $kategori]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'unit_code' => 'required',
            'kategori_id' => 'required',
            'deskripsi' => 'required',
            'foto_unit' => 'required',
            'status' => 'required',
        ]);

        if ($request->file('foto_unit')) {
            $image_name = $request->file('foto_unit')->store('images', 'public');
        }

        $sepeda = new Sepeda;
        $sepeda->unit_code = $request->get('unit_code');
        $sepeda->deskripsi = $request->get('deskripsi');
        $sepeda->foto_unit = $image_name;
        $sepeda->status = $request->get('status');

        $kategori = new Kategori;
        $kategori->id_kategori = $request->get('kategori_id');

        $sepeda->kategori()->associate($kategori);
        $sepeda->save();


        return redirect()->route('sepeda.index')
            ->with('success', 'Sepeda berhasil ditambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id_sepeda)
    {
        $sepeda = Sepeda::with('kategori')
            ->where('id_sepeda', $id_sepeda)
            ->first();
        $kategori = Kategori::all();
        return view('sepeda.edit', ['sepeda' => $sepeda, 'kategori' => $kategori]);
    }

    public function update(Request $request, $id_sepeda)
    {
        $request->validate([
            'unit_code' => 'required',
            'kategori_id' => 'required',
            'deskripsi' => 'required',
            'foto_unit' => 'required',
            'status' => 'required',
        ]);

        $sepeda = Sepeda::with('kategori')
            ->where('id_sepeda', $id_sepeda)
            ->first();

        if($sepeda->foto_unit && file_exists(storage_path('app/public/' . $sepeda->foto_unit))) {
            Storage::delete('public/' . $sepeda->foto_unit);
        }
        $image_name = $request->file('foto_unit')->store('images', 'public');

        $sepeda->unit_code = $request->get('unit_code');
        $sepeda->deskripsi = $request->get('deskripsi');
        $sepeda->foto_unit = $image_name;
        $sepeda->status = $request->get('status');

        $kategori = new Kategori;
        $kategori->id_kategori = $request->get('kategori_id');

        $sepeda->kategori()->associate($kategori);
        $sepeda->save();


        return redirect()->route('sepeda.index')
            ->with('success', 'Sepeda berhasil diperbarui');
    }

    public function destroy($id_sepeda)
    {
        $sepeda = Sepeda::with('kategori')
            ->where('id_sepeda', $id_sepeda)
            ->first();
        if($sepeda->foto_unit && file_exists(storage_path('app/public/' . $sepeda->foto_unit))) {
            Storage::delete('public/' . $sepeda->foto_unit);
        }
        Sepeda::find($id_sepeda)->delete();

        return redirect()->route('sepeda.index')
            ->with('success', 'Sepeda berhasil dihapus');
    }
}
