@extends('layouts.App')

@section('main')

@endsection
<main class="" style="background-color: #F8F9FA;">
    <div class="container-fluid mt-md-5 py-3" style="border-radius: 0px 0px 20px 20px; background: linear-gradient(180deg, #009feb 0%, rgba(0, 159, 235, 0.8) 58.53%, rgba(0, 159, 235, 0.44) 108.81%, rgba(0, 159, 235, 0) 158.27%)">
      <div class="container">
        <div class="col pt-2 pt-md-5">
          <div class="col-12 pt-3 py-3">
            <div class="row e2-ms" class=" " style="">
              <div class="col-9 col-ms-7 col-md-5 col-xl-3">
                <div class="search-ms p-1 px-x">
                  <input type="text" class="i-ms ps-2" placeholder="Mau belajar apa hari ini?" />
                  <button style="border: none; background-color: white; display: flex; align-items: center"><i class="fa-solid fa-circle-arrow-right ic-ms"></i></button>
                </div>
              </div>
              <select
                class="d-none d-md-flex"
                name=""
                id=""
                style="height: 35px !important; width: 75px !important; font-size: 13px !important; border: none; color: rgb(100, 100, 100); padding: 1px; border-radius: 7px; outline: none; background-color: white"
              >
                <option value="Kelas_1">Kelas 1</option>
                <option value="Kelas_2">Kelas 2</option>
                <option value="Kelas_3">Kelas 3</option>
                <option value="Kelas_4">Kelas 4</option>
                <option value="Kelas_5">Kelas 5</option>
                <option value="Kelas_6">Kelas 6</option>
                <option value="Kelas_7">Kelas 7</option>
                <option value="Kelas_8">Kelas 8</option>
                <option value="Kelas_9">Kelas 9</option>
                <option value="Kelas_10">Kelas 10</option>
                <option value="Kelas_11">Kelas 11</option>
                <option value="Kelas_12">Kelas 12</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container py-4">
      <div class="col">
        <div class="col-12 pb-2 pb-md-5">
          <div class="d-flex justify-content-between pt-4 pe-1">
            <h4 class="fs-5" style="color: #4e4e4e; font-weight: bold">Materi Pelajaran</h4>
            <select class="d-md-none" name="" id="" style="width: 70px !important; font-size: 13px !important; border: none; color: rgb(100, 100, 100); padding: 1px; outline: none; background-color: white">
              <option value="Kelas_1" style="">ubah 1</option>
              <option value="Kelas_2">Kelas 2</option>
              <option value="Kelas_3">Kelas 3</option>
              <option value="Kelas_4">Kelas 4</option>
              <option value="Kelas_5">Kelas 5</option>
              <option value="Kelas_6">Kelas 6</option>
              <option value="Kelas_7">Kelas 7</option>
              <option value="Kelas_8">Kelas 8</option>
              <option value="Kelas_9">Kelas 9</option>
              <option value="Kelas_10">Kelas 10</option>
              <option value="Kelas_11">Kelas 11</option>
              <option value="Kelas_12">Kelas 12</option>
            </select>
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

        <div class="col-12 pb-5">
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
        </div>
      </div>
    </div>
  </main>
