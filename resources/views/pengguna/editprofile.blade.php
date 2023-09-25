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
                      <div class="d-flex justify-content-end d-md-none">
CC
                      </div>

                        <div class="i-ep mt-3 mt-md-5">
                            <label for="" class="ji-ep">Nama Lengkap</label>
                            <input class="ie-nama" placeholder="Nama Lengkap" type="text">
                        </div>
                        <div class="i-ep">
                            <label for="" class="ji-ep">Tanggal Lahir</label>
                            <input class="ie-date"  type="Date">
                        </div>
                        <div class="i-ep">
                            <label for="" class="ji-ep">Jenis Kelamin</label>
                            <div class="radio">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="JenisKelamin" id="lk" value="Laki-Laki" checked>
                                    <label class="form-check-label" for="lk">
                                      Laki-Laki
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="JenisKelamin" id="pr" value="Perempuan">
                                    <label class="form-check-label" for="pr">
                                      Perempuan
                                    </label>
                                  </div>
                            </div>
                        </div>
                        <div class="i-ep">
                          <label for="" class="ji-ep">Kota/Kabupaten</label>
                          <div class="w-select">
                            <select class="ie-select">
                              <option selected>Pilih Kota</option>
                              <option value="1">one</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                            <i class="fa-solid fa-chevron-down arrow-icon"></i>
                          </div>

                        </div>
                        <div class="i-ep">
                            <label for="" class="ji-ep">Alamat</label>
                            <textarea name="" id="" class="ie-alamat"></textarea>
                        </div>
                        <div class="i-ep">
                          <label for="" class="ji-ep">Email</label>
                          <input type="Email" name="" id="" class="ie-nama" placeholder="example@gmail.com">
                       </div>
                       <div class="i-ep">
                        <label for="" class="ji-ep">No Handphone</label>
                        <input type="number" name="" id="" class="ie-no" placeholder="08XXXXXXXXXX">
                      </div>
                    <!-- </div> -->
                </div>

                <div class="col col-md-6 mt-5 mt-md-0 px-4 ">
                  <span class="title-dp pb-4 position-absolute">Lainnya</span>

                <div class="i-ep mt-5">
                  <label for="" class="ji-ep">Nama Sekolah</label>
                  <div class="w-select">
                    <select class="ie-select">
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
                    <select class="ie-select">
                      <option selected>Pilih Kelas</option>
                      <option value="Kelas_1">Kelas 1</option>
                      <option value="Kelas_2">Kelas 2</option>
                      <option value="Kelas_3">Kelas 3</option>
                      <option value="Kelas_4">Kelas 4</option>
                      <option value="Kelas_5">Kelas 5</option>
                      <option value="Kelas_6">Kelas 6</option>
                      <option value="Kelas_7">Kelas 7</option>
                      <option value="Kelas_8">Kelas 8</option>
                      <option value="Kelas_9">Kelas 9</option>
                      <option value="Kelas_10">Kelas 10</option>
                      <option value="Kelas_11">Kelas 11</option>
                      <option value="Kelas_12">Kelas 12</option>
                    </select>
                    <i class="fa-solid fa-chevron-down arrow-icon"></i>
                  </div>

                </div>

                <div class="i-ep">
                  <label for="" class="ji-ep">Jurusan</label>
                  <div class="w-selectk">
                    <select class="ie-select">
                      <option selected>Pilih Jurusan</option>
                      <option value="1">one</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                    <i class="fa-solid fa-chevron-down arrow-icon"></i>
                  </div>

                </div>
                <div class="i-ep mt-5">
                  <label for="" class="ji-ep">Target Belajar</label>
                  <div class="w-select">
                    <select class="ie-select">
                      <option selected>Tentukan Targetmu</option>
                      <option value="UTBK">UTBK</option>
                      <option value="UTS">UTS</option>
                      <option value="UAS">UAS</option>
                      <option value="OLIMPIADE">OLIMPIADE</option>
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
                  <div class="col mb-3">
                    <div class="form-check dark">
                      <input class="form-check-input" type="checkbox" value="" id="Ekonomi">
                      <label class="form-check-label" for="Ekonomi">
                        Ekonomi
                      </label>
                    </div>
                  </div>
                </div>
                </div>
                  <!-- </div> -->
                </div>
            </div>
            <div class="d-flex justify-content-end mb-3 px-1 align-items-center">
              <button class="t-sep me-3 me-md-0 mt-md-3">
                selesai
              </button>
            </div>

        </div>
    </main>

    <script src="{{ asset('assets/js/script.js') }}">

    </script>
  </body>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-    I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</html>
