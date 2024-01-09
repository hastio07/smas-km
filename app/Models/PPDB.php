<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PPDB extends Model
{
    use HasFactory;
    protected $table = 'ppdb';
    protected $fillable = [
        'id_pendaftaran',
        'nama',
        'jenis_kelamin',
        'tmpt_lahir',
        'tgl_lahir',
        'agama',
        'brkthn_khusus',
        'alamat',
        'desa_kelurahan',
        'kecamatan',
        'kode_pos',
        'nhp_ortu',
        'nhp_siswa',
        'email',
        'asl_sekolah',
        'nma_ayah',
        'pend_terakhir',
        'pekerjaan',
        'penghasilan',
        'nma_ibu',
        'pend_terkahir',
        'penghasilan',
        'pekerjaan',
        'filefc_akte',
        'filefc_skhu',
    ];
}
