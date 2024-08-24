<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_action extends Model
{
    use HasFactory;
    protected $table = 'user_action';
    protected $primaryKey = 'user_action_id';
    protected $fillable = [
        'surat_id',
        'bidang_id',
        'user_id',
    ];

    public function bidang()
    {
        return $this->belongsTo(bidang::class);
    }

    public function surat()
    {
        return $this->belongsTo(surat::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
