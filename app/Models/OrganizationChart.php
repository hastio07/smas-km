<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationChart extends Model
{
    use HasFactory;
    protected $fillable = ['deskripsi_organisasi', 'file_foto'];
}
