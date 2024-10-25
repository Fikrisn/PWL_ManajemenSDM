<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kegiatan;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatan = Kegiatan::all();
        return view('admin.kegiatan.index', compact('kegiatan'));
    }

    public function create()
    {
        return view('admin.kegiatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'waktu' => 'required|date',
            'pic' => 'required',
        ]);

        Kegiatan::create($request->all());
        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan');
    }

    public function show($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('admin.kegiatan.show', compact('kegiatan'));
    }

    public function edit($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('admin.kegiatan.edit', compact('kegiatan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'waktu' => 'required|date',
            'pic' => 'required',
        ]);

        $kegiatan = Kegiatan::findOrFail($id);
        $kegiatan->update($request->all());
        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil diupdate');
    }

    public function destroy($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        $kegiatan->delete();
        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan berhasil dihapus');
    }

}
