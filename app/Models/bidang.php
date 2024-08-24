<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bidang extends Model
{
    use HasFactory;
    protected $table = 'bidang';
    
    public function user(){
        return $this -> belongsTo (user::class);
    }
}
