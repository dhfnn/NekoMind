<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poin extends Model
{
    use HasFactory;
    public $timestamp = false;
    protected $table = 'poinpengguna';
    protected $primaryKey = 'id';
    protected $fillabel = [
        'user_id',
        'poin'
    ];

    public function users(){
        return $this->belongsTo(users::class, 'user_id');
    }


}
