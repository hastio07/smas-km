<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['role_id', 'name', 'username', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];

    public function setUsernameAttribute($value)
    {
        $this->attributes['username'] = Str::slug($value, '.', 'id');
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\Role', 'role_id', 'id');
    }
}
