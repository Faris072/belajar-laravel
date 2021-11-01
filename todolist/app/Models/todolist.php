<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todolist extends Model//model untuk menghubungkan database ke aplikasi kita dan model bisa memberi pengaturan seperti primaryKey atau nama database kita sendiri tanpa harus jamak
{
    use HasFactory;

    protected $table = 'todolist';//table di laravel harus jamak (ada huruf s di belakang) dan secara default laravel akan mencari nama tabel dengan tambahan s dibelakang.
    // jika tabel kita tidak jamak maka kita beri variabel seperti ini untuk supaya memberi tahu laravel bahwa tabel todolist adalah todolists tapi tidak mengubah nama tabel aslinya
    protected $primaryKey = 'id';//untuk memberi tahu bahwa di tabel todolists primary keynya id
    protected $fillable = ['nrp','name','start_date','end_date','job','description'];//memberitahukan laravel kolom apa saja yang boleh di isi dari inputan
}
