@extends('layouts.App2')

@section('content')

<!-- End Navbar -->
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0 d-flex justify-content-between">
          <h6>Tabel Daftar Akun</h6>
          {{-- <div class="col"> --}}
            <div class=" d-flex justify-content-between align-items-center  me-2" style="max-height: 40px">
                {{-- <div class=" form-inputs me-1" >
                    <form action="{{ url('data') }}" method="GET" class="d-flex align-items-center">
                    <input class="form-control " type="text" placeholder="Cari nama atau emalix" name="cari" value="{{ $request->get('cari') }}">

                    <a href="" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
            </form>
                </div> --}}
                <a href="{{ url('/data/create') }}" class="p-2 d-flex justify-content-between align-items-center me-2" style="border: 1px solid rgba(0, 0, 0, 0.075); border-radius:10px ;color:black !important;">  <i class="fa-solid fa-plus"></i></a>
            </div>

          {{-- </div> --}}

        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0 dataTablefiture px-5" id="dataTabledata">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PENGGUNA</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ROLE</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">EMAIL</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TANGGAL BERGABUNG</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">aksi</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>

                </tr>
              </thead>
              <tbody>
                @foreach($userData as $user)

                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="{{ asset('assets/pp/'  .$user->foto.'.jpg') }}" class="avatar avatar-sm me-3" alt="user1" />
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">@if ($user->id === $userId)
                            Saya

                        @else
                            {{ $user->username }}
                            @endif
                    </h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $user->role }}</p>
                    {{-- <p class="text-xs text-secondary mb-0">Organization</p> --}}
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-secondary text-xs font-weight-bold">
                        {{-- @if ($user->users) --}}
                          {{ $user->email}}
                        {{-- @else
                          -
                        @endif --}}
                      </span>

                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">
                        {{-- @if ($user->users) --}}
                          {{ $user->bergabung }}
                        {{-- @else
                          -
                        @endif --}}
                      </span>
                  </td>
                  <td class="align-middle text-center">

                    {{-- @foreach($userData as $user) --}}

    <a class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user"  href="{{ url('data/' . $user->id . '/edit') }} ">Edit</a>
{{-- @endforeach --}}
                  </td>
                  <td class="align-middle text-center">
                    <a href="{{ url('/data/' .$user->id) }}"  class="text-secondary text-xs font-weight-bold">
                        <span class="">
                           lihat <i class="fa-solid fa-caret-right"></i>
                          </span>
                    </a>

                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
