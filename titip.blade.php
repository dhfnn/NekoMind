@extends('layouts.App')
@section('main')
<main class="" >
    <div class="col-12 d-flex d-md-none justify-content-between align-items-center px-4 position-absolute" style="">
      <label class="fw-bold fs-2 pt-3" style="color: #fe8d00">NekoMind</label>
      <i class="fa-solid fa-magnifying-glass pt-4 pe-3" style="color: rgb(52, 52, 52); font-size: 15px"></i>
    </div>
    <div class="container-fluid text-dark bg-white pt-0 pt-md-5" style="padding-right: 0px !important; padding-left: 0px !important; background-color: #F8F9FA !important;">
      <div class="d-flex justify-content-center jr-d pt-5">
        <div class="row row-cols-1 dp d-flex justify-content-center">
          <div class="col col-lg-9">
            <div class="col-12 bg-white pt-2 px-3 mt-4 mt-md-0" style="border-radius: 7px; box-shadow: 3px 6px 7px -4px rgba(0, 0, 0, 0.201)">
              <div class="col d-flex align-items-center px-3 pt-2">
                <div class="col-3 col-sm-2 bg-white d-flex justify-content-center pt-0 pt-sm-2 ps-sm-2" style="border-radius: 7px">
                  <div class="rounded-circle gam-p"></div>
                </div>
                <div class="col-9 col-sm-10 pe-2 pe-sm-4 ps-2 ps-sm-3">
                  <div class="col-12 d-flex justify-content-between align-items-end py-sm-1" style="font-size: 15px; font-weight: 600">
                    <label for="" class="ps-1 t-un">{{ $datapengguna->nama}}</label>
                    <span class="pe-2 t-lvl">Level {{ $levelPengguna }}</span>
                  </div>
                  <div class="col-12" style="background-color: #cdd2dc51; height: 15px; border-radius: 5px">
                    {{-- <div class="gariss d-flex justify-content-center align-items-center" style="width: 95%; background-color: #b8cbf2; height: 15px; border-radius: 5px">
                      <!-- <span>-</span>  -------------------------------------------------------------------------------->
                    </div> --}}
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
                    <div class="col-5 bg-white d-flex px-0 py-3" style="border: 1px rgba(0, 0, 0, 0.107) solid; border-radius: 7px">
                      <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="rounded-circle d-flex align-items-center justify-content-center l-d" style="background-color: #fe8d00">
                          <i class="i-ld fa-solid fa-book-bookmark"></i>
                        </div>
                      </div>
                      <div class="col-8 d-flex flex-column">
                        <span class="fw-bold j-d"> 10</span>
                        <label for="" class="j-d2">Materi yang dibaca</label>
                      </div>
                    </div>

                    <div class="col-5 bg-white d-flex px-0 py-3" style="border: 1px rgba(0, 0, 0, 0.107) solid; border-radius: 7px">
                      <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="rounded-circle d-flex align-items-center justify-content-center l-d" style="background-color: #3b73c5">
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
                    <div class="col-5 bg-white d-flex px-0 py-3" style="border: 1px rgba(0, 0, 0, 0.107) solid; border-radius: 7px">
                      <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="rounded-circle d-flex align-items-center justify-content-center l-d" style="background-color: #ff2b2b">
                          <i class="i-ld fa-solid fa-xmark"></i>
                        </div>
                      </div>
                      <div class="col-8 d-flex flex-column">
                        <span class="fw-bold j-d">{{  $totalSalah }}</span>
                        <label for="" class="j-d2">Jawaban Salah</label>
                      </div>
                    </div>
                    <div class="col-5 bg-white d-flex px-0 py-3" style="border: 1px rgba(0, 0, 0, 0.107) solid; border-radius: 7px">
                      <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="rounded-circle d-flex align-items-center justify-content-center l-d" style="background-color: #4cd900">
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
        </div>
      </div>

      <!-- bagian fitur jadwal dashh  -------------------------------------------------------------------------------->
      <div class="container p-cj">
        <div class="row row-cols-1 px-4 d-xl-flex justify-content-evenly align-items-center">
          <div class="col col-lg-7">
            <div class="col-12"><label class="j-j" for="">Ayo persiapkan dirimu !</label></div>
            <div class="col-12"><p class="t-j">Jangan sampai terlewat hari-hari belajarmu! Fitur target belajar akan membantu kamu dalam mengatur jadwal belajar, semakin fokus deh mengejar tujuanmu.</p></div>
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
                            <span>data tidak tersedia</span>
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
      <div class="container-fluid d-flex justify-content-center p-rm" style="background-color: #3b73c5">
        <div class="col-12 bg-white my-5 p-3" style="border-radius: 8px">
          <div class="col-12 px-md-4"><h5 class="j-rm">Pelajaran Favorit</h5></div>
          <div class="col-12 px-md-5">
            <div class="row row-cols-4 gap-4 d-md-flex justify-content-center my-3">
              <div class="col col-md-2 d-flex flex-column align-items-center justify-content-center">
                <div class="rounded-circle d-flex align-items-center justify-content-center bg-white l-rm" style="border: 1px rgba(0, 0, 0, 0.285) solid">
                  <img class="i-rm2" src="../../assets/fisika.svg" alt="" />
                </div>
                <span class="t-rm mt-1 mt-md-2">Fisika</span>
              </div>
              <div class="col col-md-2 d-flex flex-column align-items-center justify-content-center">
                <div class="rounded-circle d-flex align-items-center justify-content-center bg-white l-rm" style="border: 1px rgba(0, 0, 0, 0.285) solid">
                  <img class="i-rm2" src="../../assets/kimia.svg" alt="" />
                </div>
                <span class="t-rm mt-1 mt-md-2">kimia</span>
              </div>
              <div class="col col-md-2 d-flex flex-column align-items-center justify-content-center">
                <div class="rounded-circle d-flex align-items-center justify-content-center bg-white l-rm" style="border: 1px rgba(0, 0, 0, 0.285) solid">
                  <img class="i-rm2" src="../../assets/biologi.svg" alt="" />
                </div>
                <span class="t-rm mt-1 mt-md-2">biologi</span>
              </div>
              <div class="col col-md-2 d-flex flex-column align-items-center justify-content-center">
                <div class="rounded-circle d-flex align-items-center justify-content-center bg-white l-rm" style="border: 1px rgba(0, 0, 0, 0.285) solid">
                  <img class="i-rm" src="../../assets/mate.svg" alt="" />
                </div>
                <span class="t-rm nw mt-1 mt-md-2">Matematika Minat</span>
              </div>
              <div class="col col-md-2 d-flex flex-column align-items-center justify-content-center">
                <div class="rounded-circle d-flex align-items-center justify-content-center bg-white l-rm" style="border: 1px rgba(0, 0, 0, 0.285) solid">
                  <img class="i-rm" src="../../assets/mate.svg" alt="" />
                </div>
                <span class="t-rm nw mt-1 mt-md-2">Matematika Wajib</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- penutup rekomendasi Materi   -------------------------------------------------------------------------------->
    </div>
  </main>
@endsection

    <!-- dashboard  -------------------------------------------------------------------------------->

