<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public $timestamps=false;
    use HasFactory;
    protected $table = 'level';
    protected $fillable = ['user_id', 'exp'];

    public function users()
    {
        return $this->belongsTo(users::class);
    }

}
