@extends('more.editpengguna')


@section('addpage')

<form action="{{url( 'data/'.$data->id)   }}" method="POST">
    @csrf
    @method('PUT')

<div class="row row-cols-1 py-md-3 px-3 wi-ep mt-5">
    <div class="col col-md-6 px-4 w-ep">
        <!-- <div class="col p-3" style="border: 1px black solid; border-radius: 10px;"> -->
          <span class="title-dp pb-4 position-absolute">Data Pribadi</span>
          <span class="pb-4 position-absolute fw-bold text-danger me-3" style="right: 0; font-size:10px;">{{ $peringatan }} </span>
          <div class="d-flex justify-content-end d-md-none">
CC
          </div>

            <div class="i-ep mt-3 mt-md-5">
                <div class="col">
                    <label for="" class="ji-ep">Nama Lengkap</label>
                </div>
                <input class="ie-nama" placeholder="Nama Lengkap" type="text" name="nama" value="">
            </div>
            <div class="i-ep">
                <label for="" class="ji-ep">Tanggal Lahir</label>
                <input class="ie-date"  type="Date" name="tanggallahir" value="">
            </div>
            <div class="i-ep">
                <label for="" class="ji-ep">Jenis Kelamin</label>
                <div class="radio">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jeniskelamin" id="lk" value="laki-laki"
                        <label class="form-check-label" for="lk" >
                          Laki-Laki
                        </label>
                      </div>
                      <div class="form-check">
                <input class="form-check-input" type="radio" name="jeniskelamin" id="pr" value="perempuan"

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
                <textarea id="" class="ie-alamat" name="alamat"></textarea>
            </div>
           <div class="i-ep">
            <label for="" class="ji-ep">No Handphone</label>
            <input type="number" id="" class="ie-no" placeholder="08XXXXXXXXXX" name="nohp" value="">
          </div>
        <!-- </div> -->
    </div>

    <div class="col col-md-6 mt-5 mt-md-0 px-4 ">
      <span class="title-dp pb-4 position-absolute">Lainnya</span>

    <div class="i-ep mt-5">
      <label for="" class="ji-ep">Nama Sekolah</label>
      <div class="w-select" >
        <select class="ie-select" name="namasekolah">
          <option selected>Pilih Sekolah</option>
          <option value="1">one</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        <i class="fa-solid fa-chevron-down arrow-icon"></i>
      </div>

    </div>
    <div class="i-ep">
      <label for="" class="ji-ep">Kelas</label>
      <div class="w-selectk">
        <select class="ie-select" name="kelas">
          <option>Pilih Kelas</option>
          <option value="1">Kelas 1</option>
          <option value="2">Kelas 2</option>
          <option value="3">Kelas 3</option>
          <option value="4">Kelas 4</option>
          <option value="5">Kelas 5</option>
          <option value="6">Kelas 6</option>
          <option value="7">Kelas 7</option>
          <option value="8">Kelas 8</option>
          <option value="9">Kelas 9</option>
          <option value="10">Kelas 10</option>
          <option value="11">Kelas 11</option>
          <option value="12"x`>Kelas 12</option>


        </select>
        <i class="fa-solid fa-chevron-down arrow-icon"></i>
      </div>

    </div>

    <div class="i-ep">
      <label for="" class="ji-ep">Jurusan</label>
      <div class="w-selectk">
        <select class="ie-select" name="jurusan">
          <option value="">Pilih Jurusan</option>
          <option value="IPA">IPA</option>
          <option value="IPS">IPS</option>
          <option value="Kejurusan">Kejurusan</option>
        </select>
        <i class="fa-solid fa-chevron-down arrow-icon"></i>
      </div>

    </div>
    <div class="i-ep mt-5">
      <label for="" class="ji-ep">Target Belajar</label>
      <div class="w-select">
        <select class="ie-select" name="target">
          <option value="">Tentukan Targetmu</option>
          <option value="UTBK">UTBK</option>
          <option value="UTS">UTS</option>
          <option value="UAS">UAS</option>
          <option value="OLIMPIADE">OLIMPIADE</option>
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
        <input class="ie-nama" placeholder="Keikan Mottomu" type="text" name="motto" value="">
    </div>
    </div>
    </div>
</div>
</form>
@endsection