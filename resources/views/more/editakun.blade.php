@extends('more.editpengguna')


@section('addpage')
<div class="container px-2" >
    <form action="{{url( $data3->id.'/data/'.$data3->id)   }}" method="POST">

        @csrf
        @method('PUT')
    <div class="row row-cols-1 py-md-3 px-3 wi-ep">
        <div class="col col-md-6 px-4 w-ep">
            <!-- <div class="col p-3" style="border: 1px black solid; border-radius: 10px;"> -->
              <span class="title-dp pb-4 position-absolute">Data {{ $judul }}</span>
              @if($errors->any())

              <span class="mes-e  me-4   position-absolute" style="font-weight: 700; right:0;">
                {{-- *Isi semua data yang tersedia ! --}}
                {{ $errors }}
              </span>
              @endif
              <div class="d-flex justify-content-end d-md-none">
CC
              </div>

                <div class="i-ep mt-3 mt-md-5">
                    <div class="col">
                        <label for="" class="ji-ep">Usename</label>
                    </div>
                    <input class="ie-nama" placeholder="Nama Lengkap" type="text" name="username" value="{{ $data3->username }}" >
                </div>
                <div class="i-ep mt-3 ">
                    <div class="col">
                        <label for="" class="ji-ep">email</label>
                    </div>
                    <input class="ie-nama" placeholder="Example@gmail.com" type="email" name="email" value="{{ $data3->email }}">
                </div>
        </div>

        <div class="col col-md-6 mt-5 mt-md-0 px-4">
          {{-- <span class="title-dp pb-4 position-absolute">Lainnya</span> --}}
          <div class="i-ep mt-5 ">
            <div class="col">
                <label for="" class="ji-ep">Ubah Password</label>
            </div>
            <input class="ie-nama" placeholder="" type="password" name="password">
        </div>
          <div class="i-ep mt-3 ">
            <div class="col">
                <label for="" class="ji-ep">Konfirmasi Password</label>
            </div>
            <input class="ie-nama" placeholder="" type="password" name="password">
        </div>
    </div>
</div>
<div class="col d-flex justify-content-end">

</div>
<button class="t-sep me-3 me-md-0 mt-md-3" type="submit">
    selesai
  </button>
@endsection