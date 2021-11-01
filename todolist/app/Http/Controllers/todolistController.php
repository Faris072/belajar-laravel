<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todolist;


//read
class todolistController extends Controller
{
    public function index()
    {
        $data = todolist::all();//todolist dari nama class di modelnya dan all() untuk mengambil value dari database
        return view('webtodolist', ['data' => $data]);//'data' adalah variabel yang nanti di create.blade.php dan $data dari atasnya
    }
//endread

//create
    public function create()//ketika urlnya di /create maka akan di arahkan ke create.blade.php
    {
        return view('create');
    }


    public function store(Request $request)//store untuk menambah data. $request adalah data yang kita inputkan dari form. $request->name berarti data yang kita inputkan dari name='...' pada form
    {

        //membuat validasi
        $request->validate([//untuk memvalidasi form berdasarkan name dari inputan
            'name' => 'required',//required berarti wajib di isi
            'nrp' => 'required|size:10', //tanda | untuk membuat validasi selanjutnya. size:10 untuk mengatur hanya ada 10 digit di form
            'job' => 'required'
        ]);

        //cara pertama jika belum ada fillable(membatasi data apa yang boleh di isikan)
        todolist::create([//method create untuk mnginsert data dari model kita
            'nrp' => $request->nrp,
            'name' => $request->name,
            'start_date' => $request->startDate,
            'end_date' => $request->endDate,
            'job' => $request->job,
            'description' => $request->description
        ]);

        //cara kedua jika sudah menggunakan fillable
        //todolist::create($request->all());//dengan catatan data inputan harus urut dengan array fillable di model

        return redirect('/todolist');
    }
//endcreate


//showdetails
    public function show($id)
    {

    }
//showdetails


//upddate
    public function edit($id)
    {
        $edit = todolist::find($id);//mengambil data berdasarkan id nya
        return view('edit',['edit' => $edit]);
    }

    public function update(Request $request, $id)
    {
        todolist::where('id', $id)
                ->update([
                    'nrp' => $request->nrp,
                    'name' => $request->name,
                    'start_date' => $request->startDate,
                    'end_date' => $request ->endDate,
                    'job' => $request->job,
                    'description' => $request->description
                ]);

        return redirect('/todolist');
    }
//endupdate

//delete
    public function destroy($id)
    {
        todolist::destroy($id);
        return redirect('/todolist');
    }
//enddelete
}
