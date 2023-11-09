<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
  <head>


    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Hugo 0.115.4" />
    <title>tes</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" />
    <script src="https://kit.fontawesome.com/9494185896.js" crossorigin="anonymous"></script>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../assets/js/color-modes.js"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, 0.1);
        border: solid rgba(0, 0, 0, 0.15);
        border-width: 1px 0;
        box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1), inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -0.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
    </style>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  </head>
  <body class="" style="background-color: #D0DDF0;">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path
          d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"
        />
        <path
          d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"
        />
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path
          d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"
        />
      </symbol>
    </svg>
    <header data-bs-theme="light" class="position-fixed fixed-top d-flex justify-content-center">
      <nav class="navbar navbar-light navbar-expand-md d-flex justify-content-between carousel-nav">
        <div class="container-fluid">
          <a class="navbar-brand ps-1 ps-sm-3" href="#" style="color: #fe8d00; font-weight: 700; font-size: 25px">NekoMind</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse   justify-content-end" id="navbarCollapse">
            {{-- <ul class="navbar-nav mx-auto mb-2 mb-md-0">
              <li class="nav-item d-sm-flex align-items-center pe-sm-3">
                <a class="n-link" aria-current="page" href="#">Fitur</a>
              </li>
              <li class="nav-item d-sm-flex align-items-center px-md-5">
                <a class="n-link" href="#">Tentang</a>
              </li>
              <li class="nav-item d-sm-flex align-items-center ps-sm-3">
                <a class="n-link" aria-disabled="true">Kontak</a>
              </li>
            </ul> --}}

            <ul class="navbar-nav end-0 mb-2 mb-md-0">
              <button class="btn btn-sm" style="font-size: 16px; font-weight: 700; color: #3b73c5">
                <a href="{{ route('masuk') }}" class="text-decoration-none">Masuk</a>
              </button>
              <button class="btn" style="font-size: 16px; font-weight: 700; border: none; background-color: #3b73c5"><a href="{{ route('daftar') }}" class="text-decoration-none" style="color: white">Daftar</a></button>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main >
      <div class="bc-biru">

      <div class="container-fluid pt-4 pt-sm-5 bc-biru">
        <div class="row align-items-center pt-5 px-3 px-sm-5 ">
          <div class="col-xxl-8 px-xl-5">
            <div class="text-center text-xxl-start pt-3 pt-sm-5">
              <h1 class="text-start text-sm-start display-3 fw-bolder text-white pt-3"><span class="text-gradient d-inline">Tahun Ajaran Baru Jangan Sampai Tersesat!</span></h1>
              <div>

                {{-- <div class="text-start text-sm-start fw-light text-white t-tam">Blablaba akan siap membantumu untuk Jadi Apapun yang Kamu Mau!</div> --}}
                <div class="text-end text-sm-start tagar pb-5 fw-bold" style="color: #fe8d00">Nekomind akan siap membantumu untuk Jadi Apapun yang Kamu Mau!</div>
              </div>

              <div class="d-flex justify-content-end gap-3 d-sm-flex justify-content-sm-end justify-content-xxl-start mb-5 py-1 py-sm-5">
                <a class="btn btn-primary btn-lg px-sm-5 py-sm-3 me-sm-3 fw-sm-bolder tt-ds" href="resume.html" style="background-color: #fe8d00">Daftar Sekarang</a>
              </div>
            </div>
          </div>
          <div class="col-xxl-4">
            <!-- Header profile picture-->
            <div class="d-flex justify-content-center mt-5 mt-xxl-0">
              <div class="profile bg-gradient-primary-to-secondary">
                <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                <!-- Watch a tutorial on how to do this on YouTube (link)-->
                <img class="profile-img" src="{{ asset('assets/ikon/cat2.png') }}" alt="..." />
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="container-fluid pb-5" style="background-color: #F4F7FA; border-radius: 30px 30px 0px 0px">
        <div class="container">
          <h2 class="text-center fw-bold pt-5" style="color: #3B73C5;">Kenapa harus pilih <span class="" style="color: #fe8d00;">NekoMind</span> ?</h2>
        </div>
      <div class="container-xxl-fluid pb-0 pt-4 px-xxl-5">
        <div class="row row-cols-1  row-cols-xl-3 g-xl-2 g-1 ps-md-5 ps-xl-1 px-2 pe-sm-1 pb-5">
          <div class="col d-flex  px-sm-3 pb-md-5">
            <div class=" rounded-circle bg-primary col-3 gam-3 " >
            </div>
            <div class="col-9  ps-3 pe-xl-2 pt-2">
              <h5 class=" fw-semibold" style="color: #1D3962;">
              Mendapatkan Hasil Ujian yang Bagus
              </h5>
              <p  class="lh-sm " style="">
                Latihan soal maupun simulasi ujian  yang di sediakan, Sikat Soal, Try Out, hingga Pegasus akan bantu persiapanmu hadapi ujian tengah maupun akhir semester, UTBK, hingga Ujian Mandiri masuk kampus.
              </p>
            </div>
          </div>
          <div class="col d-flex  px-sm-3">
            <div class=" rounded-circle bg-primary col-3 gam-3" >
            </div>
            <div class="col-9  ps-3 pe-xl-2 pt-2">
              <h5 class=" fw-semibold" style="color: #1D3962;">
                Materi pembelajaran paling up-to-date
              </h5>
              <p  class="lh-sm " style="text-align: justify;
                                        color: #1d3962ca;">
                Jangan khawatir cari materi terkait  pembelajaran, disini akan bantu sediakan berbagai informasi ter-update yang kamu butuhkan.
              </p>
            </div>
          </div>
          <div class="col d-flex  px-sm-3">
            <div class=" rounded-circle bg-primary col-3 gam-3" >
            </div>
            <div class="col-9  ps-3 pe-xl-2 pt-2">
              <h5 class=" fw-semibold" style="color: #1D3962;">
                Lebih Cepat memahami materi
              </h5>
              <p  class="lh-sm " style="text-align: justify;
                                        color: #1d3962ca;">
                Materi yang di sampaikan sangat ringkas dan juga jelas,yang membuat lebih cepat mengerti dan paham pada materi yang sedang di bahas
              </p>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>


      <!-- BAGIAN NGMABANG -->
      <div class="container booking pb-5" >
          <div class="container px-3 px-xl-5" >
              <div class="bg-white  tengah ">
                <div class=" row row-cols-1  row-cols-xl-2  px-4 px-xl-3">
                  <div class="col col-xl-4">
                    <div class=" ps-5 d-none d-md-block">p</div>
                  </div>
                  <div class="col col-xl-8">
                    <div class=" col py-1   px-xl-3">
                      <h5 class="j-tengah" style="color: #3b73c5; ">Buwhan Edu siap membantumu!</h5>
                      <p class=" i-tengah mt-2 mb-4" style="color: #1D3962; text-align: justify;" >Tenang saja sobat Buwhan, Buwhan Edu akan membantumu belajar efektif dengan rangkuman lengkap serta ribuan soal yang variatif dan menantang.</p>
                      <div class=" d-flex justify-content-end">
                        <button class="t-cs " style="">Coba Sekarang</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
      <!-- Booking End -->


      <!-- About Start -->
      <div class="container-fluid" style="background-color: #D0DDF0;">
          <div class="container  px-xl-5">
              <div class="row g-5 d-flex justify-content-center align-items-center">
                  <!-- <div class="col-lg-6">
                      <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                      <h1 class="mb-4">Welcome to <span class="" style="color: #fe8d00;">NekoMind</span></h1>
                      <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere similique voluptas autem sequi, nihil veniam quod? Ratione tempore illo ipsa ea nemo iusto!</p>
                      <div class="row g-3 pb-4">
                          <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                              <div class="border rounded p-1">
                                  <div class="border rounded text-center p-4">
                                      <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                      <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                      <p class="mb-0">Materi</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                              <div class="border rounded p-1">
                                  <div class="border rounded text-center p-4">
                                      <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                      <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                      <p class="mb-0">Soal</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                              <div class="border rounded p-1">
                                  <div class="border rounded text-center p-4">
                                      <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                      <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                      <p class="mb-0">TryOut</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div> -->
                  <div class="row row-cols-1 row-cols-xl-2 px-0px-md-5 my-5 d-flex align-items-center justify-content-center">
                    <div class="col px-lg-5 px-xl-0">
                      <!-- <h6 class="section-title text-start text-primary text-uppercase">About Us</h6> -->
                      <h2 class="mb-2 fw-bold" style="color: #fe8d00;">Tunggu Apa Lagi ?</h1>
                      <p class="mb-4">Ayo, berbagai macam ringkasan materi,soal yang beragam dan beberapa fitur lainnya  siap membantu proses pembelajaranmu.Kamu bisa menikmati semua fitur yang tersedia secara gratis </p>
                    </div>
                    <div class="col px-lg-5 px-xl-0">
                      <div class="row d-flex  g-0 g-md-3 pb-4">
                        <div class="col-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center k-3 p-4 bg-white flex-column t-e  ">
                                  <i class="fa-brands fa-leanpub mb-2 fs-5 fs-md-2" style="color: #3b72c5c8;"></i>
                                    <h3 class="m-i" style="color: rgb(69, 69, 69); " data-toggle="counter-up">{{ $totalMateri }}</h3>
                                    <p class="mb-0" style="font-weight: 600;">Materi</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center k-3 p-4 bg-white flex-column t-e   ">
                                  <i class="fa-solid fa-lines-leaning mb-2 fs-5 fs-md-2" style="color: #3b72c5c8 ;"></i>
                                    <h3 class="m-i" data style="color: rgb(69, 69, 69);"-toggle="counter-up">1234</h3>
                                    <p class="mb-0" style="font-weight: 600;"> Soal</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center k-3 p-4 bg-white flex-column t-e  ">
                                    <i class="fa-solid fa-list-check mb-2 fs-5 fs-md-2" style="color: #3b72c5c8 ;"></i>
                                    <h3 class="m-i" dat style="color: rgb(69, 69, 69);"a-toggle="counter-up">1234</h3>
                                    <p class="mb-0" style="font-weight: 600;" >TryOut</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- About End -->



      <!-- Marketing messaging and featurettes
  ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->




      <!-- FOOTER -->


    </main>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>
