<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" />
    <script src="https://kit.fontawesome.com/9494185896.js" crossorigin="anonymous"></script>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../assets/js/color-modes.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  </head>
  <body>
    <header class="position-fixed fixed-top d-md-flex justify-content">
      <nav class="navbar navbar-light navbar-expand-md dash-nav d-none d-md-flex">
        <div class="col container-fluid">
          <!-- bagian nav atas HALAMAN-TAMBAHAN  -------------------------------------------------------------------------------->
          <div class="col-12 d-none d-md-flex justify-content-between align-items-center">
            <a class="navbar-brand ps-1 ps-sm-3 pe-5" href="#" style="color: #fe8d00; font-weight: 700; font-size: 25px">NekoMind</a>
            <div class="navbar navbar-hide me-md-4 d-none d-md-flex">
                <a href="javascript:void(0);" class="t-back" onclick="backpage()">
                    <span style="font-size: 15px; font-weight: 600;">Kembali</span>
                </a>
            </div>
          </div>
          <!-- penutup bagian nav atas   -------------------------------------------------------------------------------->
        </div>
      </nav>
    </header>

    <!-- dashboard  -------------------------------------------------------------------------------->
    <main class="pt-3 pt-md-5">
        <div class="container  pt-md-5  px-2">
            <div class="row row-cols-1 py-md-3 px-3 wi-ep">
                <div class="col col-md-6 px-4 w-ep">
                    <!-- <div class="col p-3" style="border: 1px black solid; border-radius: 10px;"> -->
                      <span class="title-dp pb-4 position-absolute">Data Pribadi</span>
                      @if($errors->any())

                      <span class="mes-e  me-4   position-absolute" style="font-weight: 700; right:0;">
                        {{-- *Isi semua data yang tersedia ! --}}
                        {{ $errors }}
                      </span>
                      @endif
                      <div class="d-flex justify-content-end d-md-none">
CC
                      </div>
                      <form action="{{ url('Profilepengguna/' . $userId) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="i-ep mt-3 mt-md-5">
                            <label for="" class="ji-ep">Nama Lengkap</label>
                            <input class="ie-nama" value="{{ $dataPengguna ->nama }}" placeholder="Nama Lengkap" type="text" name="nama">
                        </div>
                        <div class="i-ep">
                            <label for="" class="ji-ep">Tanggal Lahir</label>
                            <input class="ie-date"  type="Date" value="{{ $dataPengguna ->tanggallahir }}" name="tanggallahir">
                        </div>
                        <div class="i-ep">
                            <label for="" class="ji-ep">Jenis Kelamin</label>
                            <div class="radio">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jeniskelamin" id="lk" value="Laki-Laki" {{ $dataPengguna->jeniskelamin === 'laki-laki' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="lk">
                                        Laki-Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jeniskelamin" id="pr" value="Perempuan" {{ $dataPengguna->jeniskelamin === 'Perempuan' ? 'checked' : '' }}>
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
                            <textarea name="alamat" id="alamat" class="ie-alamat">{{ $dataPengguna->alamat }}</textarea>
                        </div>
                       <div class="i-ep">
                        <label for="" class="ji-ep">No Handphone</label>
                        <input type="number" name="nohp" id="" class="ie-no" value="{{ $dataPengguna ->nohp }}" placeholder="08XXXXXXXXXX">
                      </div>
                    <!-- </div> -->
                </div>

                <div class="col col-md-6 mt-5 mt-md-0 px-4 ">
                  <span class="title-dp pb-4 position-absolute">Lainnya</span>

                  <div class="i-ep mt-5">
                    <label for="" class="ji-ep">Nama Sekolah</label>
                    <input class="ie-nama" placeholder="Nama Sekolah" name="namasekolah" value="{{ $dataLainnya->namasekolah }}">

                  </div>
                  <div class="i-ep">
                    <label for="" class="ji-ep">Kelas</label>
                    <div class="w-selectk">
                      <select class="ie-select" name="kelas">
                        <option>Pilih Kelas</option>
          <option value="2" {{ $dataLainnya->kelas === '2' ? 'selected' : '' }}>Kelas 2</option>
          <option value="3" {{ $dataLainnya->kelas === '3' ? 'selected' : '' }}>Kelas 3</option>
          <option value="4" {{ $dataLainnya->kelas === '4' ? 'selected' : '' }}>Kelas 4</option>
          <option value="5" {{ $dataLainnya->kelas === '5' ? 'selected' : '' }}>Kelas 5</option>
          <option value="6" {{ $dataLainnya->kelas === '6' ? 'selected' : '' }}>Kelas 6</option>
          <option value="7" {{ $dataLainnya->kelas === '7' ? 'selected' : '' }}>Kelas 7</option>
          <option value="8" {{ $dataLainnya->kelas === '8' ? 'selected' : '' }}>Kelas 8</option>
          <option value="9" {{ $dataLainnya->kelas === '9' ? 'selected' : '' }}>Kelas 9</option>
          <option value="10" {{ $dataLainnya->kelas === '10' ? 'selected' : '' }}>Kelas 10</option>
          <option value="11" {{ $dataLainnya->kelas === '11' ? 'selected' : '' }}>Kelas 11</option>
          <option value="12" {{ $dataLainnya->kelas === '12' ? 'selected' : '' }}>Kelas 12</option>

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
                      {{ $dataLainnya->jurusan === 'IPA' ? 'selected' : '' }}
                          >IPA</option>
                        <option value="IPS"
                        {{ $dataLainnya->jurusan === 'IPS' ? 'selected' : '' }}>IPS</option>
                        <option value="Kejurusan"
                        {{ $dataLainnya->jurusan === 'Kejurusan' ? 'selected' : '' }}>Kejurusan</option>
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
                        {{ $dataLainnya->target === 'UTBK' ? 'selected' : '' }}
                        >UTBK</option>
                        <option value="UTS"
                        {{ $dataLainnya->target === 'UTS' ? 'selected' : '' }}
                        >UTS</option>
                        <option value="UAS"
                        {{ $dataLainnya->target === 'UAS' ? 'selected' : '' }}
                        >UAS</option>
                        <option value="OLIMPIADE"
                        {{ $dataLainnya->target === 'Olimpiade' ? 'selected' : '' }}
                        >OLIMPIADE</option>
                      </select>
                    <i class="fa-solid fa-chevron-down arrow-icon"></i>
                  </div>
              </div>


              <div class="i-ep">
                <label for="" class="ji-ep">Pelajaran Favorit</label>
                <div class="row  row-cols-2 row-cols-sm-3 mt-2">
                  <div class="col mb-3">
                    <div class="form-check dark">
                      <input class="form-check-input" type="checkbox" value="" id="Indonesia">
                      <label class="form-check-label" for="Indonesia">
                        B. Indonesia
                      </label>
                    </div>
                  </div>
                  <div class="col mb-3">
                    <div class="form-check dark">
                      <input class="form-check-input" type="checkbox" value="" id="Inggris">
                      <label class="form-check-label" for="Inggris">
                        B. Inggris
                      </label>
                    </div>
                  </div>
                  <div class="col mb-3">
                    <div class="form-check dark">
                      <input class="form-check-input" type="checkbox" value="" id="Sejarah">
                      <label class="form-check-label" for="Sejarah">
                        Sejarah
                      </label>
                    </div>
                  </div>
                  <div class="col mb-3">
                    <div class="form-check dark">
                      <input class="form-check-input" type="checkbox" value="" id="Matematika">
                      <label class="form-check-label" for="Matematika">
                        Matematika
                      </label>
                    </div>
                  </div>
                  <div class="col mb-3">
                    <div class="form-check dark">
                      <input class="form-check-input" type="checkbox" value="" id="Kimia">
                      <label class="form-check-label" for="Kimia">
                        Kimia
                      </label>
                    </div>
                  </div>
                  <div class="col mb-3">
                    <div class="form-check dark">
                      <input class="form-check-input" type="checkbox" value="" id="Biologi">
                      <label class="form-check-label" for="Biologi">
                      Biologi
                      </label>
                    </div>
                  </div>
                  <div class="col mb-3">
                    <div class="form-check dark">
                      <input class="form-check-input" type="checkbox" value="" id="Fisika">
                      <label class="form-check-label" for="Fisika">
                        Fisika
                      </label>
                    </div>
                  </div>
                  <div class="col mb-3">
                    <div class="form-check dark">
                      <input class="form-check-input" type="checkbox" value="" id="Sosiologi">
                      <label class="form-check-label" for="Sosiologi">
                        Sosiologi
                      </label>
                    </div>
                  </div>
                  <div class="col mb-3">
                    <div class="form-check dark">
                      <input class="form-check-input" type="checkbox" value="" id="Geografi">
                      <label class="form-check-label" for="Geografi">
                        Geografi
                      </label>
                    </div>
                  </div>
                  <div class="col ">
                    <div class="form-check dark">
                      <input class="form-check-input" type="checkbox" value="" id="Ekonomi">
                      <label class="form-check-label" for="Ekonomi">
                        Ekonomi
                      </label>
                    </div>
                  </div>
                </div>
                </div>
                <div class="i-ep">
                    <label for="" class="ji-ep">Motto </label>
                    <input class="ie-nama" value="{{ $dataLainnya ->motto }}" placeholder="Nama Lengkap" type="text" name="motto">
                </div>
                  <!-- </div> -->
                </div>
            </div>
            <div class="d-flex justify-content-end mb-3 px-1 align-items-center">
              <button class="t-sep me-3 me-md-0 mt-md-3" type="submit">
                selesai
              </button>
            </div>

                      </form>


        </div>
    </main>

    <script src="{{ asset('assets/js/script.js') }}">

    </script>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-    I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</html>
