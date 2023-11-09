<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historyadmin extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'historyadmin';
    protected $fillable = ['user_id', 'isi', 'tanggal'];

    public function user(){
        return $this->belongsTo(users::class, 'user_id');
    }
}
