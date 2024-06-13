<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    protected $table = 'user'; // Nama tabel di database

    protected $fillable = [
        'username', 'password',
        // Kolom lainnya yang ada di tabel admins
    ];
}
