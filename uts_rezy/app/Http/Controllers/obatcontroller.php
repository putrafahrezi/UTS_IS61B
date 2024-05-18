<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class obatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $obt = Obat::all();
        return view('jual_obat.index',compact('nomor','obt'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jual_obat.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kd_obt' => 'required|unique:kd_obt',
            'nm_obt' => 'required',
            'jenis' => 'required',
            'jumlah' => 'required'
        ]);

        $obt = new Obat;
        $obt->id = $request->id;
        $obt->nm_obt = $request->nm_obt;
        $obt->jenis = $request->jenis;
        $obt->jumlah = $request->jumlah;
        $obt->save();

        return redirect('/jual_obat/');
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
            return view('jual_obat.edit', compact('obt'));
        } else {
            return redirect('/jual_obat/')->withErrors('Data tidak ditemukan');
        }
    }
}
