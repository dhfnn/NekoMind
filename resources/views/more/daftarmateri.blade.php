@extends('layouts.App2')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
                    @if(session('error'))
            <span class="mes-e">
                {{ session('error') }}
            </span>
        @endif
      <div class="col-12">
        <div class="col d-flex justify-content-end">
            <a href="{{ url('Pelajaran') }} " class="d-flex me-3" >
                <h6 class="text-sm opacity-7 me-1">kembali</h6>
                <i class="text-sm opacity-7 fa-solid fa-angle-right"></i>
            </a>

        </div>
        <div class="card mb-4">
          <div class="card-header pb-0 d-flex justify-content-between">
            <h6>Tabel Daftar Materi untuk kelas {{ $kelas->kelas }}</h6>

            <a href="#exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="d-flex justify-content-between align-items-center px-2 me-2" style="border: 1px solid rgba(0, 0, 0, 0.075); border-radius:10px ;color:black !important;">  <i class="fa-solid fa-plus"></i></a>
            @include('component.Mtambahpelajaran')
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0 dataTablefiture px-5" id="">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NAMA MATERI</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">SEMESTER</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">JUMLAH BAB</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">JENIS MATERI</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Data dari PHP dihapus di sini -->
                  @foreach ($dataPelajaran as $data )

                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center text-uppercase ">
                          <h6 class="mb-0 text-sm">{{ $data ->namapelajaran }}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{ $data->id_semester }}</p>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{ $data->jumlahBab }}</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-capitalize text-secondary text-xs font-weight-bold">{{ $data -> jenis }}</span>
                    </td>
                </td>
                <td class="align-middle text-center ">
                  <a class="text-secondary font-weight-bold text-xs pe-1" data-toggle="tooltip" data-        original-title="Edit user"   href="#exampleModaledit{{$data->id}}" data-bs-toggle="modal" data-bs-target="#editmodal{{ $data->id }}" style="border-right: 1px #8392AB solid;">Edit</a>

                  <a class="text-danger font-weight-bold text-xs ps-1" type="button" data-bs-toggle="modal" data-bs-target="#hapusmodal" >Hapus</a>
            @include('component.Mhapuspelajaran')


                </td>

            </td>
            @include('component.Meditpelajaran')
                    <td class="align-middle text-center">
                        <a href="{{ route('permateri.show', $data->id )}}" class="text-secondary text-xs font-weight-bold">Lihat</a>

                        <span class="p-3">
                          <i class="fa-solid fa-caret-right"></i>
                        </span>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                  <!-- Data dari PHP dihapus di sini -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection