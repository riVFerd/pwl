<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliahModel extends Model
{
    use HasFactory;
    protected $table = 'matakuliah';

    function mahasiswa_matakuliah()
    {
        return $this->hasMany(MahasiswaMataKuliahModel::class);
    }
}
