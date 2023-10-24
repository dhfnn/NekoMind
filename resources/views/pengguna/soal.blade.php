@extends('layouts.App')
@section('main')
<main class="">
    <div class="container-fluid px-md-5 mt-md-5 pt-3">
     <div class="col mt-1 mt-md-4 px-lg-5">
        <div class="row g-1 g-md-0 d-flex justify-content-between px-2 px--5">
          <div class="col-12 col-md-7 col-lg-8 col-xl-9 bagan-js px-2 px-md-4 ">
            <div class="d-flex align-items-center">
              <img src="{{ asset('assets/ikon/paw.svg') }}" style="height: 18px; width: 18px;" alt="">
              <span class="t-bjs ms-1 d-none d-lg-block">Jumlah ujian yang sudah kamu selesaikan sebanyak :</span>
              <span class="t-bjs ms-2 d-block d-lg-none">Ujian yang diselesaikan :</span>
            </div>
            <span class="fw-bold" style="color: #3b72c5c9;font-size: 16px;">10 Ujian</span>
          </div>
          <div class="col-4 col-md bagan-js p-0 ms-md-2 fw-bold d-flex justify-content-center" style="color: #3b72c5c9;">Benar:25 </div>
          <div class="col-4 col-md bagan-js p-0 ms-md-2 fw-bold d-flex justify-content-center" style="color: #3b72c5c9;">Salah:72 </div>
          <div class="col-3 col-md ms-md-2 p-0 position-relative m-kls">
            <div class="col ms-md-2 bagan-ks fw-bold p-0 px-3 mb-3">
              <!-- <button class="px-3"> -->
                <span style="color: #3b73c5;">Kelas</span> <i class="fa-solid fa-angle-down ik-putar" style="color: #3b73c5;"></i>
              <!-- </button> -->
            </div>
            <div class="col p-2 ps-3  position-absolute pt-1 w-kls" style="">
              <div class="col py-1">
                <span class="pk">Pilih Kelas</span>
              </div>
              <div class="content">
                <div class=" row row-cols-3 row-cols-sm-4">
                  <div class="col p-0">
                    <button class="btn-osk mb-2">Kelas 1</button>
                  </div>
                  <div class="col p-0">
                    <button class="btn-osk mb-2">Kelas 2</button>
                  </div>
                  <div class="col p-0">
                    <button class="btn-osk mb-2">Kelas 3</button>
                  </div>
                  <div class="col p-0">
                    <button class="btn-osk mb-2">Kelas 4</button>
                  </div>
                  <div class="col p-0">
                    <button class="btn-osk mb-2">Kelas 5</button>
                  </div>
                  <div class="col p-0">
                    <button class="btn-osk mb-2">Kelas 6</button>
                  </div>
                  <div class="col p-0">
                    <button class="btn-osk mb-2">Kelas 7</button>
                  </div>
                  <div class="col p-0">
                    <button class="btn-osk mb-2">Kelas 8</button>
                  </div>
                  <div class="col p-0">
                    <button class="btn-osk mb-2">Kelas 9</button>
                  </div>
                  <div class="col p-0">
                    <button class="btn-osk mb-2">Kelas 10</button>
                  </div>
                  <div class="col p-0">
                    <button class="btn-osk mb-2">Kelas 11</button>
                  </div>
                  <div class="col p-0">
                    <button class="btn-osk mb-2">Kelas 12</button>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
       <div class="col mt-4">
        <div class="col">
            <div class=" d-flex  ">
               <div class="opsi-soal">
                   <button class="btn-os btn-act p-sm-1 px-sm-3 me-1">Semua</button>
                   <button class="btn-os p-sm-1 px-sm-3 me-1">Latihan soal</button>
                   <button class="btn-os p-sm-1 px-sm-3 me-1">Ujian</button>
                   <button class="btn-os p-sm-1 px-sm-3 me-1">UTBK</button>
               </div>
            </div>
          </div>
         <div class="row  row-cols-1 row-cols-md-2 row-cols-xl-3 row-cols-xxl-4 g-1 g-md-2 mt-1 mt-md-2 mb-5 pb-5">
            @foreach ($dataUjian as $data)

            <div class="col px-3 px-md-0">
              <div class="row  mx-md-2 w-soal p-2 px-4 py-3">
                <div class="col-9 p-0 ws-k">
                  <span class="wsk-j">{{ $data->judul }}</span>
                  <div class="wsk-p ">
                    <i class="fa-regular fa-circle-question"></i>
                  <span class="ms-1"> - </span>
                  </div>
                  <div class="wsk-w">
                    <i class="fa-solid fa-stopwatch"></i>
                    <span class="ms-2 mt-1">{{ $data->waktu }} Menit</span>
                  </div>
                </div>
                <div class="col p-0 w-st">
                  <a href="{{ url('Soal/' .$data->id) }}" class="text-decoration-none d-flex align-items-center">
                    <span class="me-1">mulai</span>
                      <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
                  </a>
                </div>
              </div>
            </div>
            @endforeach


         </div>
       </div>
     </div>
    </div>
   </main>
@endsection
