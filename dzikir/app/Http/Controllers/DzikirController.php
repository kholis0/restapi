<?php

namespace App\Http\Controllers;

use App\Models\Dzikir;
use Illuminate\Http\Request;

class DzikirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dzikir = Dzikir::all();

        return response()->json([
            'dzikir' => $dzikir
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
        $dzikir = dzikir::create([
            'nama' => $request->nama,
            'latin' => $request->latin,
            'arti' => $request->arti,
            'arab' => $request->arab,
            'riwayat' => $request->riwayat,
        ]);

        return response()->json([
            'dzikir' => $dzikir,
            'massage' => 'dzikir berhasil ditambahkan'
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $dzikir = dzikir::findOrFail($id);

        return response()->json([
            'dzikir' => $dzikir
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dzikir $dzikir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dzikir $dzikir)
    {
        $dzikir->update([
            'nama' => $request->nama,
            'latin' => $request->latin,
            'arti' => $request->arti,
            'arab' => $request->arab,
            'riwayat' => $request->riwayat,
        ]);

        return response()->json([
            'dzikir' => $dzikir,
            'massage' => 'dzikir berhasil diupdate'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dzikir $dzikir)
    {
        $dzikir->delete();

        return response()->json([
            'massage' => 'dzikir berhasil dihapus'
        ], 200);

    }
}
