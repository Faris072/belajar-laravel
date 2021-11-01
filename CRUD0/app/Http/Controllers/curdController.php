<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\curd0;

class curdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tampil = curd0::all();
        return view('tampildata',['data' => $tampil]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $namafoto = $request->file('foto')->getClientOriginalName();//mendapatkan nama dan ekstensinya
        $ekstensi = $request->file('foto')->getClientOriginalExtension();//mendapatkan ekstensinya saja
        $namafile = date('ydmHis').'.'.$ekstensi;

        $request->file('foto')->storeAs('/mahasiswa/foto-mahasiswa', $namafile);//untuk menyimpan file kedalam storage
        curd0::create([
            'nrp' => $request->nrp,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'foto' => $namafile
        ]);//menyimpan file ke database

        // curd0::create($request->all());

        return redirect('/curd');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit= curd0::find($id);
        return view('edit',['data'=>$edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        curd0::where('id', $id)
            ->update([
            'nrp' => $request->nrp,
            'nama' => $request->nama,
            'kelas' => $request->kelas
            ]);

        return redirect('/curd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        curd0::destroy($id);
        return redirect('/curd');
    }
}
