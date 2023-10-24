
<div class="modal fade" id="ModalTambahUjian" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog  modal-dialog" role="document" >
      <div class="modal-content">
        <div class="modal-body py-0">
          <div class="col ">
            <div class="" style="background-image: url('images/img_1.jpg');">
            </div>
            <div class="content-text p-1 pt-2">
              <span class="jn-materi">Tambah Ujian</span>
              <form class="needs-validation" action="{{ route('ujian.tambah') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col mt-2 px-2">
                    <div class="col">
                        <div class="col">
                            <div class="col">
                            <label for="" class="ji-ep">Judul</label>
                            </div>
                            <input type="text" class="form-control" name="judul" placeholder="Masukan judul ">
                            <input  name="id_pelajaran"  type="hidden" value="">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="col">
                                <label for="" class="ji-ep">Waktu</label>
                                </div>
                                <input type="number" class="form-control" name="waktu" placeholder="-- menit ">
                            </div>
                            <div class="col">
                                <div class="col">
                                <label for="" class="ji-ep">Jenis</label>
                                </div>
                                <select class="form-select" name="jenis" id="">
                                    <option value="">Pilih</option>
                                    <option value="QUIZ">QUIZ</option>
                                    <option value="LATIHAN">LATIHAN</option>
                                    <option value="UJIAN">UJIAN</option>
                                    <option value="TRYOUT">TRYOUT</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="row mt-2">
                    </div>
                    <div class="col d-flex justify-content-end mb-2">
                        <button class="t-sep me-3 me-md-0 mt-md-3" type="submit">
                            selesai
                          </button>
                    </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @push('script')
<script>
document.addEventListener("DOMContentLoaded", function() {
  const forms = document.querySelectorAll('.needs-validation');
  Array.prototype.slice.call(forms).forEach((form) => {
    form.addEventListener('submit', (event) => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
});
</script>
@endpush