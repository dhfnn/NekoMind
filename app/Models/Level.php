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
        return $this->belongsTo(users::class,'user_id');
    }
    public function poin()
    {
        return $this->belongsTo(Poin::class, 'user_id');
    }
    public function datapengguna()
    {
        return $this->belongsTo(Datapengguna::class, 'user_id');
    }
    public function hasilujian()
    {
        return $this->belongsTo(hasilujian::class, 'user_id');
    }
    public function datalainnya()
    {
        return $this->belongsTo(Datalainnya::class, 'user_id');
    }



}
