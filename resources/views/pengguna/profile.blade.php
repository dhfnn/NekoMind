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
      <!-- navbar bagian bawah  -------------------------------------------------------------------------------->
      <div class="navbar navbar-multi d-md-none pb-2 px-4">
        <div class="nav-item d-flex flex-column align-items-center ps-3 tod">
          <a href="{{ Route::currentRouteName() === 'dashboard-pengguna' ? '#' : route('dashboard-pengguna') }}" class="text-decoration-none d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-house i-multi {{ Route::currentRouteName() === 'dashboard-pengguna' ? 'i-act' : '' }}"></i>
            <span class="i-multit {{ Route::currentRouteName() === 'dashboard-pengguna' ? 'i-act' : '' }}">Beranda</span>
          </a>
        </div>
        <div class="nav-item d-flex flex-column align-items-center ps-0">
          <a href="{{ Route::currentRouteName() === 'materi' ? '#' : url('Pelajaran') }}" class="text-decoration-none d-flex flex-column justify-content-center align-items-center">
            <i class="fa-brands fa-leanpub i-multi  {{ Route::currentRouteName() === 'materi' ? 'i-act' : '' }}   "></i>
            <span class="i-multit  {{ Route::currentRouteName() === 'materi' ? 'i-act' : '' }}   ">Materi</span>
          </a>
        </div>
        <div class="nav-item d-flex flex-column align-items-center">
            <a href="{{ Request::is('Soal') ? '#' : url('Soal') }}" class="text-decoration-none d-flex flex-column justify-content-center align-items-center">
                <i class="fa-solid fa-lines-leaning i-multi  {{Request::is('Soal') ? 'i-act': '' }}"></i>
                <span class="i-multit  {{Request::is('Soal') ? 'i-act': '' }}  ">Soal</span>
          </a>
        </div>
        <div class="nav-item d-flex flex-column align-items-center ps-0 pe-3">
            <a href="{{ $namepage === 'Profile' ? '#' : route('Profilepengguna.create') }}" class="text-decoration-none d-flex flex-column justify-content-center align-items-center">
                <i class="fa-solid fa-circle-user i-multi {{ $namepage === 'Profile' ? 'i-act' : '' }}"></i>
                <span class="i-multit {{ $namepage === 'Profile' ? 'i-act' : '' }}">Profile</span>
            </a>
        </div>

      </div>
      <!-- penutupan navbar bagian bawah  -------------------------------------------------------------------------------->
    </header>

    <!-- dashboard  -------------------------------------------------------------------------------->
    <main style="background-color: #F8F9FA;">
      <div class="container-fluid px-3 px-sm-5 py-1">
        <nav class="navbar navbar-light navbar-expand-md d-flex justify-content-between align-items-center">
          <div class="container-fluid" style="display: flex !important; align-items: center !   ;">
            <a href="javascript:void(0);" onclick="backpage()" class="d-none d-md-block">
              <i class="fa-solid fa-arrow-left" style="color: #313131b0; font-size: 25px;"></i>
            </a>
            <span  style="font-size:25px; font-weight: bolder;color: #3b73c5;">Profile</span>
            <div class="menu-pengaturan d-flex align-items-center">
              <ul class="menu-ip m-0 p-0">
                <li class="menu-item-p">
            <i class="fa-solid fa-gear" style="color: #313131b0; font-size: 23px; cursor:pointer ;"></i>
                  <ul class="drop-menup">
                    <li class="p-2" style="font-weight: 700; color:#3c3c3c; font-size: 18px; border-bottom:  0.1px solid #3c3c3c14; ">Pengaturan</li>

                    <li class="drop-menu-itemp"><a href="{{ url('Profilepengguna/' . $userId . '/edit') }}">Ubah Profile</a></li>
                    <li class="drop-menu-itemp"><a href="editp.html">Ubah Kata Sandi</a></li>
                    <li class="drop-menu-itemp"><a href="" style="color: rgb(255, 0, 0) !important">Keluar</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
      </div>
        <div class="container pt-2 pt-md-0">

        </nav>

            <div class="row row-cols-1 pb-3 pb-md-0 pt-md-2">
                <div class="col col-md-5 col-lg-4 text-center px-4 px-md-0">
                  <!-- <span class="">Profile</span> -->
                  <div class="col ps-2  pb-1 text-start">
                    <span class="fw-bold" style="text-align: start; font-size: 10px; color: rgba(0, 0, 0, 0.752);">*tampilan kartu profilemu</span>
                  </div>

                    <div class="card-p bg-white pb-3" style="" >
                      <div class="card-header">
                        <div class="card-cover"></div>
                        <div class="card-avatar"></div>
                        <div class="card-fullname">{{ $dataPengguna->nama }}</div>
                        <div class="card-level">Level 12</div>
                      </div>
                      <div class="card-main  px-3 mt-3 mt-lg-5">
                        <div class="card-about text-start px-4 px-lg-5 ">
                          <div class="card-title">
                            Tentang Saya
                          </div>
                          <p class="card-desc ">Saya sekolah di {{ $dataLainnya-> namasekolah}} Kelas {{ $dataLainnya->kelas}}  {{ $dataLainnya->jurusan}}. Pelajaran yang saya sukai diantaranya Matematika,Kimia Fisika dan Biologi. Target Belajar saya adalah berhasil dalam Pelaksanaan {{ $dataLainnya->target}}.</p>
                        </div>
                        <!-- ini bagian card mooto -->
                        <div class="card-motto mt-2 px-4">
                          <div class="card-title2">
                            Motto
                          </div>
                          <p class="card-desc2">
                            {{-- Kalau bisa Satu kenapa harus Satu --}}
                            {{ $dataLainnya->motto}}
                          </p>
                        </div>
                        <!-- ini bagian kontak -->
                      </div>
                    </div>
                    <!-- <div class="col text-">hai</div> -->
                </div>


                <div class="col col-md-7 col-lg-8 mt-5 mt-md-0 px-4 pb-5 pb-lg-0">
                    <!-- pembuka data diri -->
                <div class="col-12 ps-md-5">
                  <div class="d-flex justify-content-md-end align-items-center">
                    <span class="title-dp">Data pribadi</span>
                    <!-- <a href="editp.html" class="text-decoration-none ps-5 title-ub" >Ubah Profile</a> -->

                  </div>
                  <!-- <div class="row mt-1 py-2 py-xl-3" style="border: 1px solid rgba(0, 0, 0, 0.161);border-radius: 10px;"> -->
                  <div class="row mt-1 py-2 py-xl-3" style="background-color: white; border-radius: 10px; box-shadow: 0 10px 27px 0 rgba(0, 0, 0, 0.05);">

                    <div class="col px-3">
                      <div class="w-dp">
                        <label for="" class="j-dp">Nama</label>
                        <span class="i-dp">{{ $dataPengguna->nama }}</span>
                      </div>
                      <div class="w-dp">
                        <label for="" class="j-dp">Tanggal Lahir</label>
                        <span class="i-dp">{{ $dataPengguna->tanggallahir }}</span>
                      </div>
                      <div class="w-dp">
                        <label for="" class="j-dp">Jenis Kelamin</label>
                        <span class="i-dp">{{ $dataPengguna->jeniskelamin}}</span>
                      </div>
                      <div class="w-dp">
                        <label for="" class="j-dp">Kota/Kabupaten</label>
                        <span class="i-dp">{{ $dataPengguna->kota}}</span>
                      </div>
                      <div class="w-dp">
                        <label for="" class="j-dp">Alamat</label>
                        <span class="i-dp">{{ $dataPengguna->alamat}} </span>
                      </div>
                    </div>


<!-- SEBELAH KIRI -->
                    <div class="col px-3">
                      <div class="w-dp">
                        <label for="" class="j-dp">Email</label>
                        <span class="i-dp">{{ $dataAkun->email}}</span>
                      </div>
                      <div class="w-dp">
                        <label for="" class="j-dp">No Handphone</label>
                        <span class="i-dp">{{ $dataPengguna->nohp}}</span>
                      </div>
                    </div>

                  </div>
                </div>
                <!-- penutup data diri -->


                <!-- pembuka Lainnya -->
                <div class="col-12 ps-md-5 my-4" style="">
                  <div class="d-flex justify-content-md-end align-items-center">
                    <span class="title-dp">Lainnya</span>
                    <!-- <a href="editp.html" class="text-decoration-none ps-5 title-ub" >Ubah Profile</a> -->

                  </div>
                  <div class="row mt-1 py-2 py-xl-3 d-flex flex-column flex-sm-row " style="background-color: white; border-radius: 10px; box-shadow: 0 10px 27px 0 rgba(0, 0, 0, 0.05);">
                    <div class="col px-3">
                      <div class="w-dp">
                        <label for="" class="j-dp">Nama Sekolah</label>
                        <span class="i-dp">{{ $dataLainnya->namasekolah}}</span>
                      </div>
                      <div class="w-dp">
                        <label for="" class="j-dp">Kelas</label>
                        <span class="i-dp">Kelas {{ $dataLainnya->kelas}}</span>
                      </div>
                      <div class="w-dp">
                        <label for="" class="j-dp">Jurusan</label>
                        <span class="i-dp">{{ $dataLainnya->jurusan}}</span>
                      </div>
                    </div>


<!-- SEBELAH KIRI -->
                    <div class="col px-3">
                      <div class="w-dp">
                        <label for="" class="j-dp">Pelajaran Favorit</label>
                        <span class="i-dp">{{ $dataLainnya-> pelajaranfav}}</span>
                      </div>
                      <div class="w-dp">
                        <label for="" class="j-dp">Target Belajar</label>
                        <span class="i-dp">{{ $dataLainnya->target}}</span>
                      </div>
                      <div class="w-dp">
                        <label for="" class="j-dp">Motto</label>
                        <span class="i-dp">{{ $dataLainnya->motto}}</span>
                      </div>
                    </div>

                  </div>
                </div>
                <!-- penutup data diri -->

                </div>
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
