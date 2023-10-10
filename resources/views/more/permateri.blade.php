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
            <a href="{{ url('Pelajaran/' . $pelajaran->id_kelas) }}" class="d-flex me-3" >
                <h6 class="text-sm opacity-7 me-1">kembali</h6>
                <i class="text-sm opacity-7 fa-solid fa-angle-right"></i>
            </a>

        </div>
        <div class="card mb-4">
          <div class="card-header pb-0 d-flex justify-content-between">
            <h6>BAB MATERI {{ $pelajaran->namapelajaran }} id {{ $pelajaran->id }}  semester {{ $pelajaran->id_semester }} id_kelas {{ $pelajaran->id_kelas }}</h6>

            <a href="#exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="d-flex justify-content-between align-items-center px-2 me-2" style="border: 1px solid rgba(0, 0, 0, 0.075); border-radius:10px ;color:black !important;">  <i class="fa-solid fa-plus"></i></a>
            @include('component.Mtambahbab')
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0 dataTablefiture px-5" id="">
                <thead class="">
                  <tr class="">
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">BAB</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">JUDUL</th>
                    {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NAMA FILE MATERI</th> --}}
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                  </tr>
                </thead>
                <tbody class="">
                  <!-- Data dari PHP dihapus di sini -->
                  @foreach ($babs as $data )

                  <tr class="">
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center text-uppercase ">
                          <h6 class="mb-0 text-sm">{{ $data-> subab }}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{ $data->judul }}</p>
                    </td>
                    
                    {{-- <td>
                      <p class="text-xs font-weight-bold mb-0">{{ $data->isi_materi }}</p>
                    </td> --}}
                    <td class="align-middle text-center">
                      <a href="{{ url('Bab/' .$data->id) }}
                        " class="text-secondary text-xs font-weight-bold">
                        <span class="">
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