<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curd0 extends Model
{
    use HasFactory;
    protected $table = "curd0";
    protected $guarded = ['id'];//kebalikan dari fillable
}
