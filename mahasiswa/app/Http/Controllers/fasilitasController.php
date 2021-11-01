<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fasilitas;

class fasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = fasilitas::all();
        return view('managefasilitas',[
            'title' => 'Manage Fasilitas',
            'fasilitas' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createfasilitas', [
            'title' => 'Create Fasilitas',
            'js' => '/fasilitasResource/createfasilitas.js'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        fasilitas::create($request->all());
        return redirect('/fasilitas/manage');
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
        $edit = fasilitas::find($id);
        return view('editfasilitas', [
            'title' => 'Edit Fasilitas',
            'edit' => $edit
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        fasilitas::destroy($id);
        return redirect('/fasilitas/manage');
    }
}
