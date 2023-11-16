<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="shortcut icon" href="{{ asset('assets/ikon/logon.png') }}" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" />
    <script src="https://kit.fontawesome.com/9494185896.js" crossorigin="anonymous"></script>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../assets/js/color-modes.js"></script>
</head>
<body>
    <div class="container d-flex flex-column align-items-center">
        <div class="col-12 col-xl-8 d-flex justify-content-center pt-2" >
            <div class="d-flex justify-content-center" style="width: 80%;">
                <nav class=" d-flex justify-content-center mt-3 " >
                    <div class="">
                        <a href="{{ route('masuk') }}" class="btn-login fw-bold" >Masuk</a>
                    </div>
                    <div>
                        <a href="" class="btn-login-active  fw-bold" style="">Daftar</a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="card bg-white text px-4 py-1 py-sm-3 mt-3 card-masuk" >
            <div class="card-body text-center">
                <div class="col-12 text-start ">
                    <span class="fw-bolder fs-3 d-block text-info text-gradient">Silahkan isi data untuk melakukan pendaftaran </span>
                    <span style="color: rgba(0, 0, 0, 0.837); font-size: 15px; ">Bergabung dan belajar bersama Buwhan Edu, gratis!</span>
                </div>
                <!-- <div class="col-12 d-flex flex-row justify-content-center">
                    <div class="col-12 ps-2 text-start">
                        <span class="m" >Masukan Email dan Password untuk Login</span>
                    </div>
                </div> -->
                <div class="col-12  d-flex flex-row justify-content-center pt-4 ">
                    <div class="col-12">
                        <form action="{{ route('register') }}" method="POST">
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
                                <input type="password" class="form-control"  placeholder="Masukan Password" aria-label="Password" value="" name="password">
                            </div>
                            <div class="col text-start ms-sm-1">
                                <label for="" class="fw-bold" style="">Konfirmasi Password</label>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" aria-label="Konfirmasi Password">
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
                        Daftar
                    </button>
                </div>
            </form>
            </div>
        </div>

    </div>
    </div>



    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>


<!--
<div class="form-floating mb-4">
    <input type="email" id="form2Example1" class="form-control" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div> -->


<!--
<div class="form-floating mb-4">
    <input type="email" id="form2Example1" class="form-control" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div> -->


<!--

  <div class="">
    <a href="login.html" class="btn-login" >Sign in</a>
</div>
<div>
    <a href="#" class="btn-login-active" >Sign up</a>
</div> -->
