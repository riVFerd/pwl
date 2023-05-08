<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaMataKuliahModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa_matakuliah';

    public function mahasiswa()
    {
        return $this->belongsTo(MahasiswaModel::class);
    }

    public function matakuliah()
    {
        return $this->belongsTo(MataKuliahModel::class);
    }
}
