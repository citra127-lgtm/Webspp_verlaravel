<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spp extends Model
{
    use HasFactory;
    protected $table = 'spp';
    protected $fillable = ['NISN', 'NAMA_SISWA', 'KELAS_JURUSAN', 'submit'];

    //protected $guarded = [];
}
