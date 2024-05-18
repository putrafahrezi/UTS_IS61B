<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $obt = Obat::all();
        return view('jual.index', compact('nomor', 'obt'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jual.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        $obt = new Obat;
        $obt->name = $request->name;
        $obt->description = $request->description;
        $obt->price = $request->price;
        $obt->stock = $request->stock;
        $obt->save();

        return redirect('/jual/')->with('success', 'Data obat berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $obt = Obat::find($id);
        if ($obt) {
            return view('jual.edit', compact('obt'));
        } else {
            return redirect('/jual/')->withErrors('Data tidak ditemukan');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        $obt = Obat::find($id);
        if ($obt) {
            $obt->name = $request->name;
            $obt->description = $request->description;
            $obt->price = $request->price;
            $obt->stock = $request->stock;
            $obt->save();
            return redirect('/jual/')->with('success', 'Data obat berhasil diupdate');
        } else {
            return redirect('/jual/')->withErrors('Data tidak ditemukan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $obt = Obat::find($id);
        if ($obt) {
            $obt->delete();
            return redirect('/jual/')->with('success', 'Data obat berhasil dihapus');
        } else {
            return redirect('/jual/')->withErrors('Data tidak ditemukan');
        }
    }
}
