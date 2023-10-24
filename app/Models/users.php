<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class users extends Authenticatable
{
    public $timestamps = false;
    use HasFactory, Notifiable;

    protected $table='users';
    protected $primaryKey= 'id';
    protected $fillable = [
        'email',
        'password',
        'role',
        'username',
        'bergabung',
    ];
    public function getHashedPasswordAttribute()
    {
        return Hash::make($this->attributes['password']);
    }

    // relasi ke datapengguna
    public function datapengguna(){
        return $this->hasOne(Datapengguna::class,'user_id');
    }

    //relasi ke datalainnya
    public function datalainnya(){
        return $this->hasOne(Datalainnya::class,'user_id');
    }
    public function nilai(){
        return $this->hasOne(Nilai::class,'user_id');
    }

    public function users(){
        return $this->hasOne(HistoryUjian::class, 'user_id');
    }


}
