<!-- <!DOCTYPE html> -->
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
        <!-- <script src="../assets/js/color-modes.js"></script> -->
      </head>
<body style="background-color: #f1f1f1a5;">
    <nav class="navbar" style="background-color: white; padding: 0px !important;">
        <div class="container-fluid px-4 px-md-5 pt-4 pt-md-3  pb-3 pb-md-0 py-md-4 position-relative" style="display: flex !important; align-items: center !important;">
            <div class="col position-absolute">
                <a href="javascript::void(0);" class="" onclick="backpage()" >
                    <i class="fa-solid fa-arrow-left-long bck-materi" style=""></i>
                </a>
            </div>
            <div class="col-12 text-center pt-1 pt-md-3 py-md-3 ">
                <span class="jn-materi text-uppercase ">
                    {{ $pelajaran->namapelajaran }}
                </span>
            </div>
        </div>
        <div class="container-fluid pt-3  px-5">
            <div class="col pindah-semester">
                <div class="row text-center t-semester">
                    <div class="col py-1 pilih-sa" id="semester1">
                        <a class="tdn" href="#">Semester 1</a>
                    </div>
                    <div class="col py-1 pilih-s" id="semester2">
                        <a href="#" class="tdn">Semester 2</a>
                    </div>
                </div>
            </div>
        </div>


        </nav>



      <main>
        <div class="container-fluid py-3 px-3 px-md-5 d-md-flex justify-content-between">
            <div class=" col col-md-4 " id="wadah-bab">
                <div class="col  d-flex justify-content-center " >
                    <div class=" wadah-materi pb-3 ">
                        <div class="col px-3 pt-3">
                            <span style="font-size: 10px; font-weight: 600; color: #316368;">*pilih bab materi yang ingin pelajari</span>
                        </div>
                        <div class="col d-flex flex-column px-4">
                            @foreach ($dataBab->sortBy('subab') as $bab )

                                <a href="" class="tdn t-bab">
                                    <div class="bagan-bab px-3 py-3 mb-3">BAB {{ $bab->subab }} {{ $bab->judul }}</div>
                                </a>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="col d-flex ps-0 ps-md-4 mt-3 mt-md-0">
                @yield('main')
            </div>
        </div>
      </main>




      <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>