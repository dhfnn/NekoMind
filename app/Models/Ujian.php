<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    use HasFactory;
        public $timestamps = false;

        protected $table = 'ujian';
        protected $fillable = [ 'judul', 'waktu','jenis', 'kelas_id'];

        public function nilai(){
            return $this->hasOne(Nilai::class,'ujian_id');
        }
        public function soal(){
            return $this->hasMany(soal::class,'ujian_id');
        }
        public function kelas(){
            return $this->hasOne(Kelas::class,'kelas_id');
        }
}
