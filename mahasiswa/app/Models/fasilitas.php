<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    use HasFactory;
    protected $table = 'fasilitas';
    protected $primaryKey = 'id';
    protected $fillable = ['barang','jumlah','deskripsi','gambar','harga'];//nama di array harus sama dengan nama kolom di database dan sama dengan nama di atribut name html
}
