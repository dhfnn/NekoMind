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
          <!-- bagian nav atas   -------------------------------------------------------------------------------->
          <div class="col-12 d-none d-md-flex justify-content-between align-items-center">
            <a class="navbar-brand ps-1 ps-sm-3 pe-5" href="#" style="color: #fe8d00; font-weight: 700; font-size: 25px">NekoMind</a>
            <div class="navbar navbar-hide me-md-4 d-none d-md-flex">
                <a href="{{ Route::currentRouteName() === 'dashboard-pengguna' ? '#' : route('dashboard-pengguna') }}">Beranda</a>

                <a href="{{ Route::currentRouteName() === 'materi' ? '#' : route('materi') }}" class="px-4">Materi</a>

                <a href="{{ Route::currentRouteName() === 'soal' ? '#' : route('soal') }}">Soal</a>
              <!-- <a href="" class="ps-4 ps-xl-5"><i class="fa-solid fa-circle-user i-pd"></i></a> -->
              <div class="menu-profile d-flex align-items-center">
                <ul class="menu">
                  <li class="menu-item">
                    <a href="{{ route('profile-pengguna') }}" class="ps-4 ps-xl-4 d-flex align-items-center a-putar">
                      <i class="fa-solid fa-caret-down i-putar" style="color: #00000076"></i>
                      <i class="fa-solid fa-circle-user i-pd ms-1"></i>
                    </a>
                    <ul class="drop-menu">
                      <li class="drop-menu-item"><a href="{{ route('profile-pengguna') }}">Akun</a></li>
                      <li class="drop-menu-item"><a href="{{ route('editprofile-p') }}">Ubah Profile</a></li>
                      <li class="drop-menu-item"><a href="" style="color: rgb(255, 0, 0) !important">Keluar</a></li>
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
      <<div class="navbar navbar-multi d-md-none pb-2 px-4">
        <div class="nav-item d-flex flex-column align-items-center ps-3 tod">
          <a href="{{ Route::currentRouteName() === 'dashboard-pengguna' ? '#' : route('dashboard-pengguna') }}" class="text-decoration-none d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-house i-multi {{ Route::currentRouteName() === 'dashboard-pengguna' ? 'i-act' : '' }}"></i>
            <span class="i-multit {{ Route::currentRouteName() === 'dashboard-pengguna' ? 'i-act' : '' }}">Beranda</span>
          </a>
        </div>
        <div class="nav-item d-flex flex-column align-items-center ps-0">
          <a href="{{ Route::currentRouteName() === 'materi' ? '#' : route('materi') }}" class="text-decoration-none d-flex flex-column justify-content-center align-items-center">
            <i class="fa-brands fa-leanpub i-multi  {{ Route::currentRouteName() === 'materi' ? 'i-act' : '' }}   "></i>
            <span class="i-multit  {{ Route::currentRouteName() === 'materi' ? 'i-act' : '' }}   ">Materi</span>
          </a>
        </div>
        <div class="nav-item d-flex flex-column align-items-center">
          <a href="{{ Route::currentRouteName() === 'soal' ? '#' : route('soal') }}" class="text-decoration-none d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-lines-leaning i-multi {{ Route::currentRouteName() === 'soal' ? 'i-act' : '' }}  "></i>
            <span class="i-multit {{ Route::currentRouteName() === 'soal' ? 'i-act' : '' }}  ">Soal</span>
          </a>
        </div>
        <div class="nav-item d-flex flex-column align-items-center ps-0 pe-3">
          <a href="{{ Route::currentRouteName() === 'profile-pengguna' ? '#' : route('profile-pengguna') }}" class="text-decoration-none d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-circle-user i-multi {{ Route::currentRouteName() === 'profile-pengguna' ? 'i-act' : '' }} "></i>
            <span class="i-multit {{ Route::currentRouteName() === 'profile-pengguna' ? 'i-act' : '' }} ">Profile</span>
          </a>
        </div>
      </div>

      <!-- penutupan navbar bagian bawah  -------------------------------------------------------------------------------->
    </header>

    <!-- main  -------------------------------------------------------------------------------->
    @yield('main')

    <script src="{{ asset('assets/js/script.js') }}"></script>
  </body>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</html>
