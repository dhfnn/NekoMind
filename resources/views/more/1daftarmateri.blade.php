@extends('layouts.App3')

@section('main')

@endsection
<main class="" style="background-color: #f1f1f1a5;">
    <nav class="navbar" style="background-color: white; padding: 0px !important;">
        <div class="container-fluid px-4 px-md-5 pt-4 pt-md-3  pb-3 pb-md-0 py-md-4 position-relative" style="display: flex !important; align-items: center !important;">

            <div class="col-12 d-flex justify-content-between pt-1 pt-md-3 py-md-3 ">
                <a href="{{ url('/materi') }}" class="" >
                    <i class="fa-solid fa-arrow-left-long bck-materi" style=""></i>
                </a>
                <span class="jn-materi " style="color: #4E4E4E !important">
                    Daftar materi kelas {{ $kelas->kelas }}
                </span>
                <div class="d-flex justify-content-between align-items-center" style="">
                    <a href="#exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal" class="text-decoration-none  p-2 " style="border: 1px solid rgba(0, 0, 0, 0.075); border-radius:10px ;color:black !important; ">  <i class="fa-solid fa-plus"></i></a>

                      <!-- Modal -->
                     @include('component.Mtambahpelajaran')


                </div>
            </div>
        </div>
        <div class="container-fluid pt-3  px-5">
            <div class="col pindah-semester">
                <div class="row text-center t-semester">
                    <div class="col py-1 pilih-sa" id="semester1">
                        <a class="tdn" href="#">Semester 1</a>
                    </div>
                    <div class="col py-1 pilih-s" id="semester2">
                        <a href="#" class="tdn">Semester 2</a>
                    </div>
                </div>
            </div>
        </div>
        </nav>
    <div class="container py-4">
      <div class="col">
        <div class="col-12 pb-2 pb-md-5">
          <div class="d-flex justify-content-between pt-4 pe-1">
            <h4 class="fs-5" style="color: #4e4e4e; font-weight: bold">Materi Pelajaran</h4>

          </div>
          <div class="col pt-3" style="">

            <div class="row px-2 row-cols-3 row-cols-sm-4 row-cols-md-5 row-cols-lg-6" style="background-color: none">

              <div class="col pb-3 d-flex flex-column align-items-center justify-content-center">
                <a href="materi-isi.html" class="d-flex flex-column align-items-center justify-content-center text-decoration-none">
                  <div class="rounded-circle d-flex align-items-center justify-content-center bg-white l-rm" style="">
                    <img class="i-rm2" src="{{ asset('assets/ikon/fisika.svg') }}" alt="" />
                  </div>
                  <span class="t-rm mt-1 mt-md-2">Fisika</span>
                </a>
              </div>
              <div class="col pb-3 d-flex flex-column align-items-center justify-content-center">
                <a href="" class="d-flex flex-column align-items-center justify-content-center text-decoration-none">
                  <div class="rounded-circle d-flex align-items-center justify-content-center bg-white l-rm" style="">
                    <img class="i-rm2" src="{{ asset('assets/ikon/kimia.svg') }}" alt="" />
                  </div>
                  <span class="t-rm mt-1 mt-md-2">kimia</span>
                </a>
              </div>
              <div class="col pb-3 d-flex flex-column align-items-center justify-content-center">
                <a href="" class="d-flex flex-column align-items-center justify-content-center text-decoration-none">
                  <div class="rounded-circle d-flex align-items-center justify-content-center bg-white l-rm" style="">
                    <img class="i-rm2" src="{{ asset('assets/ikon/biologi.svg') }}" alt="" />
                  </div>
                  <span class="t-rm mt-1 mt-md-2">biologi</span>
                </a>
              </div>
              <div class="col pb-3 d-flex flex-column align-items-center justify-content-center">
                <a href="" class="d-flex flex-column align-items-center justify-content-center text-decoration-none">
                  <div class="rounded-circle d-flex align-items-center justify-content-center bg-w hite l-rm" style="">
                    <img class="i-rm" src="{{ asset('assets/ikon/mate.svg') }}" alt="" />
                  </div>
                  <span class="t-rm nw mt-1 mt-md-2">Matematika </span>
                </a>
              </div>
              <div class="col pb-3 d-flex flex-column align-items-center justify-content-center">
                <a href="" class="d-flex flex-column align-items-center justify-content-center text-decoration-none">
                  <div class="rounded-circle d-flex align-items-center justify-content-center bg-white l-rm" style="">
                    <img class="i-rm2" src="{{ asset('assets/ikon/biologi.svg') }}" alt="" />
                  </div>
                  <span class="t-rm mt-1 mt-md-2">B. Indonesia</span>
                </a>
              </div>
              <div class="col pb-3 d-flex flex-column align-items-center justify-content-center">
                <a href="" class="d-flex flex-column align-items-center justify-content-center text-decoration-none">
                  <div class="rounded-circle d-flex align-items-center justify-content-center bg-white l-rm" style="">
                    <img class="i-rm" src="{{ asset('assets/ikon/mate.svg') }}" alt="" />
                  </div>
                  <span class="t-rm nw mt-1 mt-md-2">Matematika</span>
                </a>
              </div>
              <div class="col pb-3 d-flex flex-column align-items-center justify-content-center">
                <a href="" class="d-flex flex-column align-items-center justify-content-center text-decoration-none">
                  <div class="rounded-circle d-flex align-items-center justify-content-center bg-white l-rm" style="">
                    <img class="i-rm2" src="{{ asset('assets/ikon/kimia.svg') }}" alt="" />
                  </div>
                  <span class="t-rm mt-1 mt-md-2">Sejarah</span>
                </a>
              </div>
              <div class="col pb-3 d-flex flex-column align-items-center justify-content-center">
                <a href="" class="d-flex flex-column align-items-center justify-content-center text-decoration-none">
                  <div class="rounded-circle d-flex align-items-center justify-content-center bg-white l-rm" style="">
                    <img class="i-rm" src="{{ asset('assets/ikon/mate.svg') }}" alt="" />
                  </div>
                  <span class="t-rm nw mt-1 mt-md-2">Geografi</span>
                </a>
              </div>
              <div class="col pb-3 d-flex flex-column align-items-center justify-content-center">
                <a href="" class="d-flex flex-column align-items-center justify-content-center text-decoration-none">
                  <div class="rounded-circle d-flex align-items-center justify-content-center bg-white l-rm" style="">
                    <img class="i-rm2" src="{{ asset('assets/ikon/kimia.svg') }}" alt="" />
                  </div>
                  <span class="t-rm mt-1 mt-md-2">Sosiologi</span>
                </a>
              </div>
              <div class="col pb-3 d-flex flex-column align-items-center justify-content-center">
                <a href="" class="d-flex flex-column align-items-center justify-content-center text-decoration-none">
                  <div class="rounded-circle d-flex align-items-center justify-content-center bg-white l-rm" style="">
                    <img class="i-rm2" src="{{ asset('assets/ikon/biologi.svg') }}" alt="" />
                  </div>
                  <span class="t-rm mt-1 mt-md-2">Ekonomi </span>
                </a>
              </div>
            </div>
          </div>
        </div>

        {{-- <div class="col-12 pb-5">
          <div class="col pt-4">
            <h4 class="fs-5" style="color: #4e4e4e; font-weight: bold">Materi UTBK</h4>
          </div>
          <div class="col pt-3" style="">
            <div class="row px-2 row-cols-3 row-cols-sm-4" style="background-color: none">
              <div class="col pb-3 d-flex flex-column align-items-center justify-content-center mt-">
                <div class="k-lm d-flex align-items-center justify-content-center bg-white l-rm" style="">
                  <img class="i-rm2" src="{{ asset('') }}assets/ikon/fisika.svg" alt="" />
                </div>
                <span class="t-rm mt-1 mt-md-2 nw">Penalaran Umum</span>
              </div>
              <div class="col pb-3 d-flex flex-column align-items-center justify-content-center">
                <div class="k-lm d-flex align-items-center justify-content-center bg-white l-rm" style="">
                  <img class="i-rm2" src="{{ asset('assets/ikon/biologi.svg') }}" alt="" />
                </div>
                <span class="t-rm mt-1 mt-md-2">Lit. B. Indonesia</span>
              </div>
              <div class="col pb-3 d-flex flex-column align-items-center justify-content-center">
                <div class="k-lm d-flex align-items-center justify-content-center bg-white l-rm" style="">
                  <img class="i-rm" src="{{ asset('assets/ikon/mate.svg') }}" alt="" />
                </div>
                <span class="t-rm nw mt-1 mt-md-2">Lit. B. Inggris</span>
              </div>
              <div class="col pb-3 d-flex flex-column align-items-center justify-content-center">
                <div class="k-lm d-flex align-items-center justify-content-center bg-white l-rm" style="">
                  <img class="i-rm2" src="{{ asset('assets/ikon/kimia.svg') }}" alt="" />
                </div>
                <span class="t-rm mt-1 mt-md-2 nw">Penalaran Matematika</span>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
    </div>

  </main>
