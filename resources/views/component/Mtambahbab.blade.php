
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog  modal-dialog" role="document" >
      <div class="modal-content">
        <div class="modal-body py-0">
          <div class="col ">
            <div class="" style="background-image: url('images/img_1.jpg');">
            </div>
            <div class="content-text p-1 pt-2">
              <span class="jn-materi">Tambah BAB</span>
              {{-- <p>All their equipment and instruments are alive. The sky was cloudless and of a deep dark blue.</p> --}}
              <form class="needs-validation" action="{{ url('permateri') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col mt-2 px-2">

                    <div class="row">
                      {{-- <label for="fname">Nama Pelajaran</label> --}}
                        <div class="col-7">
                            <div class="col">
                            <label for="" class="ji-ep">Nama Pelajaran</label>
                            </div>
                            <input type="text" class="form-control" name="judul" placeholder="Masukan judul BAB">
                            <input  name="id_pelajaran"  type="hidden" value="{{ $pelajaran->id }}">

                        </div>
                        <div class="col-5">
                            <div class="col">
                            <label for="" class="ji-ep">subab</label>
                            </div>
                            <input type="number" class="form-control" name="subab" placeholder="">

                        </div>

                    </div>
                    <div class="row mt-2">
                      {{-- <label for="fname">Nama Pelajaran</label> --}}



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