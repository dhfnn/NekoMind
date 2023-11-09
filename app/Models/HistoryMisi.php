<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryMisi extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'historymisi';

    protected $fillable = ['misi_id', 'user_id', 'tanggal', 'poin', 'exp'];

    public function misi()
    {
        return $this->belongsTo(Misi::class, 'misi_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
