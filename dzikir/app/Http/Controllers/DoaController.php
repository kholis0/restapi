<?php

namespace App\Http\Controllers;

use App\Models\Doa;
use Illuminate\Http\Request;

class DoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doa = Doa::all();

        return response()->json([
            'doa' => $doa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $doa = Doa::create([
            'nama' => $request->nama,
            'latin' => $request->latin,
            'arti' => $request->arti,
            'arab' => $request->arab,
            'riwayat' => $request->riwayat,
        ]);

        return response()->json([
            'doa' => $doa,
            'massage' => 'doa berhasil ditambahkan'
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $doa = Doa::findOrFail($id);

        return response()->json([
            'doa' => $doa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doa $doa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doa $doa)
    {
        $doa->update([
            'nama' => $request->nama,
            'latin' => $request->latin,
            'arti' => $request->arti,
            'arab' => $request->arab,
            'riwayat' => $request->riwayat,
        ]);

        return response()->json([
            'doa' => $doa,
            'massage' => 'doa berhasil diupdate'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doa $doa)
    {
        $doa->delete();

        return response()->json([
            'massage' => 'doa berhasil dihapus'
        ], 200);

    }
}
