@extends('layouts.App2')
@section('content')
<div class="container-fluid mt-3 ">
    <div class="card card-body blur shadow-blur mx-4 overflow-hidden">
      <div class="row gx-4">
        <div class="col-auto">
          <div class="avatar avatar-xl position-relative">
            <img src="{{ asset('assets/pp/'.$userData->foto.'.jpg') }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm" style=""/>
          </div>
        </div>
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="m-0">{{ isset($userData->datapengguna->nama) ? $userData->datapengguna->nama : '-' }}</h5>
            <p class="m-0  font-weight-bold text-sm">{{ $userData->username }}</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
          {{-- <div class="nav-wrapper position-relative text-end">
            <a href="{{ url('Konfigdata/' . $userData->id . '/edit') }}">

                <h6>Ubah Profile</h6>
            </a>
          </div> --}}
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid py-4">
    <div class="row mx-4">

      <div class="col-12 col-xl-8">
        <div class="card h-100">
          <div class="card-header pb-0 p-3">
            <div class="row">
              <div class="col-md-8 d-flex align-items-center">
                <h6 class="mb-0">Data Pengguna</h6>
              </div>
              {{-- <div class="col-md-4 text-end">
                <a href="javascript:;">
                  <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                </a>
              </div> --}}
            </div>
          </div>
          <div class="col p-3 d-flex">
            <div class="col-6">

                <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                        <strong class="text-dark">Nama Lengkap:</strong> &nbsp;
                        {{ isset($userData->datapengguna->nama) ? $userData->datapengguna->nama : '-' }}
                    </li>

                    <li class="list-group-item border-0 ps-0 text-sm">
                        <strong class="text-dark">Tanggal Lahir:</strong> &nbsp;
                        {{ isset($userData->datapengguna->tanggallahir) ? $userData->datapengguna->tanggallahir : '-' }}
                    </li>

                    <li class="list-group-item border-0 ps-0 text-sm">
                        <strong class="text-dark">Jenis Kelamin :</strong> &nbsp;
                        {{ isset($userData->datapengguna->jeniskelamin) ? $userData->datapengguna->jeniskelamin : '-' }}
                    </li>

                    <li class="list-group-item border-0 ps-0 text-sm">
                        <strong class="text-dark">Kota :</strong> &nbsp;
                        {{ isset($userData->datapengguna->kota) ? $userData->datapengguna->kota : '-' }}
                    </li>

                    <li class="list-group-item border-0 ps-0 text-sm">
                        <strong class="text-dark">Alamat :</strong> &nbsp;
                        {{ isset($userData->datapengguna->alamat) ? $userData->datapengguna->alamat : '-' }}
                    </li>

                  <li class="list-group-item border-0 ps-0 pb-0">
                    <strong class="text-dark text-sm">Social:</strong> &nbsp;
                    <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                      <i class="fab fa-facebook fa-lg"></i>
                    </a>
                    <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                      <i class="fab fa-twitter fa-lg"></i>
                    </a>
                    <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                      <i class="fab fa-instagram fa-lg"></i>
                    </a>
                  </li>
                </ul>
            </div>
            <div class="col-6">

                <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                        <strong class="text-dark">Nama Sekolah:</strong> &nbsp;
                        {{ isset($userData->datalainnya->namasekolah) ? $userData->datalainnya->namasekolah : '-' }}
                    </li>
                    <li class="list-group-item border-0 ps-0 text-sm">
                        <strong class="text-dark">Kelas :</strong> &nbsp;
                        {{ isset($userData->datalainnya->kelas) ? $userData->datalainnya->kelas : '-' }}
                    </li>
                    <li class="list-group-item border-0 ps-0 text-sm">
                        <strong class="text-dark">Jurusan:</strong> &nbsp;
                        {{ isset($userData->datalainnya->jurusan) ? $userData->datalainnya->jurusan : '-' }}
                    </li>
                    <li class="list-group-item border-0 ps-0 text-sm">
                        <strong class="text-dark">Pelajaran Favorit:</strong> &nbsp;
                        {{ isset($userData->datalainnya->pelajaranfav) ? $userData->datalainnya->pelajaranfav : '-' }}
                    </li>
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                        <strong class="text-dark">Target Belajar:</strong> &nbsp;
                        {{ isset($userData->datalainnya->target) ? $userData->datalainnya->target : '-' }}
                    </li>
                    <li class="list-group-item border-0 ps-0 text-sm">
                        <strong class="text-dark">Motto:</strong> &nbsp;
                        {{ isset($userData->datalainnya->motto) ? $userData->datalainnya->motto : '-' }}
                    </li>
                </ul>

            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="col d-flex justify-content-end mb-2">
        @if ($userData->id == $userId)

        @else
        <form action="{{ url('Konfigdata/' . $userData->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="t-sepd me-3 me-md-0 mt-md-3" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                hapus
              </button>

          <!-- Modal -->
         @include('component.hapus')
        </form>
        @endif

         <a href="{{ url('data') }}" class="t-sep me-3 me-md-0 mt-md-3 ms-2" >
            <span style="font-size: 15px; font-weight: 600;">Kembali</span>
        </a>
    </div>
  </div>
</div>
@endsection
