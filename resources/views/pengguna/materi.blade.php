@extends('layouts.App')

@section('main')

@endsection
<main class="" style="background-color: #F8F9FA;">
    <div class="container-fluid py-4 px-5">
      <div class="row mt-5">
        <div class="col pb-2 pb-md-5">
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
        <div class="col-12 col-xl-4">
                <div class="container " style="border-radius: 15px; ">

                  <div class="row d-flex justify-content-center">
                    <div class="col">

                      <div class="card" id="chat2" style="box-shadow: 0 20px 37px 0 rgba(0, 0, 0, 0.05)">
                        <div class=" d-flex justify-content-between align-items-center p-3">
                          <h5 class="mb-0">Diskusi Bersama</h5>
                        </div>
                        <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px; overflow-y: auto;">

                            @foreach ($datachat as $item)
                            @if ($item->user->id === $userId)
                            <div class="d-flex flex-row justify-content-end mb-4 pt-1">
                                <div>
                                  <p class="small me-3 mb-0 rounded-3 text-muted d-flex justify-content-end">{{ $item->user->username === $userdata->username ? 'Saya' : '' }}
                                </p>
                                <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">{{ $item->pesan }}</p>
                              </div>
                              <img src="{{ asset('assets/pp/' .$item->user->foto .'.jpg') }} "
                                alt="avatar 1" style="width: 45px; height: 100%;" class="rounded-circle">
                            </div>
                            @else

                            <div class="d-flex flex-row mb-3 justify-content-start">
                                <img src="{{ asset('assets/pp/' .$item->user->foto .'.jpg') }} " class="rounded-circle"
                                alt="avatar 1" style="width: 45px; height: 100%;">
                                <div>
                                    <p class="small ms-3 mb-0 rounded-3 text-muted">{{ $item->user->username }}</p>
                              <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">{{ $item->pesan }}</p>

                                </div>
                            </div>
                            @endif
                        @endforeach






                        </div>
                        <div class="card-footer bg-white text-muted d-flex justify-content-start align-items-start px-3">
                          <img class="rounded-circle" src="{{ asset('assets/pp/' .$userdata->foto. '.jpg') }}"
                            alt="avatar 3" style="width: 40px; height: 100%;">
                            <form class="d-flex w-100" action="{{ url('chatpengguna') }}" method="POST">
                            @csrf
                          <input type="text" class="form-control form-control-lg" name="pesan" id="exampleFormControlInput1"
                            placeholder="Masukan pesan">

                          <button class="ms-3" type="submit" style="border: none; background:white;"><i class="fas fa-paper-plane" style="color: blue"></i></button>
                        </form>

                        </div>
                      </div>

                    </div>
                  </div>

                </div>
        </div>
      </div>
    </div>
  </main>
