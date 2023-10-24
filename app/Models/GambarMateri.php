<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarMateri extends Model
{
    use HasFactory;
    protected $table = 'gambarmateri';
    protected $fillable = ['id_materi', 'namafile', 'lokasifile'];

    public function MateriModel()
    {
        return $this->belongsTo(MateriModel::class, 'id_materi');
    }
}
