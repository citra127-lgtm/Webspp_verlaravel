<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'bayar'; // Ganti 'nama_tabel_pembayaran' dengan nama tabel yang sudah ada
    protected $primaryKey = 'id'; // Sesuaikan dengan primary key yang baru ditambahkan
    public $timestamps = false;
    
    // Jika tidak menggunakan kolom timestamps created_at dan updated_at

    protected $fillable = ['NISN', 'ID_STAF_ATAU_GURU', 'TANGGAL_PEMBAYARAN', 'NOMINAL', 'submit'];
    public function spp()
    {
        return $this->belongsTo(spp::class, 'NISN', 'NISN');
        
    }
    
}

