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
            <a href="{{ url('permateri/' . $bab->id_pelajaran) }}" class="d-flex me-3" >
                <h6 class="text-sm opacity-7 me-1">kembali</h6>
                <i class="text-sm opacity-7 fa-solid fa-angle-right"></i>
            </a>

        </div>
        <div class="card mb-4">
          <div class="card-header pb-0 d-flex justify-content-between">
            <h6>BAB {{ $bab->subab }} {{ $bab->judul }}</h6>

        <div class="ms-auto text-end">

            <a  data-bs-toggle="modal" data-bs-target="#editmateri" class="btn btn-link text-dark px-3 mb-0"  class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
            @include('component.Meditmateri')
            <a  href="#hapusmateri" data-bs-toggle="modal" data-bs-target="#hapusmateri" class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>HAPUS</a>
            @include('component.Mhapusmateri')


          </div>
          @if ($materiList->isEmpty())
          <a  data-bs-toggle="modal" data-bs-target="#tambahmateri" class="d-flex justify-content-between align-items-center px-3 me-2" style="border: 1px solid rgba(0, 0, 0, 0.075); border-radius:10px; color:black !important; cursor:pointer;">
              <i class="fa-solid fa-plus"></i>
          </a>
          @include('component.Mtambahmateri')
      @else

      @endif




          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <div class="container">
                <h6 class="text-sm opacity-7 me-1">Preview Materi</h6>
                <div class="container py-2 preview" style="border:1px solid rgba(139, 139, 139, 0.144); border-radius:5px;" id="">
{{-- {{ $text }} --}}
@if ($materiList->count() > 0)
    {!! $materi->isi_materi !!}
@else

@endif

                </div>
              </div>
            </div>
          </div>

@if ($materiList->count() > 0)

    <!-- Konten yang ingin ditampilkan jika $materiList memiliki lebih dari 0 elemen -->
@else
<form action="{{ url('Bab') }}" method="POST" style="block">
    @csrf
          <div class="col">
            <input type="hidden" class="oii" name="isi_materi">
            <input type="hidden" value="{{ $bab->id }}" name="id_bab">
            <div class="col d-flex justify-content-end mb-2 px-3">
                <button class="t-sep me-3 me-md-0 mt-md-3" type="submit" style="display: none;" id="tombol">
                    TAMBAHKAN
                </button>
            </div>

          </div>
        </form>


@endif







        </div>
        </div>
      </div>
    </div>
  </div>

@endsection