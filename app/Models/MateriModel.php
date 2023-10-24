<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'materi';
    protected $fillable = ['id_bab', 'isi_materi'];

    public function pelajaran()
    {
        return $this->belongsTo(Bab::class, 'id_bab');
    }

    public function gambarmateri()
    {
        return $this->hasMany(GambarMateri::class, 'id_materi');
    }
}

