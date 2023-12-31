<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'role_name'];

    public function admin()
    {
        return $this->hasOne(Admin::class, 'role_id', 'id');
    }
}
