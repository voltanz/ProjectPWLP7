<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;

class Kelas extends Model
{
    use HasFactory;
    protected $table='matakuliah';  //mendefinisikan bahwa model ini terkait dengan tabel kelas

    public function matakuliah()
    {
        return $this->belongsToMany(Mahasiswa_Matakuliah::class);
    }
}
