<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soal extends Model
{
    use HasFactory;
    public $timestamps = false;

        protected $table = 'soal';
        protected $fillable = [ 'ujian_id','pertanyaan', 'opsi','jawaban'];

        public function Ujian(){
            $this->belongsTo(Ujian::class);
        }

}
