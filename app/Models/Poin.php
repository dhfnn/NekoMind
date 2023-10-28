<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poin extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'poinpengguna';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'poin',
    ];

    public function users(){
        return $this->belongsTo(users::class, 'user_id');
    }


}
