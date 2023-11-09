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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  </head>
  <body>
    <!-- dashboard  -------------------------------------------------------------------------------->
    <main class="pt-3 ">
        <form action="/Profilepengguna" method="POST" id="pelajaranForm">
            @csrf


        <div class="container px-2">
            <div class="col my-2">
                <span class="ji-sp">Isi data profile</span>
            </div>
            <div class="row row-cols-1 py-md-3 px-3 wi-ep">
                <div class="col col-md-6 px-4 w-ep">
                    <!-- <div class="col p-3" style="border: 1px black solid; border-radius: 10px;"> -->
                      <span class="title-dp pb-4 position-absolute">Data Pribadi</span>
                      <div class="d-flex justify-content-end d-md-none">
CC
                      </div>

                        <div class="i-ep mt-3 mt-md-5">
                            <div class="col d-flex justify-content-between">
                                <label for="" class="ji-ep">Nama Lengkap</label>
                                @error('nama')
                                <span class="mes-e">{{ $message }}</span>
                                @enderror
                            </div>
                            <input class="ie-nama" placeholder="Nama Lengkap" type="text" name="nama" value="{{ old('nama') }}">
                        </div>
                        <div class="i-ep">
                            <div class="col d-flex justify-content-between">
                                <label for="" class="ji-ep">Tanggal Lahir</label>
                                @error('tanggallahir')
                                <span class="mes-e">{{ $message }}</span>
                                @enderror
                            </div>
                            <input class="ie-date"  type="Date" name="tanggallahir" value="{{ old('tanggallahir') }}">
                        </div>
                        <div class="i-ep">
                            <div class="col d-flex justify-content-between">
                                <label for="" class="ji-ep">Jenis Kelamin</label>
                                @error('jeniskelamin')
                                <span class="mes-e">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="radio">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jeniskelamin" id="lk" value="laki-laki">
                                    <label class="form-check-label" for="lk">
                                      Laki-Laki
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jeniskelamin" id="pr" value="perempuan">
                                    <label class="form-check-label" for="pr">
                                      Perempuan
                                    </label>
                                  </div>
                            </div>
                        </div>
                        <div class="i-ep">
                            <div class="col d-flex justify-content-between">
                                <label for="" class="ji-ep">Kota</label>
                                @error('kota')
                                <span class="mes-e">{{ $message }}</span>
                                @enderror
                            </div>
                              <select class="w-select outline-none selectKT" name="kota" id="">
                                  <option value="">PILIH KOTA</option>
                                  @foreach ($dataKota as $kota )
                                <option value="{{ $kota->city_name }}">{{ $kota->city_name }}</option>
                                  @endforeach
                              </select>
                          </div>
                        <div class="i-ep">
                            <div class="col d-flex justify-content-between">
                                <label for="" class="ji-ep">Alamat</label>
                                @error('alamat')
                                <span class="mes-e">{{ $message }}</span>
                                @enderror
                            </div>
                            <textarea id="" class="ie-alamat" name="alamat">{{ old('alamat') }}</textarea>
                        </div>
                       <div class="i-ep">
                        <div class="col d-flex justify-content-between">
                            <label for="" class="ji-ep">No HandPhone</label>
                            @error('nohp')
                            <span class="mes-e">{{ $message }}</span>
                            @enderror
                        </div>
                        <input type="number" id="" class="ie-no" placeholder="08XXXXXXXXXX" name="nohp" value="{{ old('nohp') }}">
                      </div>
                    <!-- </div> -->
                </div>

                <div class="col col-md-6 mt-5 mt-md-0 px-4 ">
                  <span class="title-dp pb-4 position-absolute">Lainnya</span>

                <div class="i-ep mt-5">
                    <div class="col d-flex justify-content-between">
                        <label for="" class="ji-ep">Nama Sekolah</label>
                        @error('namasekolah')
                        <span class="mes-e">{{ $message }}</span>
                        @enderror
                    </div>
                    <input class="ie-nama" placeholder="Nama Sekolah" type="text" name="namasekolah" value="{{ old('namasekolah') }}">
                </div>
                <div class="i-ep">
                    <div class="col d-flex justify-content-between">
                        <label for="" class="ji-ep">Kelas</label>
                        @error('kelas')
                        <span class="mes-e">{{ $message }}</span>
                        @enderror
                    </div>
                  <div class="w-selectk">
                    <select class="ie-select" name="kelas">
                      <option selected>Pilih Kelas</option>
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
                      <option value="12">Kelas 12</option>
                    </select>
                    <i class="fa-solid fa-chevron-down arrow-icon"></i>
                  </div>

                </div>

                <div class="i-ep">
                    <div class="col d-flex justify-content-between">
                        <label for="" class="ji-ep">Jurusan</label>
                        @error('jurusan')
                        <span class="mes-e">{{ $message }}</span>
                        @enderror
                    </div>
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
                    <div class="col d-flex justify-content-between">
                        <label for="" class="ji-ep">Target</label>
                        @error('target')
                        <span class="mes-e">{{ $message }}</span>
                        @enderror
                    </div>
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
                    <div class="col d-flex justify-content-between">
                        <label for="" class="ji-ep">Pelajaran Favorit</label>
                        @error('pelajaranfavorit')
                        <span class="mes-e">{{ $message }}</span>
                        @enderror
                    </div>
                    <span class="ms-2" style="font-size: 13px; font-weight:600; color:rgb(231, 7, 7);">*maks 5</span>
                {{-- </div> --}}
                <div class="row  row-cols-2 row-cols-sm-3 mt-2">
                    @foreach ($checkboxItems as $item)
                    <div class="col mb-3">
                        <div class="form-check dark">
                            <input class="form-check-input" type="checkbox" name="pelajaran[]" value="{{ $item['value'] }}" id="{{ $item['id'] }}">
                            <label class="form-check-label" for="{{ $item['id'] }}">
                                {{ $item['label'] }}
                            </label>
                        </div>
                    </div>
                @endforeach

                </div>
                <div class="i-ep ">
                    <div class="col d-flex justify-content-between">
                        <label for="" class="ji-ep">Motto</label>
                        @error('motto')
                        <span class="mes-e">{{ $message }}</span>
                        @enderror
                    </div>
                    <input class="ie-nama" placeholder="Keikan Mottomu" type="text" name="motto" value="{{ old('motto') }}">
                </div>
                </div>
                </div>
            </div>
            <div class="d-flex justify-content-end mb-3 px-1 align-items-center">
              <button class="t-sep me-3 me-md-0 mt-md-3" type="submit">
                selesai
              </button>
            </div>

        </div>
    </form>
    </main>

    <script src="{{ asset('assets/js/script.js') }}">

    </script>
    <script>
          const form = document.getElementById('pelajaranForm');
        const checkboxes = form.querySelectorAll('input[type="checkbox"]');
        let checkedCount = 0;

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                if (checkbox.checked) {
                    checkedCount++;
                } else {
                    checkedCount--;
                }

                if (checkedCount > 5) {
                    checkbox.checked = false;
                    checkedCount--;
                }
            });
        });
    </script>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-    I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</html>
