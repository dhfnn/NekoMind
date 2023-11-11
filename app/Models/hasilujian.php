<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasilujian extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table  = 'hasilujian';
    protected $fillable = ['user_id', 'benar', 'salah', 'nilai', 'ujian_id', 'waktu'];

    public function users(){
        return $this->belongsTo(users::class, 'user_id');
    }
    public function level(){
        return $this->belongsTo(Level::class,'user_id');
    }
    public function poin(){
        return $this->belongsTo(Poin::class,'user_id');
    }
}
