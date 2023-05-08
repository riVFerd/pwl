<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $fillable = [
        'prodi_id',
        'id',
        'nim',
        'nama',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'hp',
        'kelas_id'
    ];

    function prodi()
    {
        return $this->hasOne(ProdiModel::class, 'prodi_id', 'prodi_id');
    }

    function kelas()
    {
        return $this->belongsTo(KelasModel::class);
    }

    function mahasiswa_matakuliah()
    {
        return $this->hasMany(MahasiswaMataKuliahModel::class);
    }
}
