<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Satuan;

class SatuanController extends Controller
{
    public function index()
    {
        $satuan = Satuan::paginate(10);

        return view('satuan.index', compact('satuan'));
    }

    public function create()
    {
        return view('satuan.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_satuan' => 'required|unique:satuan',
            'nama' => 'required|min:3|max:255',
        ]);

        $satuan = new Satuan();
        $satuan->id_satuan = $validatedData['id_satuan'];
        $satuan->nama = $validatedData['nama'];
        $satuan->save();

        return redirect()->route('satuan.index')->with('success', 'Satuan berhasil ditambahkan');
    }

    public function edit(Satuan $satuan)
    {
        return view('satuan.index', compact('satuan'));
    }

    public function update(Request $request, Satuan $satuan)
    {
        $validatedData = $request->validate([
            'id_satuan' => 'required|unique:satuan,id_satuan,' . $satuan->id,
            'nama' => 'required|min:3|max:255',
        ]);

        $satuan->id_satuan = $validatedData['id_satuan'];
        $satuan->nama = $validatedData['nama'];
        $satuan->save();

        return redirect()->route('satuan.index')->with('success', 'Satuan berhasil diperbarui');
    }

    public function destroy(Satuan $satuan)
    {
        $satuan->delete();

        return redirect()->route('satuan.index')->with('success', 'Satuan berhasil dihapus');
    }
}
