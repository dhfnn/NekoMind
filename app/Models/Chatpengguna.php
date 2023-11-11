<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Chatpengguna extends Model
{
    protected $table = 'chatpengguna'; // Sesuaikan dengan nama tabel yang Anda gunakan
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'pesan',
    ];

    public function user()
    {
        return $this->belongsTo(users::class, 'user_id');
    }
}