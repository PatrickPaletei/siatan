<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_bidang extends Model
{
    use HasFactory;
    protected $table = 'sub_bidang';
    protected $primaryKey = 'sub_bidang_id';

    public function bidang()
    {
        return $this->hasMany(bidang::class);
    }

    public function surat()
    {
        return $this->hasMany(surat::class, 'sub_bidang_id');
    }
}
