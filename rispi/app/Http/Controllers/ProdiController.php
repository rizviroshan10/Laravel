<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    //
    public function index(){
        $prodi = Prodi::all();

        return view('prodi.index')->with('prodis',$prodi);
    }

        /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prodi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        //dd($request->nama_wakil_dekan);
        
        //validasi data

        $validasi= $request->validate([
            'nama_prodi'=> 'required',
            'fakultas_id'=> 'required',
            'nama_wakil_dekan' => 'required'
        ]);

        //dd($validasi);
        //buat objek dari model fakultas
        $prodi = new Prodi();
        $prodi ->nama_prodi = $validasi['nama_prodi'];
        $prodi ->fakultas_id = $validasi['fakultas_id'];
        $prodi ->nama_wakil_dekan = $validasi['nama_wakil_dekan'];
        $prodi ->save(); //simpan

        return redirect()->route('prodi.index')->with('success',"Data Prodi".$validasi
        ['nama_prodi']."berhasil simpan");
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}


    
