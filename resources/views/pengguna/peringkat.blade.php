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
        <div class="col ">
            <div class="col">
                <span>Papan Peringkat</span>
            </div>
            <div class="col">
                <div class="row gap-3">
                    <div class="col-8 bg-white p-3" style="border-radius:10px;    box-shadow: 0 20px 37px 0 rgba(0, 0, 0, 0.068);">
                        <table class="table align-items-center mb-0 dataTablefiture px-5" id="datatabelPeringkat">
                            <thead>
                              <tr>
                                <th class="text-center ">no</th>
                                <th class="text-center">Foto</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Level</th>
                                <th class="text-center">Persentase</th>
                                <th class="text-center">Poin</th>
                                <th class="text-center"></th>
                              </tr>
                            </thead>
                            <tbody>
                                @php $nomor = 1; @endphp
                                @foreach ($hasil as $data)
                                    <tr>
                                        <td class="text-center">{{ $nomor }}</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">{{ $data['username'] }}</td>
                                        <td class="text-center">{{ intval($data['level']) }}</td>
                                        <td class="text-center fw-bold" style="color:rgb(19, 230, 0);">{{ intval($data['persentase']) }}% <span style="font-size:13px;">Benar</span></td>
                                        <td class="text-center">{{ $data['poin'] }}</td>
                                        <td class="text-center">lihat</td>
                                    </tr>
                                    @php $nomor++; @endphp <!-- Menambahkan 1 ke nomor setelah setiap iterasi -->
                                @endforeach

                            </tbody>
                          </table>
                    </div>
                    <div class="col bg-white p-3" style="border-radius:10px;    box-shadow: 0 20px 37px 0 rgba(0, 0, 0, 0.068);">
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
