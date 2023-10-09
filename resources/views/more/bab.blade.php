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
            <a href="{{ url('Materi/' . $data->id) }}" class="d-flex me-3" >
                <h6 class="text-sm opacity-7 me-1">kembali</h6>
                <i class="text-sm opacity-7 fa-solid fa-angle-right"></i>
            </a>

        </div>
        <div class="card mb-4">
          <div class="card-header pb-0 d-flex justify-content-between">
            <h6>BAB</h6>

            <a href="#exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="d-flex justify-content-between align-items-center px-2 me-2" style="border: 1px solid rgba(0, 0, 0, 0.075); border-radius:10px ;color:black !important;">  <i class="fa-solid fa-plus"></i></a>
            @include('component.Mtambahbab')
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
                  </tr>
                </thead>
                <tbody>
                  <!-- Data dari PHP dihapus di sini -->
                  {{-- @foreach ($dataPelajaran as $data ) --}}

                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center text-uppercase ">
                          {{-- <h6 class="mb-0 text-sm">{{ $pelajaran-> namapelajaran }}</h6> --}}
                        </div>
                      </div>
                    </td>
                    <td>
                      {{-- <p class="text-xs font-weight-bold mb-0">{{ $pelajaran>id_semester }}</p> --}}
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">none</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      {{-- <span class="text-capitalize text-secondary text-xs font-weight-bold">{{ $pelajaran->jenis }}</span> --}}
                    </td>
                    <td class="align-middle text-center">
                      <a href="#" class="text-secondary text-xs font-weight-bold">
                        <span class="">
                          <i class="fa-solid fa-caret-right"></i>
                        </span>
                      </a>
                    </td>
                  </tr>
                  {{-- @endforeach --}}
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