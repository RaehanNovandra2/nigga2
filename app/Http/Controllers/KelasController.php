<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index()
    {
        $mapel = Kelas::all();
        return view('index', compact('mapel'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama_mapel' => 'required',
        ]);

        Kelas::create($request->all());
        return redirect()->route('mapel.index')->with('success', 'Mapel berhasil ditambahkan');
    }

    public function edit($id)
    {
        $mapel = Kelas::find($id);
        return view('edit', compact('mapel'));
    }

    public function update(Request $request, $id)
    {
        $mapel = Kelas::find($id);
        $mapel->nama_mapel = $request->nama_mapel;
        $mapel->save();
        // return view('index');
        // $request->validate([
        //     'nama_mapel' => 'required',
        // ]);

        // $mapel = Mapel::find($id);
        // $mapel->update($request->all());
        // return view('index', compact('mapel'));
        return redirect()->route('kelas.index')->with('success', 'Mapel berhasil diupdate');
    }

    public function destroy(Request $request, $id)
    
    {
        $mapel = Kelas::find($id);
        $mapel->delete();        
        
    //   $mapel = Mapel::find($id);
    //   dd($mapel);
        return redirect()->route('mapel.index')->with('success', 'Mapel berhasil dihapus');
    }
}

