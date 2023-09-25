<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/" />

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
                        <div class="col-12 text-start mb-3">
                            <label for="" class="fw-bold">Nama Lengkap</label>
                             <input type="text" class="form-control"id="floatingInput" placeholder="" >
                        </div>
                        <div class="col-12 text-start mb-3">
                            <label for="" class="fw-bold">Email</label>
                             <input type="text" class="form-control"id="floatingInput" placeholder="examples@gmail.com" >
                        </div>
                        <div class="col-12 text-start mb-3">
                            <label for="" class="fw-bold ">Username</label>
                             <input type="text" class="form-control"id="floatingInput" placeholder="Username" >
                        </div>

                          <div class="col-12 g-2 d-flex flex-column flex-sm-row ">

                                <div class="col text-start mb-2 mb-sm-0 pe-sm-1">
                                    <label for="" class="fw-bold">Password</label>
                                  <input type="text" class="form-control" placeholder="******" aria-label="First name">
                                </div>
                                <div class="col text-start ms-sm-1">
                                    <label for="" class="fw-bold" style="">Konfirmasi Password</label>
                                  <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                                </div>
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
                <div class="col-12 text-centbr  py-3">
                    <span class="">Atau</span>
                </div>

                <div class="col-12 text-center  d-flex flex-column align-items-center ">
                    <button class=" sign-gl">
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="28px" height="28px"><path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></svg>
                        <span style="color: #4A4A4A;
                                    font-size: 16px;
                                    margin-left: 5px;">Daftar dengan Google</span>
                    </button>
                </div>
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
