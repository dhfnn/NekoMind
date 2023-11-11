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
    public function level()
    {
        return $this->belongsTo(Level::class, 'user_id');
    }
    public function datalainnya(){
        return $this->belongsTo(Datalainnya::class, 'user_id');
    }
    public function datapengguna()
    {
        return $this->hasOne(Datapengguna::class, 'user_id');
    }
    public function hasilujian()
    {
        return $this->hasOne(hasilujian::class, 'user_id');
    }

}
