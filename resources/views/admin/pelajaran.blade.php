@extends('layouts.App2')
@section('content')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex " id="navbar">
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item d-xl-none ps-3 d-flex align-items-center ">
            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </a>
          </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="container-fluid py-1">
    <div class="row"style="max-height: 540px">
      <div class="col-lg-8  ">
        <div class="col d-flex justify-content-between">
            <span>Ujian/Soal</span>
                <a type="button" class="p-2 d-flex justify-content-between align-items-center me-2" style="border: 1px solid rgba(0, 0, 0, 0.075); border-radius:10px ;color:black !important;">  <i class="fa-solid fa-plus"></i>
                </a>
        </div>
        <table class="table align-items-center mb-0 dataTablefiture px-5" id="dataTabledata">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">JUDUL</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">WAKTU</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">JENIS</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($dataUjian as $data )
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">
                        {{ $data->judul }}
                    </h6>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">
                    {{ $data->waktu }}
                </p>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-secondary text-xs font-weight-bold">
                    {{  $data->jenis }}
                    </span>
                </td>

                <td class="align-middle text-center">

                    @if ($data->soal->isEmpty()) {{-- Cek apakah tidak ada data soal yang terkait --}}
                    <button class="t-sep" style="font-size: 10px;" type="button" data-bs-toggle="modal" data-bs-target="#tambahpertanyaan" data-ujian="{{ $data->jenis }}" data-ujianid="{{ $data->id }}">Tambah</button>

                  @else
                  <a class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user"  href="">Lihat</a>
                  @endif




                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
      <div class="col-lg-4 mt-4 mt-lg-0" style="height: 540px;">
        <div class="card h-100">
          <div class="card-header pb-0 p-3">
            <div class="row" >
              <div class="col-6 d-flex align-items-center">
                <h6 class="mb-0">Daftar Kelas</h6>
              </div>
            </div>
        </div>
          <div class="card-body p-3 pb-0 hs" >

              <ul class="list-group px-2" style="height: 450px; overflow-y: auto;">
                @foreach ($dataKelas as $kelas)
                <a href="{{ route('materi.show', $kelas->id) }}" class="" style=" cursor: pointer; ">
                <li class="list-group-item border-0 d-flex justify-content-between px-3 mb-2 border-radius-lg bg-gray-100" >
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark font-weight-bold text-sm">Kelas {{ $kelas->kelas }}</h6>
                      @if ( $kelas->jumlahMateri > 0 )

                      <span class="text-xs" style="color: #67748E;">Ada {{ $kelas->jumlahMateri }} materi yang tersedia</span>
                      @else
                      <span class="text-xs" style="color: #67748E;">Belum ada materi satupun</span>
                      @endif
                    </div>
                    <div class="d-flex align-items-center">
                            <i class="fa-solid fa-caret-right" style="color: #344767;"></i>
                        </div>
                    </li>
                </a>
                @endforeach


            </ul>
        </div>
    </div>
</div>
    </div>
  </div>
@endsection

