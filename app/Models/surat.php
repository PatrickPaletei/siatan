<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surat extends Model
{
    use HasFactory;
    protected $table = 'surat';
    protected $fillable = [
        'judul_surat',
        'tanggal_surat',
        'user_id',
        'isi_surat'
    ];
}
