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

}
