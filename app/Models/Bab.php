<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bab extends Model
{
    use HasFactory;
    
    protected $table = 'bab';
    protected $fillable = ['id_pelajaran', 'subbab'];

    public function pelajaran()
    {
        return $this->belongsTo(Pelajaran::class, 'id_pelajaran');
    }

    public function materi()
    {
        return $this->hasMany(Materi::class, 'id_pelajaran');
    }
}
