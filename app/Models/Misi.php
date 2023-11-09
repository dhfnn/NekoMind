<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Misi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'misi';

    protected $fillable = ['misi', 'target', 'tanggal'];

 public function historyMisi()
    {
        return $this->hasMany(HistoryMisi::class, 'misi_id');
    }
    public function historytambahpoin(){
        return $this->hasOne(Historytambahpoin::class, 'misi_id');
    }

}
