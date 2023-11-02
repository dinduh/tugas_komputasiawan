<?php

namespace App\Http\Controllers;

use App\Models\Masiswa;
use Illuminate\Http\Request;

class MasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $masiswas = Masiswa::all();
        return view('masiswa.index', compact('masiswas'));
    }

    public function create()
    {
        return view('masiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'fakultas' => 'required',
            'univ' => 'required',
        ]);

        Masiswa::create($request->all());

        return redirect()->route('masiswa.index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $masiswa = Masiswa::findOrFail($id);
        return view('masiswa.edit', compact('masiswa'));
    }

    // Fungsi update untuk memperbarui data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'fakultas' => 'required',
            'univ' => 'required',
        ]);

        Masiswa::findOrFail($id)->update($request->all());

        return redirect()->route('masiswa.index')->with('success', 'Data berhasil diperbarui.');
    }

    // Fungsi destroy untuk menghapus data
    public function destroy($id)
    {
        Masiswa::findOrFail($id)->delete();
        return redirect()->route('masiswa.index')->with('success', 'Data berhasil dihapus.');
    }
}
