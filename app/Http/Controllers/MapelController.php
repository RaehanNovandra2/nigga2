<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;

class MapelController extends Controller
{
    public function index()
    {
        $mapel = Mapel::all();
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

        Mapel::create($request->all());
        return redirect()->route('mapel.index')->with('success', 'Mapel berhasil ditambahkan');
    }

    public function edit($id)
    {
        $mapel = Mapel::find($id);
        return view('edit', compact('mapel'));
    }

    public function update(Request $request, $id)
    {
        $mapel = Mapel::find($id);
        $mapel->nama_mapel = $request->nama_mapel;
        $mapel->save();
        // return view('index');
        // $request->validate([
        //     'nama_mapel' => 'required',
        // ]);

        // $mapel = Mapel::find($id);
        // $mapel->update($request->all());
        // return view('index', compact('mapel'));
        return redirect()->route('mapel.index')->with('success', 'Mapel berhasil diupdate');
    }

    public function destroy(Request $request, $id)
    
    {
        $mapel = Mapel::find($id);
        $mapel->delete();        
        
    //   $mapel = Mapel::find($id);
    //   dd($mapel);
        return redirect()->route('mapel.index')->with('success', 'Mapel berhasil dihapus');
    }
}