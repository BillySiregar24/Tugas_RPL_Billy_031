<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = "berita";

    protected $primaryKey = "id_berita";

    protected $fillable = ["judul_berita","isi_berita","gambar_berita","id_kategori"];
    public function kategori(){
        return $this->belongsTo(Kategori::class,'id_kategori');

    }
}
