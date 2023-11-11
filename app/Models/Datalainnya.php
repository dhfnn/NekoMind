<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datalainnya extends Model
{
    public $timestamps = false;

    use HasFactory;
    protected $table='datalainnyas';
    protected $primaryKey ='id_datalainnya';
    protected $fillable = [
        'user_id', 'namasekolah', 'kelas', 'jurusan', 'pelajaranfav','target','motto'
    ];

    // relasi ke users
    public function users(){
        return $this->belongsTo(users::class,'user_id');
    }
    public function poin(){
        return $this->belongsTo(Poin::class,'user_id');
    }


}
