@extends('layouts.App')

@section('main')

@endsection
<main class="" style="background-color: #F8F9FA;">
    <div class="container py-4">
      <div class="col mt-5">
        <div class="col-12 pb-2 pb-md-5">
          <div class="d-flex justify-content-between pt-4 pe-1">
            <h4 class="fs-5" style="color: #4e4e4e; font-weight: bold">Materi Pelajaran</h4>
            <select
            class=""
            name=""
            id="kelasFilter"
            style="height: 35px !important; width: 75px !important; font-size: 13px !important; border: none; color: rgb(100, 100, 100); padding: 1px; border-radius: 7px; outline: none; background-color: white; box-shadow:0 15px 27px 0 rgba(45, 45, 45, 0.05);"
          >
          <option value="">PILIH</option>
          {{-- <option value="semua">SEMUA</option> --}}
          <option value="1">Kelas 1</option>
            <option value="2">Kelas 2</option>
            <option value="3">Kelas 3</option>
            <option value="4">Kelas 4</option>
            <option value="5">Kelas 5</option>
            <option value="6">Kelas 6</option>
            <option value="7">Kelas 7</option>
            <option value="8">Kelas 8</option>
            <option value="9">Kelas 9</option>
            <option value="10">Kelas 10</option>
            <option value="11">Kelas 11</option>
            <option value="12">Kelas 12</option>
          </select>
          </div>
          <div class="col mt-4" style="">
            <div class="row px-2 row-cols-3 row-cols-sm-4 row-cols-md-5 row-cols-lg-6" style="background-color: none">
                @if(count($dataPelajaran) > 0)
                @foreach ($dataPelajaran as $pelajaran)
                <div class="col pb-3 d-flex flex-column align-items-center justify-content-center">
                    <a href="{{ url('MateriPengguna/' .$pelajaran->id) }}" class="d-flex flex-column align-items-center justify-content-center text-decoration-none">
                        <div class="rounded-circle d-flex align-items-center justify-content-center bg-white l-rm" style="">
                            <img class="i-rm2" src="{{ asset('assets/ikon/'.$pelajaran->namapelajaran .'.svg') }}" alt="" />
                        </div>
                        <span class="t-rm mt-1 mt-md-2">{{ $pelajaran->namapelajaran }}</span>
                    </a>
                </div>
                @endforeach
            @else
            <div class=" text-center" style="color:#4e4e4e; font-size:13px;">
                <p>Tidak tersedia</p>
            </div>
            @endif


            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
