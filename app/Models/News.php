<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['admin_id', 'topik', 'slug_topik', 'isi_berita', 'file_foto'];

    public function setSlugTopikAttribute()
    {
        // Menggunakan Str::slug untuk membuat slug dari nilai atribut 'topik'
        $slug = Str::slug($this->attributes['topik'], '.', 'id');

        // Menyimpan hasil slug ke dalam atribut 'slug_topik'
        $this->attributes['slug_topik'] = $slug;
    }
}
