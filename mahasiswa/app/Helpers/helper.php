<?php
//helper untuk membuat fungsi global tapi harus di setting di composer.json
//lalu ketik perintah composer dumpautoload
use App\Models\mahasiswa;
use App\models\fasilitas;

function tampilfasilitas(){
    return fasilitas::all();
}

function tampilmahasiswa(){

}
