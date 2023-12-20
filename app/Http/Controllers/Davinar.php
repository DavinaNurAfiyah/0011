<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\nct;
class Davinar extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=nct:: all () ;
        return view ('isian.tampildata') ->with ('data', $data) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('isian.uas') ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate ([
            'Nama'=> 'required',
            'Posisi'=> 'required',
            'TTL'=> 'required|numeric',
            'Unit'=> 'required'
        ]) ;
        $data=[
            'Nama'=> $request->input ('Nama'),
            'Posisi'=> $request->input ('Posisi'),
            'TTL'=> $request->input ('TTL'),
            'Unit'=> $request->input ('Unit'),
        ] ;
        nct::create ($data) ;
        return redirect ('isi') ;
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
        $data = nct::where('Nama',$id)->first() ;
        return view('isian.edit')->with('data',$data) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(request $request, string $id)
    {
        $request-> validate ([
            'Nama'=> 'required',
            'Posisi'=> 'required',
            'TTL'=> 'required|numeric',
            'Unit'=> 'required'
        ]) ;
        $data=[
            'Nama'=> $request->input ('Nama'),
            'Posisi'=> $request->input ('Posisi'),
            'TTL'=> $request->input ('TTL'),
            'Unit'=> $request->input ('Unit')
        ] ;
        nct::where('Nama', $id)->update($data) ;
        return redirect('isi')->with('success', 'data berhasil diupdate') ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        nct::where('Nama', $id)->delete() ;
        return redirect('isi')->with('success', 'data berhasil dihapus') ;
    }
}
