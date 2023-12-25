@extends('layouts.App2')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="col d-flex justify-content-end">
                <a href="{{ url('Pelajaran') }}" class="d-flex me-3">
                    <h6 class="text-sm opacity-7 me-1">kembali</h6>
                    <i class="text-sm opacity-7 fa-solid fa-angle-right"></i>
                </a>
            </div>
            <div class="card mb-4 px-5">
                <div class="card-header pb-0 d-flex justify-content-between bg-white" style="border: none;">
                    <h6>Daftar Soal/Pertanyaan</h6>
                    <form action="{{ route('soal.delete', ['id' => $ujianId]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link text-danger text-gradient mb-0" style="font-size: 10px;">
                            <i class="far fa-trash-alt me-2"></i>HAPUS SEMUA
                        </button>
                    </form>


                </div>
                <input type="hidden" value="" name="DataUjianId" id="DataUjianId">
                <div class="card-body px-0 pt-0 mt-2 pb-2 d-flex align-items-center flex-column">
                    @foreach ($dataSoal as $data)
                    <div class="col col-md-11 kage mb-3 px-3 px-md-5 pb-3 pt-1"
                        style="border:1px rgba(0, 0, 0, 0.082) solid; border-radius:10px;">
                        <div class="col d-flex pt-3">
                            <span class="pe-2" id="urutanTambahsoal"></span>
                            <div class="col">
                                <div class="col d-flex justify-content-between">
                                    <span class="text-bold">Pertanyaan ke  {{ $urutan++ }}</span>

                                    <div>
                                        <a class="btn btn-link text-dark text-sm px-3 mb-0 tdn"  data-bs-toggle="modal" data-bs-target="#popo{{$data->id}}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                        <!-- Button trigger modal -->
                                        @include('component.MeditSoal')
                                    </div>
                                </div>
                                <textarea class="form-control" name="pertanyaan" rows="4" readonly>{{ $data->pertanyaan }}</textarea>
                            </div>
                        </div>
                        <div class="row row-cols-1 mt-4">
                            <div class="col">
                                <div class="col mt-2 d-flex align-items-center flex-column">
                                    @php
                                    $opsiArray = explode(',', $data->opsi);
                                    @endphp
                                    @foreach ($opsiArray as $key => $option)
                                    <div class="col-12 mt-2 d-flex align-items-center">
                                        <span>{{ chr(65 + $key) }}.</span>
                                        <input class="form-control ms-3" type="text" name="opsi[]" value="{{ trim($option) }}" readonly>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-3">
                                <div>
                                    Jawaban : {{
                                        ($data->jawaban == 0) ? 'A' :
                                        (($data->jawaban == 1) ? 'B' :
                                        (($data->jawaban == 2) ? 'C' :
                                        (($data->jawaban == 3) ? 'D' : '')))
                                    }}


                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
