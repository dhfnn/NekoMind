@extends('layouts.App4')

@section('main')

<div class="col-12 d-flex flex-column   " >
    <div class="d-flex justify-content-between pe-3  my-1 my-md-2">
        <span class="jw">Rangkuman materi</span>
        <div class="form-check dark chm d-none d-md-block" >
            <input class="form-check-input me-1 chm" type="checkbox" value="" id="Focus" >
            <label class="form-check-label mt-1 chm " for="Focus" style="font-size: 12px; color: #009feb; font-weight: 700;" >
SEMBUNYIKAN
            </label>
        </div>
    </div>
    <div class=" wadah-materi p-3 ">
        @if ($materi)
        <div>
            {!! $materi->isi_materi !!}
        </div>
    @else
        <div>
            Tidak ada isi materi yang tersedia.
        </div>
    @endif

    </div>
    <div class="col d-flex justify-content-center mt-2" >
        @if ($materi)
            @if ($kec == 'ada')
            <span class="fw-bold" ><i class="fa-regular fa-circle-check me-1"></i><span>Telah dibaca</span></span>
            @else
            <form action="{{ url('MateriPengguna') }}" method="POST" id="myForm">
                @csrf
                <div class="form-check">
                    <input type="hidden" value="{{ $babM->id }}" name="babid">
                    <input class="form-check-input" type="checkbox" name="telah_dibaca" id="flexCheckDefault">
                    <label class="form-check-label fw-bold" for="flexCheckDefault" style="color: #009feb;">
                        Selesai dibaca
                    </label>
                    <button type="submit" id="submitButton" ></button>
                </div>
            </form>
            @endif
    @else

    @endif

              </div>
</div>

@endsection

