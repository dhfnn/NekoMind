<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bab extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'bab';
    protected $fillable = ['id_pelajaran', 'judul','subab','semester'];

    public function pelajaran()
    {
        return $this->belongsTo(Pelajaran::class, 'id_pelajaran');
    }

    public function MateriModel()
    {
        return $this->hasMany(MateriModel::class, 'id_bab');
    }
}
