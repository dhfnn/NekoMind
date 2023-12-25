@extends('layouts.App')
@section('main')
<style>
    .dataTables_wrapper
    {
        margin-top: 10px;
    }
    .dataTables_wrapper tr.odd td
    {

        border-bottom: 1px solid #f0f0f0;
    }
    .dataTables_wrapper tr.even
    {

        border-bottom: 1px solid #f0f0f0;
    }
    .dataTables_wrapper table.dataTable.no-footer
    {

        border-bottom: 1px solid #cfcfcf6e;
    }
    .dataTables_length, .dataTables_info {
        margin-left:35px;
        font-size: 10px;
        color: #344767;
    }
    .dataTables_filter, .dataTables_paginate .paging_simple_numbers {
        margin-right:2.5rem;

    }
    .paginate_button {

        font-size: 12px;
            color: #344767;
    }
    a.paginate_button .current{
        background-color:transparent;
    }
    a.paginate_button:hover{
        background-color: #2152FF;
    }


    .dataTables_filter input{
        outline: none;
        border:1px solid #ebebeb !important;

    }
    .dataTables_length label {
        font-size: 10px;
    }
    .dataTables_length label select:focus {
        box-shadow: none;
        outline: none;
    }
    #datatabelPeringkat{
        padding: 0px !important;
    }
</style>
<main class="" style="background-color: #F8F9FA !important;">
    <div class="col-12 d-flex d-md-none justify-content-between align-items-center px-4 position-absolute" style="">
      {{-- <label class="fw-bold fs-2 pt-3" style="color: #fe8d00">NekoMind</label> --}}
      {{-- <i class="fa-solid fa-magnifying-glass pt-4 pe-3" style="color: rgb(52, 52, 52); font-size: 15px"></i> --}}
    </div>
    <div class="container-fluid text-dark  pt-0 pt-md-5 mt-5 px-5" style="">
        <div class="row">
            <div class="col d-block d-xl-none mb-3">
                <div class="p-2 col d-flex align-items-center  px-5  pt-2 bg-white" style="box-shadow: 0 20px 37px 0 rgba(0, 0, 0, 0.05);">
                <span class="j-j">#{{ $urutan }}</span>

                    <div class="col-3 col-sm-2 bg-white d-flex justify-content-center pt-0 pt-sm-2 ps-sm-2" style="border-radius: 7px">
                      <div class="rounded-circle gam-p2" style="background-image:url({{ asset('assets/pp/' .$usersData->foto .'.jpg') }}) " ></div>
                    </div>
                    <div class="col-9 col-sm-10 pe-2 pe-sm-4 ps-2 ps-sm-3">
                      <div class="col-12 d-flex justify-content-between align-items-end py-sm-1" style="font-size: 15px; font-weight: 600">
                        <label for="" class="ps-1 t-un">{{ $datapengguna->nama}}</label>
                        <span class="pe-2 t-lvl">Level {{ $levelPengguna }}</span>
                      </div>
                      <div class="col-12" style="background-color: #cdd2dc51; height: 7px; border-radius: 5px">
                        <div class="progress" role="progressbar"  aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="border-radius: 10px;height: 7px;">
                            <div class="progress-bar bg-gradient-biru" style="width: {{ $persentase }}%" style=""></div>
                          </div>
                      </div>
                      <div class="col-12 d-flex justify-content-end pe-2 pt-1">
                        <span style="font-size: 10px; font-weight: 600; color: #4a4a4a">{{ $sisaBagi }}/1200EXP</span>
                      </div>
                    </div>
                  </div>            </div>
            <div class="col-12 col-xl-8">
                <div class="card p-3" style="box-shadow: 0 20px 37px 0 rgba(0, 0, 0, 0.05);">
                    <div class=" " style="padding-bottom: 0px !imporntant;">
                      <h6 class="j-rm">Table Peringkat</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                      <div class="table-responsive p-0">
                        <table class="table  align-items-center justify-content-center mb-0" id="datatabelPeringkat">
                          <thead>
                            <tr>
                              <th class="text-uppercase text-center  text-secondary text-xxs font-weight-bolder opacity-7">NO</th>
                              <th class=" text-uppercase text-center  text-secondary text-xxs font-weight-bolder opacity-7">PENGGUNA</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">LEVEL</th>
                              <th class="text-uppercase text-center  text-secondary text-xxs font-weight-bolder opacity-7 ps-2">PERSENTASE</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">POIN</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($hasil as $nomor => $data)
                            <tr>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center justify-content-center">
                                  <div class="my-auto d-flex align-items-center ">
                                    {{-- <h6 class="mb-0 text-sm"> --}}
                                        <span class="text-xs font-weight-bold">{{ $nomor+1 }}</span>
                                    {{-- </h6> --}}
                                  </div>
                                </div>
                              </td>
                              <td class="align-middle text-center">
                                <div class="d-flex align-items-center justify-content-center">
                                  <div class="my-auto d-flex align-items-center">
                                      <div class="me-1">
                                          <img src="{{ asset('assets/pp/' . $data['foto']. '.jpg') }}" class="avatar avatar-sm rounded-circle me-2" alt="spotify" />
                                        </div>
                                    <h6 class="mb-0 text-sm">
                                        @if ($data['username'] ===$username)
                                        Saya
                                        @else
                                        {{ $data['username'] }}
                                        @endif

                                    </h6>
                                  </div>
                                </div>
                              </td>
                              <td class="align-middle text-center">
                                <div class="d-flex align-items-center justify-content-center">

                                <p class="text-sm font-weight-bold mb-0">
                                    {{ intval($data['level']) }}
                                </p>
                                </div>
                              </td>
                              <td class="align-middle text-center">
                                <div class="d-flex align-items-center justify-content-center">

                                @if (intval($data['persentase']) < 78)
                                <span class="text-xs font-weight-bold"  style="color: red;">{{ intval($data['persentase']) }}%</span>
                            @elseif (intval($data['persentase']) < 85)
                                <span class="text-xs font-weight-bold" style="color:rgb(211, 226, 0);">{{ intval($data['persentase']) }}%</span>
                            @else
                                <span class="text-xs font-weight-bold" style="color:rgb(19, 230, 0);">{{ intval($data['persentase']) }}%</span>

                            @endif
                                </div>
                              </td>
                              <td class="align-middle text-center">
                                <div class="d-flex align-items-center justify-content-center">
                                  <span class="me-2 text-xs font-weight-bold">{{ $data['poin'] }}</span>
                                </div>
                              </td>
                              <td class="align-middle text-center">
                                <div class="d-flex align-items-center justify-content-center">
                                    <button type="button" style="background: none; border:none;"  data-bs-toggle="modal" data-bs-target="#exampleModal{{$nomor+1}}"><span>Lihat</span>
                                        <i class="fa-solid fa-caret-right ms-2" style="color: #344767"></i></button>
                                </div>
                              </td>
                            </tr>
                            <div class="modal fade " style="background: none; " id="exampleModal{{$nomor+1}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog"  style="background: none;">
                                  <div class="modal-content"  style="background: none;max-width:440px;">
                                    <div class="col  text-center px-4 px-md-0">
                                          <div class="card-p bg-white pb-3" style="" >
                                            <div class="card-header">
                                              <div class="card-cover" style="background-image: url('{{ asset('assets/pp/' . $data['foto'] . '.jpg') }}')"></div>

                                              <div class="card-avatar" style="background-image: url('{{ asset('assets/pp/' . $data['foto'] . '.jpg') }}')"></div>

                                              <div class="card-fullname">{{ $data['nama'] }}</div>
                                              <div class="card-level">Level 12</div>
                                            </div>
                                            <div class="card-main  px-3 mt-3 mt-lg-5">
                                              <div class="card-about text-start px-4 px-lg-5 ">
                                                <div class="card-title">
                                                  Tentang Saya
                                                </div>
                                                <p class="card-desc ">Saya sekolah di {{ $data['namasekolah']}} Kelas {{ $data['kelas']}}  {{ $data['jurusan']}}. Pelajaran yang saya sukai diantaranya {{ $data['pel1'] }}, {{ $data['pel2'] }}, {{ $data['pel3'] }} dan {{ $data['pel4'] }}. Target Belajar saya adalah berhasil dalam Pelaksanaan {{ $data['target']}}.</p>
                                              </div>
                                              <!-- ini bagian card mooto -->
                                              <div class="card-motto mt-2 px-4">
                                                <div class="card-title2">
                                                  Motto
                                                </div>
                                                <p class="card-desc2">
                                                  {{ $data['motto']}}
                                                </p>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                              </div>

                            @endforeach

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
            </div>

            <div class="col d-none d-xl-block">
                <div class="p-2 col d-flex align-items-center  pt-2 bg-white" style="box-shadow: 0 20px 37px 0 rgba(0, 0, 0, 0.05);">
                <span>#{{ $urutan }}</span>

                    <div class="col-3 col-sm-2 bg-white d-flex justify-content-center pt-0 pt-sm-2 ps-sm-2" style="border-radius: 7px">
                      <div class="rounded-circle gam-p2" style="background-image:url({{ asset('assets/pp/' .$usersData->foto .'.jpg') }}) " ></div>
                    </div>
                    <div class="col-9 col-sm-10 pe-2 pe-sm-4 ps-2 ps-sm-3">
                      <div class="col-12 d-flex justify-content-between align-items-end py-sm-1" style="font-size: 15px; font-weight: 600">
                        <label for="" class="ps-1 t-un">{{ $datapengguna->nama}}</label>
                        <span class="pe-2 t-lvl">Level {{ $levelPengguna }}</span>
                      </div>
                      <div class="col-12" style="background-color: #cdd2dc51; height: 7px; border-radius: 5px">
                        <div class="progress" role="progressbar"  aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="border-radius: 10px;height: 7px;">
                            <div class="progress-bar bg-gradient-biru" style="width: {{ $persentase }}%" style=""></div>
                          </div>
                      </div>
                      <div class="col-12 d-flex justify-content-end pe-2 pt-1">
                        <span style="font-size: 10px; font-weight: 600; color: #4a4a4a">{{ $sisaBagi }}/1200EXP</span>
                      </div>
                    </div>
                  </div>            </div>
        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script>

    </script>

@endsection
