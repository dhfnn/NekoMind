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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>


  </head>
  <body>
    <!-- dashboard  -------------------------------------------------------------------------------->
    <main class="pt-3 ">
            <div class="container-fluid">
                <div class="col my-2 d-flex align-items-center ms-3" >
                    <a href="{{ url('data') }}" class="title-dp me-5  " style="color:black;" >
                        <i class="fa-solid fa-arrow-right-from-bracket " style=" transform: rotate(180deg);"></i>
                    </a>
                    <span class="ji-sp">Edit data akun</span>

                </div>
            </div>
        <div class="container px-2" >
            <form action="{{url( 'data/'.$data->id)   }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row row-cols-1 py-md-3 px-3 wi-ep">
                    <div class="col col-md-6 px-4 w-ep">
                        <!-- <div class="col p-3" style="border: 1px black solid; border-radius: 10px;"> -->
                          <span class="title-dp pb-4 position-absolute">Data Akun</span>
                          @if($errors->any())

                          <span class="mes-e  me-4   position-absolute" style="font-weight: 700; right:0;">
                            {{-- *Isi semua data yang tersedia ! --}}
                            {{ $errors }}
                          </span>
                          @endif

                          <div class="d-flex justify-content-end d-md-none">
    CC
                          </div>

                            <div class="i-ep mt-3 mt-md-5">
                                <div class="col">
                                    <label for="" class="ji-ep">Usename</label>
                                </div>
                                <input class="ie-nama" placeholder="Nama Lengkap" type="text" name="username" value="{{ $data->username }}" >
                            </div>
                            <div class="i-ep mt-3 ">
                                <div class="col">
                                    <label for="" class="ji-ep">email</label>
                                </div>
                                <input class="ie-nama" placeholder="Example@gmail.com" type="email" name="email" value="{{ $data->email }}">
                            </div>
                    </div>

                    <div class="col col-md-6 mt-5 mt-md-0 px-4">
                        @if(session('error'))
                        <span class="mes-e  me-4   position-absolute">
                            {{ session('error') }}
                        </span>
                    @endif
                      {{-- <span class="title-dp pb-4 position-absolute">Lainnya</span> --}}
                      <div class="i-ep mt-5 ">
                        <div class="col">
                            <label for="" class="ji-ep">Ubah Password</label>
                        </div>
                        <input class="ie-nama" placeholder="" type="password" name="password">
                    </div>
                      <div class="i-ep mt-3 ">
                        <div class="col">
                            <label for="" class="ji-ep" name="konfirmasi        ">Konfirmasi Password</label>
                        </div>
                        <input class="ie-nama" placeholder="" type="password" name="password">
                    </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mb-3 px-1 align-items-center">
                    <button class="t-sep me-3 me-md-0 mt-md-3" type="submit">
                      Ubah
                    </button>
                  </div>

        </div>

        </div>
    </form>
    </main>

    <script src="{{ asset('assets/js/script.js') }}">

    </script>
  </body>

<!-- Scripts -->
<script>
    $(document).ready(function() {
    $(".selectKT").select2();
});
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-    I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</html>
