@extends('more.editpengguna')


@section('addpage')
<div class="container px-2" >
    <form action="{{url( $data->id.'/data/'.$data->id)   }}" method="POST">
    @csrf
    @method('PUT')

<div class="row row-cols-1 py-md-3 px-3 wi-ep mt-5">
    <div class="col col-md-6 px-4 w-ep">
        <!-- <div class="col p-3" style="border: 1px black solid; border-radius: 10px;"> -->
          <span class="title-dp pb-4 position-absolute">Data Pribadi</span>
          <span class="pb-4 position-absolute fw-bold text-danger me-3" style="right: 0; font-size:10px;">{{ $peringatan }} </span>

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
                    <label for="" class="ji-ep">Nama Lengkap</label>
                </div>
                <input class="ie-nama" placeholder="Nama Lengkap" type="text" name="nama" value="{{ $datapengguna->nama }}">
            </div>
            <div class="i-ep">
                <label for="" class="ji-ep">Tanggal Lahir</label>
                <input class="ie-date"  type="Date" name="tanggallahir" value="{{ $datapengguna->tanggallahir}}">
            </div>
            <div class="i-ep">
                <label for="" class="ji-ep">Jenis Kelamin</label>
                <div class="radio">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jeniskelamin" id="lk" value="laki-laki" {{$datapengguna->jeniskelamin === 'laki-laki' ? 'checked' : '' }}
                        <label class="form-check-label" for="lk" >
                          Laki-Laki
                        </label>
                      </div>
                      <div class="form-check">
                <input class="form-check-input" type="radio" name="jeniskelamin" id="pr" value="perempuan" {{ $datapengguna->jeniskelamin === 'perempuan' ? 'checked' : '' }}
                        <label class="form-check-label" for="pr">
                          Perempuan
                        </label>
                      </div>
                </div>
            </div>
            <div class="i-ep">
              <label for="" class="ji-ep" >Kota/Kabupaten</label>
                <select class="w-select outline-none selectKT" name="kota" id="">
                    <option value="">PILIH KOTA</option>
                    @foreach ($dataKota as $kota )
                  <option value="{{ $kota->city_name }}">{{ $kota->city_name }}</option>

                    @endforeach
                </select>
            </div>
            <div class="i-ep">
                <label for="" class="ji-ep">Alamat</label>
                <textarea id="" class="ie-alamat" name="alamat">{{$datapengguna->alamat}}</textarea>
            </div>
           <div class="i-ep">
            <label for="" class="ji-ep">No Handphone</label>
            <input type="number" id="" class="ie-no" placeholder="08XXXXXXXXXX" name="nohp" value="{{$datapengguna->nohp}}">
          </div>
        <!-- </div> -->
    </div>

    <div class="col col-md-6 mt-5 mt-md-0 px-4 ">
      <span class="title-dp pb-4 position-absolute">Lainnya</span>

    <div class="i-ep mt-5">
      <label for="" class="ji-ep">Nama Sekolah</label>
      <input class="ie-nama" placeholder="Nama Sekolah" type="text" name="namasekolah" value="{{ $datalainnya->namasekolah }}">
      {{-- <select class="w-select outline-none" name="kota" id="selectSK">
        <option value="">PILIH SEKOLAH</option>
        @foreach ($dataSekolah as $item )
        <option value="{{ $item['sekolah'] }}">{{ $item['sekolah'] }}</option>
        @endforeach
    </select> --}}

    </div>
    <div class="i-ep">
      <label for="" class="ji-ep">Kelas</label>
      <div class="w-selectk">
        <select class="ie-select" name="kelas">
          <option>Pilih Kelas</option>
          <option value="2" {{ $datalainnya->kelas === '2' ? 'selected' : '' }}>Kelas 2</option>
          <option value="3" {{ $datalainnya->kelas === '3' ? 'selected' : '' }}>Kelas 3</option>
          <option value="4" {{ $datalainnya->kelas === '4' ? 'selected' : '' }}>Kelas 4</option>
          <option value="5" {{ $datalainnya->kelas === '5' ? 'selected' : '' }}>Kelas 5</option>
          <option value="6" {{ $datalainnya->kelas === '6' ? 'selected' : '' }}>Kelas 6</option>
          <option value="7" {{ $datalainnya->kelas === '7' ? 'selected' : '' }}>Kelas 7</option>
          <option value="8" {{ $datalainnya->kelas === '8' ? 'selected' : '' }}>Kelas 8</option>
          <option value="9" {{ $datalainnya->kelas === '9' ? 'selected' : '' }}>Kelas 9</option>
          <option value="10" {{ $datalainnya->kelas === '10' ? 'selected' : '' }}>Kelas 10</option>
          <option value="11" {{ $datalainnya->kelas === '11' ? 'selected' : '' }}>Kelas 11</option>
          <option value="12" {{ $datalainnya->kelas === '12' ? 'selected' : '' }}>Kelas 12</option>


        </select>
        <i class="fa-solid fa-chevron-down arrow-icon"></i>
      </div>

    </div>

    <div class="i-ep">
      <label for="" class="ji-ep">Jurusan</label>
      <div class="w-selectk">
        <select class="ie-select" name="jurusan">
          <option value="">Pilih Jurusan</option>
          <option value="IPA"
        {{ $datalainnya->jurusan === 'IPA' ? 'selected' : '' }}
            >IPA</option>
          <option value="IPS"
          {{ $datalainnya->jurusan === 'IPS' ? 'selected' : '' }}>IPS</option>
          <option value="Kejurusan"
          {{ $datalainnya->jurusan === 'Kejurusan' ? 'selected' : '' }}>Kejurusan</option>
        </select>
        <i class="fa-solid fa-chevron-down arrow-icon"></i>
      </div>

    </div>
    <div class="i-ep mt-5">
      <label for="" class="ji-ep">Target Belajar</label>
      <div class="w-select">
        <select class="ie-select" name="target">
          <option value="">Tentukan Targetmu</option>
          <option value="UTBK"
          {{ $datalainnya->target === 'UTBK' ? 'selected' : '' }}
          >UTBK</option>
          <option value="UTS"
          {{ $datalainnya->target === 'UTS' ? 'selected' : '' }}
          >UTS</option>
          <option value="UAS"
          {{ $datalainnya->target === 'UAS' ? 'selected' : '' }}
          >UAS</option>
          <option value="OLIMPIADE"
          {{ $datalainnya->target === 'Olimpiade' ? 'selected' : '' }}
          >OLIMPIADE</option>
        </select>
        <i class="fa-solid fa-chevron-down arrow-icon"></i>
      </div>
  </div>


  <div class="i-ep">
    {{-- <div class="col"> --}}
        <label for="" class="ji-ep">Pelajaran Favorit</label>
        <span class="ms-2" style="font-size: 13px; font-weight:600; color:rgb(231, 7, 7);">*maks 5</span>
    {{-- </div> --}}
    <div class="row  row-cols-2 row-cols-sm-3 mt-2">
      <div class="col mb-3">
        <div class="form-check dark">
          <input class="form-check-input" type="checkbox" name="checkboxtp[]" value="Indonesia" id="Indonesia">
          <label class="form-check-label" for="Indonesia">
            B. Indonesia
          </label>
        </div>
      </div>
      <div class="col mb-3">
        <div class="form-check dark">
          <input class="form-check-input" type="checkbox" name="checkboxtp[]" value="Inggris" id="Inggris">
          <label class="form-check-label" for="Inggris">
            B. Inggris
          </label>
        </div>
      </div>
      <div class="col mb-3">
        <div class="form-check dark">
          <input class="form-check-input" type="checkbox" name="checkboxtp[]" value="Sejarah" id="Sejarah">
          <label class="form-check-label" for="Sejarah">
            Sejarah
          </label>
        </div>
      </div>
      <div class="col mb-3">
        <div class="form-check dark">
          <input class="form-check-input" type="checkbox" name="checkboxtp[]" value="Matematika" id="Matematika">
          <label class="form-check-label" for="Matematika">
            Matematika
          </label>
        </div>
      </div>
      <div class="col mb-3">
        <div class="form-check dark">
          <input class="form-check-input" type="checkbox" name="checkboxtp[]" value="Kimia" id="Kimia">
          <label class="form-check-label" for="Kimia">
            Kimia
          </label>
        </div>
      </div>
      <div class="col mb-3">
        <div class="form-check dark">
          <input class="form-check-input" type="checkbox" name="checkboxtp[]" value="Biologi" id="Biologi">
          <label class="form-check-label" for="Biologi">
          Biologi
          </label>
        </div>
      </div>
      <div class="col mb-3">
        <div class="form-check dark">
          <input class="form-check-input" type="checkbox" name="checkboxtp[]" value="Fisika" id="Fisika">
          <label class="form-check-label" for="Fisika">
            Fisika
          </label>
        </div>
      </div>
      <div class="col mb-3">
        <div class="form-check dark">
          <input class="form-check-input" type="checkbox" name="checkboxtp[]" value="Sosiologi" id="Sosiologi">
          <label class="form-check-label" for="Sosiologi">
            Sosiologi
          </label>
        </div>
      </div>
      <div class="col mb-3">
        <div class="form-check dark">
          <input class="form-check-input" type="checkbox" name="checkboxtp[]" value="Geografi" id="Geografi">
          <label class="form-check-label" for="Geografi">
            Geografi
          </label>
        </div>
      </div>
      <div class="col mb-3">
        <div class="form-check dark">
          <input class="form-check-input" type="checkbox" name="checkboxtp[]" value="Ekonomi" id="Ekonomi">
          <label class="form-check-label" for="Ekonomi">
            Ekonomi
          </label>
        </div>
      </div>

    </div>
    <div class="i-ep ">
        <label for="" class="ji-ep">Motto</label>
        <input class="ie-nama" placeholder="Keikan Mottomu" type="text" name="motto"
        value="{{$datalainnya->motto}}">
    </div>
    </div>
    </div>
</div>
<button class="t-sep me-3 me-md-0 mt-md-3" type="submit">
    selesai
  </button>
</form>
</div>

@endsection