<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datapengguna extends Model
{
    public $timestamps = false;

    use HasFactory;
    protected $table='datapengguna';
    protected $primaryKey ='id_data';
    protected $fillable = [
        'user_id','kota', 'nama', 'tanggallahir', 'jeniskelamin', 'alamat','nohp'
    ];

    // relasi ke users
    public function users(){
        return $this->belongsTo(users::class,'user_id');
    }

}
