<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        "nisn",
        "nama_lengkap",
        "tempat_lahir",
        "tanggal_lahir",
        "alamat",
        "jurusan",
        "angkatan",
        "no_hp",
        "added_by",
        "is_active"
    ] ;
}
