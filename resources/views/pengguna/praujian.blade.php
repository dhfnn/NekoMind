


    <!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="{{ asset('assets/ikon/logon.png') }}" type="image/x-icon">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" />
    <script src="https://kit.fontawesome.com/9494185896.js" crossorigin="anonymous"></script>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../assets/js/color-modes.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

  </head>
  <body style="background-color: #F8F9FA;">


    <!-- dashboard  -------------------------------------------------------------------------------->

    <main class="" >
        <div class="container-fluid mt-md-3 px-md-5 " id="cont">
         <div class="col">
           <div class="col">
            <nav class="navbar navbar-light navbar-expand-md d-flex">
              <div class="container">
                <!-- bagian nav atas   -------------------------------------------------------------------------------->
                <div class="col-12 d-flex justify-content-between align-items-center  mt-2 ">
                  <a class=" p-md-2 px-md-3 a-back bg-white"  href="{{ url('/Soal') }}" >

                      <i class="fa-solid fa-arrow-left"></i>
                      <span class="d-none d-md-inline">Kembali</span>
                  </a>
                  <span class="t-jsp">
                    {{ $dataUjian->jenis }}
                  </span>
                  <a href="#mymodalpetunjuk"  class="tdn text-white" data-bs-toggle="modal" data-bs-target="#mymodalpetunjuk">
                  <div class=" rounded-circle w-isp">
                    <span class="i-sp">!</span>
                  </div>
                  </a>

                  <div class="modal fade" id="mymodalpetunjuk" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="">
                    <div class="modal-dialog" style="max-width: 600px;">
                      <div class="modal-content">
                        <div class="modal-header px-3 py-1 pt-2" style="border: none;">
                          <div class="col" style="position: relative;">
                            <div class="col text-end" style="position: absolute; top: 0; right: 0; padding: 10px; z-index: 1;">
                                <a type="button" class="tdn" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fa-solid fa-xmark fs-4" style="color: #636363;"></i>
                                </a>
                            </div>
                            <div class="col w-100 text-center position-absolute mt-2" style="top: 0; left: 0; z-index: 0;">
                                <span class="t-jsp" id="staticBackdropLabel">Petunjuk</span>
                            </div>
                        </div>

                        </div>
                        <div class="modal-body py-1 mt-5">
                          <ol >
                            <li class="p-sp" style="list-style: decimal;">Pastikan bahwa koneksi internet dan perangkat berada dalam kondisi yang memadai sebelum memulai ujian.</li>
                            <li class="p-sp" style="list-style: decimal;">Teliti setiap pertanyaan yang disediakan sebelum memberikan jawaban.</li>
                            <li class="p-sp" style="list-style: decimal;">Silakan memilih dan mengisi jawaban sesuai dengan panduan yang telah diberikan.</li>
                            <li class="p-sp" style="list-style: decimal;">Mohon menjalani ujian dengan integritas dan kejujuran.</li>
                            <li class="p-sp" style="list-style: decimal;">Diharapkan agar peserta menjaga fokus selama menjalani ujian.</li>
                            <li class="p-sp" style="list-style: decimal;">Selama ujian, disarankan untuk tidak menutup halaman ujian.</li>
                            <li class="p-sp" style="list-style: decimal;">Setelah mengisi jawaban pada halaman yang disediakan, penting untuk mengoreksi kembali jawaban tersebut.</li>
                            <li class="p-sp" style="list-style: decimal;">Penilaian akan bergantung pada skor yang diperoleh di setiap subtes, oleh karena itu, penting untuk memberikan perhatian yang sama pada setiap subtes tanpa mengabaikan salah satunya.</li>
                        </ol>
                        </div>

                      </div>
                    </div>
                  </div>

                  <!-- <a href="javascript:void(0);" class="" onclick="backpage()">                        <i class="fa-solid fa-xmark mt-2" style="color: #000000;  "></i></a> -->




                </div>
                <!-- penutup bagian nav atas   -------------------------------------------------------------------------------->
              </div>
            </nav>
           </div>
           <div class="container mt-4 mt-md-5 pt-3">
            <div class="col px-xl-5">
              <div class="row px-3  ">
               <div class="col-12 col-lg-9  ">
                   <Span class="ji-sp">
                     {{ $dataUjian->jenis }} - {{ $dataUjian->judul }}
                   </Span>
                   <div class=" l-sp mt-lg-3 ms-1 ms-lg-3">
                     <i class="fa-solid fa-circle-question"></i>
                   <span class="ms-md-1 ">{{ $jumlahSoal }} pertanyaan</span>
                   </div>
                   <div class="pe-md-4 ms-md-3   ">
                    <p class="p-sp" style=" text-align: justify;">
                      Disarankan sebelum kamu memulai   {{ $dataUjian->jenis }}  ini baca peraturan maupun persyaratan yang tersedia dibagian kanan atas,untuk kenyamanan saat pengerjaan   {{ $dataUjian->jenis }}. Terimakasih :)
                    </p>
                   </div>
               </div>
               <div class="col text-center px-md-5 px-lg-0">
                 <div class="col px-5 px-lg-0 ps-lg-5">
                   <div class="col">
                       <span class="t-jwp">Waktu Pengerjaan</span>
                   </div>
                   <div class="d-flex justify-content-between ">
                     <div class="d-b py-3">
                       <span class="db-a ">{{ $dataUjian->waktu }}</span>
                       <span class="db-ab">Menit</span>
                     </div>
                     <div class="d-b py-3">
                       <span class="db-a">00</span>
                       <span class="db-ab">Detik</span>
                     </div>
                   </div>
                 </div>
               </div>
              </div>
              <div class="row my-4 my-lg-3 px-4">
               <div class="container px-3">
                <div class="bagan-sp p-2 px-4 py-3">
                  <div class=" t-tsp">
                    <!-- <i class="fa-solid fa-brain"></i> -->
                  <img class="d-none d-lg-inline "src="{{ asset('assets/ikon/paw.svg') }}" style="height: 18px; width: 18px;" alt="">

                    <p class="m-0 ms-md-2">Kamu sudah siap untuk melakukan   {{ $dataUjian->jenis }}? <span> Upgrade pengetahuanmu di Bank Materi</span></p>
                  </div>
                  <div class="d-flex d-lg-none justify-content-end mt-md-1">
                    <div class=" col-4  col-md-3 col-lg t-kbm  px-md-2">
                      <a href="{{ url('/MateriPengguna') }}" class="d-none d-md-inline">Pergi ke materi</a>
                      <a href="{{ url('/MateriPengguna') }}" class="d-md-none ">Materi</a>
                    </div>
                  </div>
                  <div class="d-none d-lg-flex t-kbm  px-2">
                    <a href="{{ url('/MateriPengguna') }}">Pergi ke materi</a>
                  </div>

                </div>
               </div>
              </div>
              <div class="row mt-md-5">
                <div class="col col-md-4 col-lg-2 t-mu ">
                    <a href="#mymodal"  class="tdn text-white" data-bs-toggle="modal" data-bs-target="#mymodal">
                    Mulai Ujian

                    </a>

                  </div>
                <div class="modal fade" id="mymodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog" style="max-width: 500px;">
                    <div class="modal-content">
                      <div class="modal-header px-3 py-1 pt-2" style="border: none;">
                        <div class="col" style="position: relative;">
                          <div class="col text-end" style="position: absolute; top: 0; right: 0; padding: 10px; z-index: 1;">
                              <a type="button" class="tdn" data-bs-dismiss="modal" aria-label="Close">
                                  <i class="fa-solid fa-xmark fs-4" style="color: #636363;"></i>
                              </a>
                          </div>
                          <div class="col w-100 text-center position-absolute mt-2" style="top: 0; left: 0; z-index: 0;">
                              <span class="t-jsp" id="staticBackdropLabel">Perhatian</span>
                          </div>
                      </div>

                      </div>
                      <div class="modal-body py-1 mt-5 text-center px-4 ">
                          <span class="p-sp  text-center">
                            Apakah kamu yakin untuk mulai mengerjakan? Waktu akan terus berjalan, soal harus diselesaikan sejak menekan tombol start


                          </span>
                      </div>
                      <div class="modal-footer px-2 pt-0 py-2" style="border: none;">
                        <div class="col d-flex justify-content-end">
      <a type="button" href="{{ url('Ujian/' .$dataUjian->id) }}" class="col col-md-5 col-lg-3 t-mu tdn" style="border: none;">Masuk</a>
{{-- </div> --}}
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                @if(isset($hasilujian))
                <div class="col col-md-4 col-lg-2 ">
                 <a href="#mymodalnilai"  class="tdn  t-mu2"  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background: transparent;">
                 Lihat nilai

                 </a>

               </div>

                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" style="max-width: 500px;">
                        <div class="modal-content">
                          <div class="modal-header px-3 py-1 pt-2" style="border: none;">
                            <div class="col" style="position: relative;">
                              <div class="col text-end" style="position: absolute; top: 0; right: 0; padding: 10px; z-index: 1;">
                                  <a type="button" class="tdn" data-bs-dismiss="modal" aria-label="Close">
                                      <i class="fa-solid fa-xmark fs-4" style="color: #636363;"></i>
                                  </a>
                              </div>
                              <div class="col w-100 text-start position-absolute mt-2" style="top: 0; left: 0; z-index: 0;">
                                  <span class="wsk-j" id="staticBackdropLabel"style="color: #3b73c5;">Nilai   {{ $dataUjian->jenis }}</span>
                              </div>
                          </div>

                          </div>
                          <div class="modal-body py-1 mt-5 px-4 pb-3" style="text-align: justify;">
                              <span class="p-sp " style="text-align: justify;">
                                Hasil perngerjaan yang telah kamu lakukan, kamu mendapatkan nilai sebesar  <b>{{ $hasilujian->nilai }} </b> dengan total jawaban benar sebanyak <b>{{ $hasilujian->benar }} </b> dan total jawaban salah sebanyak <b>{{ $hasilujian->salah }}</b> .
                                Terus tingaktkan kemampuanmu agar menjadi lebih baik lagi !!
                              </span>
                              <div class="col mt-3  ">
                              <span class="wsk-j"  style="color: #3b73c5;" id="staticBackdropLabel">Rekap Nilai</span>

                              </div>
                              <table class="table  align-items-center justify-content-center mb-0" id="datatabelPeringkat mt-3">
                                <thead>
                                  <tr>
                                    <th style="font-size: 13px !important;" class="text-uppercase text-secondary text-sm opacity-7">WAKTU</th>
                                    <th style="font-size: 13px !important;" class="text-uppercase text-secondary text-sm opacity-7 ps-2">NILAI</th>
                                    <th style="font-size: 13px !important;" class="text-uppercase text-secondary text-sm opacity-7 ps-2">BENAR</th>
                                    <th style="font-size: 13px !important;" class="text-uppercase text-secondary text-sm text-center opacity-7 ps-2">SALAH</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($historyujian as $data)

                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center px-2">
                                          <span class="text-xs font-weight-bold"></span>
                                        <div class="my-auto">
                                          <h6 class="mb-0 text-sm">
                                            {{ $data->waktu }}

                                          </h6>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <p class="text-sm font-weight-bold mb-0">
                                        {{ $data->nilai }}
                                      </p>
                                    </td>
                                    <td>
                                      <span class="text-xs font-weight-bold">
                                        {{ $data->benar }}
                                    </span>
                                    </td>
                                    <td class="align-middle text-center">
                                      <div class="d-flex align-items-center justify-content-center">
                                        <span class="me-2 text-xs font-weight-bold">
                                            {{ $data->salah }}
                                        </span>
                                      </div>
                                    </td>
                                  </tr>
                                  @endforeach



                                </tbody>
                              </table>
                          </div>
                          </div>
                        </div>
                  </div>
                @endif
              </div>
            </div>
           </div>
        </div>


        </div>
    @include('more.quiz')
       </main>
  </body>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</html>
