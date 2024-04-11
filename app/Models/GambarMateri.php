<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelBaru extends Model
{
    protected $table = 'dibaca';
    protected $primaryKey = 'id';
    
    public $timestamps = false;
    public function mater()
    {
        return $this->belongsTo(MateriModel::class, 'materi_id', 'id');
    }

    // Definisikan relasi dengan tabel users
    public function user()
    {
        return $this->belongsTo(users::class, 'user_id', 'id');
    }
}
