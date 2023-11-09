@extends('layouts.App2')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <form id="dynamicForm" action="{{ url('Pelajaran/soal/' .$ujianId) }}" method="POST">
            @csrf
            <div class="col-12">
              <div class="col d-flex justify-content-end">
                  <a href="{{ url('Pelajaran') }} " class="d-flex me-3" >
                      <h6 class="text-sm opacity-7 me-1">kembali</h6>
                      <i class="text-sm opacity-7 fa-solid fa-angle-right"></i>
                  </a>

              </div>
              <div class="card mb-4 px-5  ">
                <div class="card-header pb-0 d-flex justify-content-between">
                  <h6>Tambah Soal/Pertnyaan</h6>
                </div>
                <input type="hidden" value="" name="DataUjianId" id="DataUjianId">
                <div class="card-body px-0 pt-0 pb-2 d-flex align-items-center flex-column"  >
                    {{-- inii ada banyak --}}
                    @include('component.formquiz')

                    </div>

                </div>
              </div>

            </div>
        </form>
    </div>
  </div>

@endsection