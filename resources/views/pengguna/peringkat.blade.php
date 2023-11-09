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
      <label class="fw-bold fs-2 pt-3" style="color: #fe8d00">NekoMind</label>
      <i class="fa-solid fa-magnifying-glass pt-4 pe-3" style="color: rgb(52, 52, 52); font-size: 15px"></i>
    </div>
    <div class="container-fluid text-dark  pt-0 pt-md-5 mt-5 px-5" style="">
        <div class="col">
            <div class="col-9">
                <div class="card p-3">
                    <div class=" " style="padding-bottom: 0px !imporntant;">
                      <h6>Projects table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                      <div class="table-responsive p-0">
                        <table class="table  align-items-center justify-content-center mb-0">
                          <thead>
                            <tr>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PENGGUNA</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">LEVEL</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">PERSENTASE</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">POIN</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            @php $nomor = 1; @endphp
                            @foreach ($hasil as $data)
                            <tr>
                              <td>
                                <div class="d-flex align-items-center px-2">
                                    <span class="text-xs font-weight-bold">{{ $nomor }}</span>
{{-- 
                                  <div class="ms-3">
                                    <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify" />
                                  </div> --}}


                                  <div class="my-auto">
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
                              <td>
                                <p class="text-sm font-weight-bold mb-0">
                                    {{ intval($data['level']) }}
                                </p>
                              </td>
                              <td>
                                @if (intval($data['persentase']) < 78)
                                <span class="text-xs font-weight-bold"  style="color: red;">{{ intval($data['persentase']) }}%</span>
                            @elseif (intval($data['persentase']) < 85)
                                <span class="text-xs font-weight-bold" style="color:rgb(211, 226, 0);">{{ intval($data['persentase']) }}%</span>
                            @else
                                <span class="text-xs font-weight-bold" style="color:rgb(19, 230, 0);">{{ intval($data['persentase']) }}%</span>

                            @endif
                              </td>
                              <td class="align-middle text-center">
                                <div class="d-flex align-items-center justify-content-center">
                                  <span class="me-2 text-xs font-weight-bold">{{ $data['poin'] }}</span>
                                  <div>
                                    <div class="progress">
                                      <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td class="align-middle">
                                <i class="fa-solid fa-caret-right"></i>
                              </td>
                            </tr>
                            @php $nomor++; @endphp <!-- Menambahkan 1 ke nomor setelah setiap iterasi -->
                            @endforeach

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</main>
<script>
    $(document).ready(function () {
            $('#datatabelPeringkat').DataTable({
                "order": [[4, 'asc']],
                "columnDefs": [
                { "searchable": false, "targets": [3] }, // Kolom yang tidak dapat dicari
                { "orderable": false, "targets": [1,6] }
            ]
            });
        });
    </script>

@endsection
