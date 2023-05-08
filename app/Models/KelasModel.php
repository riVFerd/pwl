<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasModel extends Model
{
    use HasFactory;
    protected $table = 'kelas';

    function mahasiswa()
    {
        return $this->hasMany(MahasiswaModel::class);
    }
}
