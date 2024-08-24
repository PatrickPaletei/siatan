<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_bidang extends Model
{
    use HasFactory;
    protected $table = 'sub_bidang';
    
    public function bidang(){
        return $this -> hasMany (bidang::class);
    }
}