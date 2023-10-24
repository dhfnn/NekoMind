<?php

namespace App\Http\Controllers;

use App\Models\soal;
use App\Models\Ujian;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class tes extends Controller
{
    // public function getDataSekolah(Request $request)
    // {
    //     $page = $request->input('page', 1);

    //     // Buat instance Guzzle HTTP Client
    //     $client = new Client();

    //     // Buat permintaan GET ke API
    //     $response = $client->get('https://api-sekolah-indonesia.vercel.app/sekolah', [
    //         'query' => [
    //             'page' => $page,
    //         ],
    //     ]);

    //     // Ambil data JSON dari respons
    //     $data = json_decode($response->getBody(), true);

    //     // Kembalikan data sebagai respons JSON
    //     return response()->json($data);

    // }
    // public function index()
    // {
    //     session(['halo' => 'hai']);

    //     $halo = session('halo');
    //     dd($halo);
    // }
    public function index()
    {

        $soals = soal::where('id' , $id); // Gantilah dengan cara Anda mengambil data soal

        return response()->json($soals);
    }

    public function hai()
    {
        $soal = soal::all();
        $soals = json_encode($soal);
        return view('more.RuangUjian');
    }

    public function getDataSekolah(Request $request)
{
      $page = 1;
      $client = new Client();
      $allData = [];

      do {
          $response = $client->get('https://api-sekolah-indonesia.vercel.app/sekolah', [
              'query' => [
                  'page' => $page,
              ],
          ]);

          $data = json_decode($response->getBody(), true);
          $allData = array_merge($allData, $data['dataSekolah']);
          $page++;
      } while (!empty($data['dataSekolah']));
      foreach ($allData as $school) {
          echo $school['sekolah'] . '<br>';
      }
  }
}


