<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login</title>
        <link rel="stylesheet" href="../../assets/style/style.css" />
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" />
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://kit.fontawesome.com/9494185896.js" crossorigin="anonymous"></script>
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />
        <script src="../assets/js/color-modes.js"></script>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
      </head>
      <style>
    .list-soal {
      margin-top: 10px;
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background-color: #ffff;
      border: 1px solid #3b73c5;
      text-align: center;
      padding: 0px;
      display: flex;
      align-items: center;
      justify-content: center;
      /* padding-top: 3px; */
      font-size: 12px;
      font-weight: 800;
    }
        .tnp{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height:30px;
            border-radius: 50%;
            background-color: #3b73c5;
        }
        .bgn-opsi{
            font-size: 13px;
             font-weight: 700; color: #000000bd;
             border-radius:10px ;
              background-color: #F8F9FA;
              box-shadow: 0px 3px 10px -5px rgba(0, 0, 0, 0.192);
        }
        .tombol-selesai{
            border-radius:10px ;
            color: white;
            height: 30px;
            width: 100px;
            background-color: #3b73c5;
        }
      </style>
<body style="background-color: #F8F9FA;">
    <div class="container  d-flex justify-content-center vh-100 d-flex align-items-center">
            <div class="col-5 p-2 px-3" id="home"  style="border:1px solid #00000036; border-radius:5px">
                <div class="col">
                    <span class="t-jsp">Perhatiaan !!</span>
                </div>
                <div class="col px-2">
                    <p class="p-sp" style="text-align: justify;">
                        Apakah kamu yakin untuk mulai mengerjakan? Waktu akan terus berjalan. Try Out harus diselesaikan sejak menekan tombol start.
                    </p>
                </div>
                   <div class="col d-flex justify-content-end">
                    <button id="startButton" class="t-mu px-2" style="border: none;">Mulai Kuis</button>

                   </div>
            </div>
        <div class="col-10"  id="quiz" style="display: none;">
            <div class="row gap-1" >
                <div class="col-9"  >
                    <div class="col bg-white px-3 py-2 d-flex align-items-center justify-content-between" style="box-shadow: 0px 3px 10px -5px rgba(0, 0, 0, 0.479); border-radius: 10px;">
                        <div class="b-waktu d-flex align-items-center">

                            <i class="fa-solid fa-clock" style="color: #3b73c5;"></i>
                            <span class="ji-sp ms-1" style="color: #3b73c5;" id="wadahWaktu"></span>
                        </div>
                        <a href="" class="tdn">
                            <i class="fa-solid fa-circle-exclamation" style="color: #00000062;"></i>
                        </a>
                    </div>
                    <div class="col mt-2 bg-white pb-3" style="border-radius: 10px; box-shadow: 0px 3px 10px -5px rgba(0, 0, 0, 0.479);" id="wadahSoal">
                        <div class="col p-3" id="judulPertanyaan"></div>
                        <div class="col px-3  " style="">
                            <div class="col p-2" style="border-radius:10px ; background-color: #F8F9FA;" id="soal">

                            </div>
                        </div>
                        <div class="col px-3  mt-4 " id="opsi">

                        </div>
                    </div>
                    <div class="col d-flex justify-content-end m-3">
                        <div class="  justify-content-center align-items-center me-2" id="tombolKembali"  ></div>
                        <!-- <div class="d-flex align-items-center px-2">1</div> -->
                        <div class="tnp" id="tombolLanjut"><i class="fa-solid fa-angle-right text-white"></i></div>
                    </div>
                </div>
                <div class="col">
                    <div class="col p-2 bg-white" style="border-radius:10px;box-shadow: 0px 3px 10px -5px rgba(0, 0, 0, 0.479);">
                        <div class="col" style="border-bottom: 1px  #3b72c563 solid">

                            <span >List Pertanyaan</span>
                        </div>
                        <div class="row gap-2 d-flex px-4 " id="daftarSoal">
                        </div>
                        <div class="col">
                            <div class="col" style="background-color: #F8F9FA;">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="scoreModal" tabindex="-1" role="dialog" aria-labelledby="scoreModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="scoreModalLabel">Skor Anda</h5>

                </div>
                <div class="modal-body">
                    <form action="{{ url('Hasil/' .$UjianData->id ) }}" method="POST" >
                        @csrf
                        <p id="modalScoreDisplay"></p>
                        <input type="number" name="benar" id="jawabanBenarInput" value="" readonly>
                        <input type="number" name="salah" id="jawabanSalahInput" value="" readonly>
                        <input type="number" name="skore" id="expInput" value="" readonly>
                        <input type="number" name="nilai" id="NilaiInput" value="" readonly>


                </div>
                <div class="modal-footer">
                    <button class="d-none" id="tambahHistory" type="submit"></button>
                  <button type="button" class="btn btn-secondary"   data-bs-dismiss="modal" aria-label="Close" >Tutup</button>
                </form>
            <button id="restartButton"  data-bs-dismiss="modal" aria-label="Close">Mulai Ulang</button>

                </div>
              </div>
            </div>
          </div>

          <div id="score" style="display: none">
            <h2>Skor Anda:</h2>
            <p id="scoreDisplay"></p>
            <button id="restartButton">Mulai Ulang</button>
          </div>
    </div>

    </div>
    <script src="{{ asset('assets/js/ujian.js')}}"></script>


</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</html>
