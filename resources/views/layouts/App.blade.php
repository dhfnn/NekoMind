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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">

      </head>
  <body class=""  style="background-color: #F8F9FA !important;">
    <header class="position-fixed fixed-top d-md-flex justify-content">
      <nav class="navbar navbar-light navbar-expand-md dash-nav d-none d-md-flex">
        <div class="col container-fluid">
          <!-- bagian nav atas   -------------------------------------------------------------------------------->
          <div class="col-12 d-none d-md-flex justify-content-between align-items-center">
            <a class="navbar-brand ps-1 ps-sm-3 pe-5" href="#" style="color: #fe8d00; font-weight: 700; font-size: 25px">NekoMind</a>
            <div class="navbar navbar-hide me-md-4 d-none d-md-flex">
                <a href="{{ Route::currentRouteName() === 'dashboard-pengguna' ? '#' : route('dashboard-pengguna') }}">Beranda</a>

                <a href="{{ Request::is('MateriPengguna') ? '#' : url('MateriPengguna') }}" class="px-4">Materi</a>
                <a href="{{ Request::is('Soal')  ? '#' : url('Soal') }}" class="pe-4">Soal</a>
                <a href="{{ Request::is('peringkat')  ? '#' : url('peringkat') }}">Peringkat</a>
              <!-- <a href="" class="ps-4 ps-xl-5"><i class="fa-solid fa-circle-user i-pd"></i></a> -->
              <div class="menu-profile d-flex align-items-center">
                <ul class="menu">
                  <li class="menu-item">
                    <a href="Profilepengguna" class="ps-4 ps-xl-4 d-flex align-items-center a-putar">
                      <i class="fa-solid fa-caret-down i-putar" style="color: #00000076"></i>
                      <i class="fa-solid fa-circle-user i-pd ms-1"></i>
                    </a>
                    <ul class="drop-menu">
                      <li class="drop-menu-item"><a href="/Profilepengguna">Akun</a></li>
                      <li class="drop-menu-item"><a href="{{ url('Profilepengguna/' . $userId . '/edit') }}">Ubah Profile</a></li>
                      <li class="drop-menu-item">
                        <form action="/logout" method="POST">
                            @csrf
                        <button type="submit " style="border: none; background-color:transparent; color: rgb(255, 0, 0) !important" >
                            Keluar</button>
                        </li>
                        </form>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- penutup bagian nav atas   -------------------------------------------------------------------------------->
        </div>
      </nav>

      <!-- navbar bagian bawah  -------------------------------------------------------------------------------->
      <div class="navbar navbar-multi d-md-none pb-2 px-4">
        <div class="nav-item d-flex flex-column align-items-center ps-3 tod">
          <a href="{{ Route::currentRouteName() === 'dashboard-pengguna' ? '#' : route('dashboard-pengguna') }}" class="text-decoration-none d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-house i-multi {{ Route::currentRouteName() === 'dashboard-pengguna' ? 'i-act' : '' }}"></i>
            <span class="i-multit {{ Route::currentRouteName() === 'dashboard-pengguna' ? 'i-act' : '' }}">Beranda</span>
          </a>
        </div>
        <div class="nav-item d-flex flex-column align-items-center ps-0">
          <a href="{{ Request::is('MateriPengguna') ? '#' : url('MateriPengguna') }}" class="text-decoration-none d-flex flex-column justify-content-center align-items-center">
            <i class="fa-brands fa-leanpub i-multi  {{Request::is('MateriPengguna') ? 'i-act': '' }}   "></i>
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
          <a href="{{ request()->is('Profilepengguna') ? '#' : route('Profilepengguna.index') }}" class="text-decoration-none d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-circle-user i-multi {{ request()->is('Profilepengguna') ? 'i-act' : '' }}"></i>
            <span class="i-multit {{ request()->is('Profilepengguna') ? '#' : ''}}">Profile</span>
          </a>
        </div>
      </div>

      <!-- penutupan navbar bagian bawah  -------------------------------------------------------------------------------->
    </header>
    <body>

    @yield('main')
    <script>
// Memeriksa apakah ada elemen dengan id "kelasFilter"
var kelasFilterElement = document.getElementById('kelasFilter');

if (kelasFilterElement) {
    // Jika elemen dengan id "kelasFilter" ditemukan, tambahkan event listener
    kelasFilterElement.addEventListener('change', function () {
        var selectedKelas = this.value;

        if (selectedKelas === "") {
            // Jika "PILIH" dipilih, Anda dapat mengatur tindakan yang sesuai, misalnya kembali ke URL asal
            window.location.href = window.location.materi;
        } else {
            // Jika pilihan lain dipilih, maka ubah URL dengan parameter "kelas"
            window.location.search = `kelas=${selectedKelas}`;
        }
    });
}


function kirimTanggalKeController(tanggalParameter) {
    var tanggalSekarang = new Date();
    var tahun = tanggalSekarang.getFullYear();
    var bulan = tanggalSekarang.getMonth() + 1;
    var tanggal = tanggalSekarang.getDate();
    var tanggalFormat = tahun + '-' + (bulan < 10 ? '0' : '') + bulan + '-' + (tanggal < 10 ? '0' : '') + tanggal;
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: '/terimadataTanggal', // Ganti dengan URL endpoint controller Anda
        data: { tanggal: tanggalFormat },
        success: function(response) {
            console.log(response.pesan);
        },
        error: function(xhr, status, error) {
            console.error('Terjadi kesalahan: ' + error);
        }
    });
}
kirimTanggalKeController(tanggalFormat);



    </script>
    </body>


    <!-- main  -------------------------------------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
</body>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
  </html>
