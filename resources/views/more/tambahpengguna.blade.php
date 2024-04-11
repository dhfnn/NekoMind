<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="{{ asset('assets/ikon/logon.png') }}" type="image/x-icon">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
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
        <div class="container  pt-md-5  px-2 d-flex flex-column jutify-content-center align-items-center">
            <div class="card bg-white text px-4 py-1 py-sm-3 mt-3 card-masuk" >
                <div class="card-body text-center">
                        <span style="color: rgba(0, 0, 0, 0.837); font-size: 15px; ">*Untuk menambah Akun/Pengguna isi data terlebih dahulu</span>
                    <div class="col-12  d-flex flex-row justify-content-center pt-4 ">
                        <div class="col-12">
                            <form action="/data" method="POST">
                                @csrf
                                <div class="col-12 text-start mb-3">
                                    <div class="col d-flex justify-content-between">
                                    <label for="" class="fw-bold ">Username</label>
                                        @error('username')
                                        <span class="mes-e">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <input type="text" class="form-control"id="floatingInput" placeholder="Username" value="{{ old('username') }}" name="username">
                                </div>
                            <div class="col-12 text-start mb-3">
                                <div class="col d-flex justify-content-between">
                                    <label for="" class="fw-bold">Email</label>
                                    @error('email')
                                    <span class="mes-e">{{ $message }}</span>
                                    @enderror
                                </div>

                                 <input type="email" class="form-control"id="floatingInput" placeholder="examples@gmail.com " value="{{ old('email') }}" name="email" >
                            </div>
                              <div class="col-12 g-2 d-flex flex-column flex-sm-row ">
                                <div class="col text-start mb-2 mb-sm-0 pe-sm-1">
                                    <label for="" class="fw-bold">Password</label>
                                    <input type="text" class="form-control"  placeholder="Masukan Password" aria-label="Password" value="" name="password">
                                </div>
                                <div class="col text-start ms-sm-1">
                                    <div class="col d-flex justify-content-between">
                                        <label for="" class="fw-bold">Role</label>
                                        @error('email')
                                        <span class="mes-e">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <select class="form-select" aria-label="Default select example" name="role">
                                        <option selected>role</option>
                                        <option value="admin">Admin</option>
                                        <option value="pengguna">Pengguna</option>
                                      </select>
                                </div>
                              </div>
                              <div class="col text-start">
                                @error('password')
                                <span class="mes-e">{{ $message }}</span>
                                @enderror
                              </div>


                              <!-- <div class="col-12 text-end pt-2 pe-2">
                                <a href="" style="font-size: 14px; color: rgba(0, 94, 255, 0.883); text-decoration: none; ">Lupa password?</a>
                              </div> -->
                        </div>

                    </div>
                    <div class="col-12">
                        <button  class="sign-em">
                            Tambahkan
                        </button>
                    </div>
                </form>
                </div>
            </div>
        </form>


        </div>
    </main>

    <script src="{{ asset('assets/js/script.js') }}">

    </script>
  </body>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-    I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</html>
