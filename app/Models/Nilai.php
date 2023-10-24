<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'nilai'; // Nama tabel yang sesuai
    protected $primaryKey = 'id';
    protected $fillable = [
        'ujian_id',
        'user_id',
        'nilai',
        'skor',
        'jawabanbenar',
        'jawabansalah',
    ];

    public function ujian()
    {
        return $this->belongsTo(ujian::class, 'ujian_id');
    }

    public function user()
    {
        return $this->belongsTo(users::class, 'user_id');
    }
}
