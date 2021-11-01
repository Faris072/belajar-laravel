<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexlist()
    {
        $mahasiswa = mahasiswa::all();
        return view('listmahasiswa',[
            'title' => 'List Mahasiswa',
            'mahasiswa' => $mahasiswa
        ]);
    }

    public function index()
    {
        $mahasiswa = mahasiswa::all();
        return view('pengaturanmhs',[
            'title' => 'Pengaturan Mahasiswa',
            'mahasiswa' => $mahasiswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add', ['title' => 'Add Mahasiswa']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        mahasiswa::create($request->all());
        return redirect('/pengaturan');
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
    public function edit($nrp)
    {
        $data = mahasiswa::find($nrp);
        return view('edit',[
            'data' => $data,
            'title' => 'Edit Mahasiswa '.$data->nama
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nrp)
    {
        mahasiswa::where('nrp' , $nrp)
                -> update([
                    'nama' => $request->nama,
                    'kelas' => $request->kelas,
                    'jurusan' => $request->jurusan,
                    'ipk' => $request->ipk
                ]);

                return redirect('/pengaturan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nrp)
    {
        mahasiswa::destroy($nrp);
        return redirect('/pengaturan');
    }
}
