<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryVideo extends Model
{
    use HasFactory;
    protected $fillable = ['deskripsi_video', 'file_video'];
}
