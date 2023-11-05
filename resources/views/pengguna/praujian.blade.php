


    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" />
    <script src="https://kit.fontawesome.com/9494185896.js" crossorigin="anonymous"></script>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../assets/js/color-modes.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                    Latihan UTS
                  </span>
                  <a href="#mymodalpetunjuk"  class="tdn text-white" data-bs-toggle="modal" data-bs-target="#mymodalpetunjuk">
                  <div class=" rounded-circle w-isp">
                    <!-- <i class="fa-solid fa-exclamation i-sp"></i> -->

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
                     UTS - {{ $dataUjian->judul }}- Kelas 11
                   </Span>
                   <div class=" l-sp mt-lg-3 ms-1 ms-lg-3">
                     <i class="fa-solid fa-circle-question"></i>
                   <span class="ms-md-1 ">{{ $jumlahSoal }} pertanyaan</span>
                   </div>
                   <div class="pe-md-4 ms-md-3  ">
                    <p class="p-sp" style=" text-align: justify;">
                      Disarankan sebelum kamu memulai ujian ini baca peraturan maupun persyaratan yang tersedia,untuk kenyamanan saat pengerjaan ujian. Terimakasih :)
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

                    <p class="m-0 ms-md-2">Kamu sudah siap untuk melakukan ujian? <span> Upgrade pengetahuanmu di Bank Materi</span></p>
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
                            Apakah kamu yakin untuk mulai mengerjakan? Waktu akan terus berjalan. Try Out harus diselesaikan sejak menekan tombol start


                          </span>
                      </div>
                      <div class="modal-footer px-2 pt-0 py-2" style="border: none;">
                        <div class="col d-flex justify-content-end">

    {{-- <div class="col"  >
        <button id="ilang" data-bs-dismiss="modal">Mulai Kuis</button>
      </div> --}}

      <a type="button" href="{{ url('Ujian/' .$dataUjian->id) }}" class="col col-md-5 col-lg-3 t-mu tdn" style="border: none;">Masuk</a>
{{-- </div> --}}
                        </div>
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
           </div>
        </div>
        </div>
    @include('more.quiz')
       </main>
    {{-- <script src="{{ asset('assets/js/script.js') }}"></script> --}}
{{-- <script >
    function mulaiKuis() {
    var homeElement = document.getElementById("home");
    var contElement = document.getElementById("cont");

    if (homeElement && contElement) {
        homeElement.style.display = "block";
        contElement.style.display = "none";
    }
}
</script> --}}

  </body>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</html>
