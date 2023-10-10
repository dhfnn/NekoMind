<?php

namespace App\Http\Controllers;

use App\Models\MateriModel;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\IOFactory;

class wordController extends Controller
{
    public function show()
    {
        $id = '26';

        // 1. Ambil file Word dari database menggunakan model
        $fileData = MateriModel::where('id_bab', $id)->first(); // Menggunakan first() untuk mendapatkan satu baris data

        if (!$fileData) {
            abort(404); // Atur penanganan jika data tidak ditemukan
        }

        // 2. Konversi file Word ke HTML (contoh menggunakan phpoffice/phpword)
        $phpWord = IOFactory::load($fileData->isi_materi); // Ganti dengan kolom tempat Anda menyimpan file Word
        $htmlWriter = IOFactory::createWriter($phpWord, 'HTML');
        $htmlContent = $htmlWriter->saveHTML();

        return view('more.tes', ['htmlContent' => $htmlContent]);
    }

}
