{{-- <div class="container  d-flex justify-content-center vh-100 d-flex align-items-center"  id="home" style="display: none" >
    <div class="col-4 p-2 bg-primary" >
        <div class="col">hai</div>
        <div class="col" >
            <button id="startButton">Mulai Kuis</button>
          </div>
    </div>
    <div class="col-10"  id="quiz" style="display: none;">
        <div class="row gap-1" >
            <div class="col-9"  >
                <div class="col bg-white px-3 py-2 d-flex align-items-center justify-content-between" style="box-shadow: 0px 3px 10px -5px rgba(0, 0, 0, 0.479); border-radius: 10px;">
                    <div class="b-waktu d-flex align-items-center">

                        <i class="fa-solid fa-clock" style="color: #3b73c5;"></i>
                        <span class="ji-sp ms-1" style="color: #3b73c5;" id="wadahWaktu">04:46</span>
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
                    <div class="tnp d-flex justify-content-center align-items-center me-2" id="tombolKembali" style="display: none !important;" ></div>
                    <!-- <div class="d-flex align-items-center px-2">1</div> -->
                    <div class="tnp" id="tombolLanjut"><i class="fa-solid fa-angle-right text-white"></i></div>
                </div>
            </div>
            <div class="col">
                <div class="col p-2 bg-white" style="border-radius:10px;box-shadow: 0px 3px 10px -5px rgba(0, 0, 0, 0.479);">
                    <div class="row gap-2 d-flex justify-content-center bg-white" id="daftarSoal">
                        <span>List Pertanyaan</span>
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
              <p id="modalScoreDisplay"></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary"   data-bs-dismiss="modal" aria-label="Close">Tutup</button>
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
<script src="{{ asset('assets/js/ujian.js') }}"></script> --}}