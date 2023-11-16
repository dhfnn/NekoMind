@extends('layouts.App')
@section('main')
<main class="" >
    <div class="col-12 d-flex d-md-none justify-content-between align-items-center px-4 position-absolute">
      <label class="fw-bold fs-2 pt-3" style="color: #fe8d00">NekoMind</label>
      <i class="fa-solid fa-magnifying-glass pt-4 pe-3" style="color: rgb(52, 52, 52); font-size: 15px"></i>
    </div>
    <div class="container-fluid text-dark bg-white pt-0 pt-md-4" style="padding-right: 0px !important; padding-left: 0px !important; background-color: #F8F9FA !important;">
      <div class="d-flex justify-content-center jr-d pt-5">
        <div class="row row-cols-1 dp d-flex justify-content-center">
          <div class="col col-lg-6" >
            <!-- logo neko  -------------------------------------------------------------------------------->


            <!-- bagian profil di dash  -------------------------------------------------------------------------------->

            <div class="col-12 bg-white pt-2 px-3 mt-4 mt-md-0" style="border-radius: 7px; box-shadow: 3px 6px 7px -4px rgba(0, 0, 0, 0.201)">

              <div class="col d-flex align-items-center px-3 pt-2">
                <div class="col-3 col-sm-2 bg-white d-flex justify-content-center pt-0 pt-sm-2 ps-sm-2" style="border-radius: 7px">
                  <div class="rounded-circle gam-p" style="background-image:url({{ asset('assets/pp/' .$usersData->foto .'.jpg') }}) " ></div>
                </div>
                <div class="col-9 col-sm-10 pe-2 pe-sm-4 ps-2 ps-sm-3">
                  <div class="col-12 d-flex justify-content-between align-items-end py-sm-1" style="font-size: 15px; font-weight: 600">
                    <label for="" class="ps-1 t-un">{{ $datapengguna->nama}}</label>
                    <span class="pe-2 t-lvl">Level {{ $levelPengguna }}</span>
                  </div>
                  <div class="col-12" style="background-color: #cdd2dc51; height: 15px; border-radius: 5px">
                    <div class="progress" role="progressbar"  aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="border-radius: 10px;">
                        <div class="progress-bar bg-gradient-biru" style="width: {{ $persentase }}%" style=""></div>
                      </div>
                  </div>
                  <div class="col-12 d-flex justify-content-end pe-2 pt-1">
                    <span style="font-size: 10px; font-weight: 600; color: #4a4a4a">{{ $sisaBagi }}/1200EXP</span>
                  </div>
                </div>
              </div>
              <div class="col-12 d-flex justify-content-center">
                <div class="col-12 col-sm-11 py-3">
                  <div class="row ms-0 me-0 d-flex justify-content-evenly py-2">
                    <div class="col-5 bg-white d-flex px-0 py-3" style="border: 1px rgba(0, 0, 0, 0.041) solid; border-radius: 7px;  box-shadow:-2px 2px 12px 0px rgba(0, 0, 0, 0.055);">
                      <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="rounded-circle d-flex align-items-center justify-content-center l-d bg-white" style="  box-shadow:-2px 2px 12px 0px rgba(0, 0, 0, 0.116);">

                          <i class="i-ld fa-solid fa-book-bookmark color-orange"></i>
                        </div>
                      </div>
                      <div class="col-8 d-flex flex-column">
                        <span class="fw-bold j-d"> 10</span>
                        <label for="" class="j-d2">Materi yang dibaca</label>
                      </div>
                    </div>

                    <div class="col-5 bg-white d-flex px-0 py-3" style="border: 1px rgba(0, 0, 0, 0.041) solid; border-radius: 7px;  box-shadow:-2px 2px 12px 0px rgba(0, 0, 0, 0.055);">
                      <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="rounded-circle d-flex align-items-center justify-content-center l-d bg-white" style="  box-shadow:-2px 2px 12px 0px rgba(0, 0, 0, 0.116);">

                          <i class="i-ld fa-solid fa-question"></i>
                        </div>
                      </div>
                      <div class="col-8 d-flex flex-column">
                        <span class="fw-bold j-d"> {{ $jumlahSoal }}</span>
                        <label for="" class="j-d2">Soal selesai</label>
                      </div>
                    </div>
                  </div>
                  <div class="row ms-0 me-0 d-flex justify-content-evenly py-2">
                    <div class="col-5 bg-white d-flex px-0 py-3" style="border: 1px rgba(0, 0, 0, 0.041) solid; border-radius: 7px;  box-shadow:-2px 2px 12px 0px rgba(0, 0, 0, 0.055);">
                      <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="rounded-circle d-flex align-items-center justify-content-center l-d bg-white" style="  box-shadow:-2px 2px 12px 0px rgba(0, 0, 0, 0.116);">

                          <i class="i-ld fa-solid fa-xmark"></i>
                        </div>
                      </div>
                      <div class="col-8 d-flex flex-column">
                        <span class="fw-bold j-d"> {{ $totalSalah }}</span>
                        <label for="" class="j-d2">Jawaban Salah</label>
                      </div>
                    </div>
                    <div class="col-5 bg-white d-flex px-0 py-3" style="border: 1px rgba(0, 0, 0, 0.041) solid; border-radius: 7px;  box-shadow:-2px 2px 12px 0px rgba(0, 0, 0, 0.055);">
                      <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="rounded-circle d-flex align-items-center justify-content-center l-d bg-white" style="  box-shadow:-2px 2px 12px 0px rgba(0, 0, 0, 0.116);">
                          <i class="i-ld fa-solid fa-check"></i>
                        </div>
                      </div>
                      <div class="col-8 d-flex flex-column">
                        <span class="fw-bold j-d"> {{ $totalBenar }}</span>
                        <label for="" class="j-d2">Jawaban Benar</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--penutupan bagian profil di dash  -------------------------------------------------------------------------------->
          </div>
          <div class="col-6 d-none  d-lg-flex flex-column">
            <div class="col d-flex flex-column ">
              <div class=" col bg-white " style="border-radius: 10px; box-shadow: 3px 6px 7px -4px rgba(0, 0, 0, 0.201);">
                <div class="col pt-3 ps-3">
              <span class="fw-bolder color-orange" >#SekilasFakta</span>

                </div>
                <div class="col d-flex mt-4">
                  <div class="col ps-5 pe-3" onload="ubahTeks()">
                    <span class="j-d2 fw-bold" style="color: #009feb;" >TAHUKAH KAMU ?</span>
                    <p class="t-j" style="text-align: justify;"  id="teks-ubah"></p>
                  </div>
                  <div class="mt-4 col-4   d-flex justify-content-end align-items-end" style="">
                    <img  src="{{ asset('assets/ikon/cat2pn.png') }}" class="" style="height: 180px;" alt="">
                  </div>
                </div>
              </div>
              <div class="col bg-white mt-3 d-flex justify-content-between align-items-center px-4" style="border-radius: 10px; box-shadow: 3px 6px 7px -4px rgba(0, 0, 0, 0.201);">
              <!-- <img src="../../assets/bookicon1.png" style="height:40px; color: #fe8d00;" alt="">  -->
                <span class="tjb" style="color: #3b73c5; font-weight: 500 !important;">Tunggu apalagi,ayo perluas pemahamanmu</span>
                <button class="btn-os fw-bold" style="height: 30px;" onclick="window.location.href = '{{ url('MateriPengguna') }}';">Mulai Belajar</button>

              </div>

          </div>
          </div>

          <!-- bagian kanan dashhh  -------------------------------------------------------------------------------->
          <!-- <div class="col col-lg-5 pt-4 pt-md-0 bg-white mt-5 mt-lg-0 dt  ">
            <div class="col-12 bg-white py-2" style="border-radius: 7px">
              <div class="row row-cols-1 j">
                <div class="col col-md-3 g-i">jao</div>
                <div class="col col-md-9 col-lg-12 col-xl-9">
                  <div class="col-12"><span class="t-d">Halo Naufal,</span></div>
                  <div class="col-12 ps-3">
                    <p class="t-di">“Selamat datang di <b class="to">NekoMind</b> ! Nikmati fitur-fitur yang tersedia dan mulai belajar untuk tingkatkan kemampuan dan pengetahuanmu Sekarang.... ”</p>
                  </div>
                  <div class="col-12 d-flex justify-content-end pe-1 pt-3">
                    <button class="px-3 py-1" style="background-color: #fe8d00; border-radius: 7px; border: none"><a class="text-decoration-none text-white" style="font-size: 18px; font-weight: 600" href="">Mulai Belajar</a></button>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- penutup bagian kanan dashhh  -------------------------------------------------------------------------------->
        </div>
      </div>
      <!-- bagian fitur jadwal dashh  -------------------------------------------------------------------------------->
      <div class="container p-cj">
        <div class="row row-cols-1 px-4 d-xl-flex justify-content-evenly align-items-center">
          <div class="col col-lg-7">
            <div class="col-12"><label class="j-j" for="">Ayo persiapkan dirimu !</label></div>
            <div class="col-12 px-3 pe-5"><p class="t-j">Jangan sampai terlewat hari-hari belajarmu! Fitur target belajar akan membantu kamu dalam mengatur jadwal belajar, semakin fokus deh mengejar tujuanmu.</p></div>
          </div>
          <div class="col col-lg-5" style="background-color: white; box-shadow: 0 20px 37px 0 rgba(0, 0, 0, 0.05);
          border-radius: 8px; padding-bottom: px; height: 250px">
             <div class="col-12">
               <div class="col pt-2 d-flex justify-content-between align-items-center" style="border-bottom: 1px solid rgba(0, 0, 0, 0.096)">
                 <span class="tjb" style="color: #FE8D00;">Misi Harian</span>
               </div>
               <div class="col px-2 py-2" style="margin-top: 10px; width: 100%; height: 180px; overflow: auto; box-sizing: border-box; ">
                 <div class="isi-j" style="position: relative">
                     <div class="col ">
                         @if ($ListdataMisi === '0')
                         <div class="col d-flex justify-content-center align-items-center">
                            <img width="150px" src="{{ asset('assets/ikon/kucingm.png') }}" alt="">
                            <span class="j-d2">Misi sudah kamu selesaikan</span>
                         </div>
                         @else
                         <div class="col  bg-white px-3 py-1" style="box-shadow: 1px 6px 9px 4px rgba(0, 0, 0, 0.035); border-radius:5px; border:1px rgba(0, 0, 0, 0.107) solid;">
                             <div class="col d-flex justify-content-between">
                                 <span class="t-lvl fw-bold">
                                     @if ($ListdataMisi->jenis === "soal")
                                     #UJIAN/LATIHAN/QUIZ
                                     @else
                                     #MATERI
                                     @endif
                                 </span>
                                     {{-- <span class="" style="color: #FE8D00;"> target : 90</span> --}}
                             </div>
                             <div class="col d-flex">

                             <div class="col "  style="color: ;">
                                 <div class="col ps-4" >
                                     <span class="t-lvl " style="font-size: 9px !imporntant;">
                                         {{ $ListdataMisi->misi }}
                                         <span>
                                 </div>
                             </div>
                             </div>
                             <div class="col d-flex">
                                 <div class="col">
                                     <span  class="fw-bolder" style="font-size: 12px; color:rgba(0, 0, 0, 0.419);"> target : {{ $ListdataMisi->target }}</span>
                                 </div>
                                 <div class=" d-flex">
                                     <div class="px-1 fw-bolder text-end" style="border-right:1px rgba(0, 0, 0, 0.076) solid;">
                                         <span class="" style="color:#fe8d00; font-size: 9px;">Poin : {{ $ListdataMisi->poin }}</span>
                                     </div>
                                     <div class="px-1 fw-bolder">
                                         <span class="" style="color:#fe8d00; font-size: 9px">Exp : {{ $ListdataMisi->exp }}</span>
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
        </div>
      </div>
      <!-- penutup bagian fitur jadwal dashh  -------------------------------------------------------------------------------->

      <!-- rekomendasi Materi   -------------------------------------------------------------------------------->
      <div class="container-fluid d-flex flex-column justify-content-center p-rm" style="background-color: #EAF0F6">
       <div class="col px-5">
        <div class="col-12 bg-white mt-5 p-3" style="border-radius: 8px">
          <div class="col-12 px-md-4"><h5 class="j-rm">Pelajaran yang anda sukai</h5></div>
          <div class="col-12 px-md-5">
            <div class="row row-cols-4 gap-4 d-md-flex justify-content-center my-3">
                @foreach ($pel as $item)
                <div class="col col-md-2 d-flex flex-column align-items-center justify-content-center">
                    <div class="rounded-circle d-flex align-items-center justify-content-center bg-white l-rm" style="border: 1px rgba(0, 0, 0, 0.285) solid">
                      <img class="i-rm2" src="{{ asset('assets/ikon/'.$item.'.svg') }}" alt="" />
                    </div>
                    <span class="t-rm mt-1 mt-md-2">{{ $item }} </span>
                  </div>
                @endforeach
            </div>
          </div>
        </div>
       </div>
        <div class="row gap-3 my-3">
          <div class="col-7 d-flex  p-3 px-4 bg-white" style="border-radius: 8px">
            <div class="d-flex align-items-end">
            <img src="{{ asset('assets/ikon/catPencil.png') }}" height="200px" alt="">

            </div>
            <div class="col d-flex align-items-end">
              <div class="col">
                <span class="j-rm " style="color: #fe8d00;">Mengukur Kemampuanmu</span>
                <p class="t-j px-3 pt-2  " style="text-align: justify;">
                  Di sini, kamu akan menemukan berbagai macam soal yang dirancang untuk mengukur dan meningkatkan kemampuan kamu, ada latihan ujian dan quiz yang siap menantangmu.
                </p>
                <div class="col d-flex justify-content-end pt-2">
                <button class="btn-os fw-bolder p-1 px-3" onclick="window.location.href  ='/Soal';">MULAI </button>

                </div>
              </div>
            </div>
          </div>
          <div class="col d-flex flex-column justify-content-between py-2 bg-white" style="border-radius: 8px">
            <span class="tjb" style="color: #009feb">Rekap Nilai</span>
            <canvas id="myChart2" style="max-height: 300px;">
            </canvas>
          </div>
        </div>
      </div>
      <div class="container px-5 py-4">
        <div class="col  d-flex flex-column  px-5 ">
          <div class=" col bg-white px-5 py-3" style="border-radius: 10px; box-shadow: 3px 6px 7px -4px rgba(0, 0, 0, 0.201);">
          <span>Rata-Rata Nilai yang dicapai</span>
            <canvas id="myChart" style="max-height: 300px;">
            </canvas>
          </div>
        </div>
      </div>
      <!-- penutup rekomendasi Materi   -------------------------------------------------------------------------------->

    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

@endsection

    <!-- dashboard  -------------------------------------------------------------------------------->

