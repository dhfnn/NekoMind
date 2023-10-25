<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryUjian extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table  = 'historyujian';
    protected $fillable = ['user_id', 'benar', 'salah', 'nilai', 'ujian_id'];

    public function users(){
        return $this->belongsTo(users::class);
    }
}