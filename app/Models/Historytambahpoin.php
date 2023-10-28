<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historytambahpoin extends Model
{
    use HasFactory;
    protected $table = 'historytambahpoin'; // Nama tabel yang sesuai
    protected $primaryKey = 'id'; // Kolom primary key
    public $timestamps = false; // Tidak ada kolom created_at dan updated_at

    protected $fillable = [
        'user_id',
        'misi_id',
        'tanggal',
        'jumlahpoin',
    ];

    // Definisikan relasi dengan model User
    public function users()
    {
        return $this->belongsTo(users::class, 'user_id');
    }

    // Definisikan relasi dengan model Misi (jika ada)
    public function misi()
    {
        return $this->belongsTo(Misi::class, 'misi_id');
    }

}
