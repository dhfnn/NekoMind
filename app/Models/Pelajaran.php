<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    use HasFactory;

    protected $table = 'pelajaran';
    protected $fillable = ['id_semester', 'id_kelas', 'namapelajaran'];

    public function semester()
    {
        return $this->belongsTo(Semester::class, 'id_semester');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function bab()
    {
        return $this->hasMany(Bab::class, 'id_pelajaran');
    }
}