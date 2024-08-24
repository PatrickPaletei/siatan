<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surat extends Model
{
    use HasFactory;
    protected $table = 'surat';
    protected $primaryKey = 'surat_id';
    protected $fillable = [
        'sub_bidang_id',
        'jenis_surat',
        'judul_surat',
        'tanggal_surat',
        'isi_surat'
    ];
}
