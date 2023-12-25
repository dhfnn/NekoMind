<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historyujian extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'historyujian';
    protected $fillable = ['user_id', 'benar', 'salah' , 'ujian_id','nilai', 'waktu'];

    public function ujian(){
        return $this->belongsTo(Ujian::class, 'ujian_id');
    }
    public function users(){
        return $this->belongsTo(users::class, 'user_id');
    }

}
