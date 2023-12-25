
<div class="modal fade" id="ModalEditUjian{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog  modal-dialog" role="document" >
      <div class="modal-content">
        <div class="modal-body py-0">
          <div class="col ">
            <div class="" style="background-image: url('images/img_1.jpg');">
            </div>

            <div class="content-text p-1 pt-2 text-start">
              <span class="jn-materi">Edit Data Ujian</span>

              <form class="needs-validation" action="{{ route('ujian.update' ,['id'=> $data->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col mt-2 px-2">

                    <div class="row">

                        <div class="col">
                            <div class="col">
                            <label for="" class="ji-ep">Judul</label>
                            </div>
                            <input type="text" class="form-control" name="judul" value="{{ $data->judul }}" placeholder="Masukan judul ">
                            <input  name="id_pelajaran"  type="hidden" value="">
                        </div>

                        {{-- <div class="row"> --}}
                            <div class="col">
                                <div class="col">
                                <label for="" class="ji-ep">Kelas</label>
                                </div>
                                <select class="form-select" name="idkelas" id="" required title="Pilih jenis ujian">
                                    <option value="">Pilih Kelas</option>
                                    <option value="1">Kelas 1</option>
                                    <option value="2">Kelas 2</option>
                                    <option value="3">Kelas 3</option>
                                    <option value="4">Kelas 4</option>
                                    <option value="5">Kelas 5</option>
                                    <option value="6">Kelas 6</option>
                                    <option value="7">Kelas 7</option>
                                    <option value="8">Kelas 8</option>
                                    <option value="9">Kelas 9</option>
                                    <option value="10">Kelas 10</option>
                                    <option value="11">Kelas 11</option>
                                    <option value="12">Kelas 12</option>

                                </select>

                            </div>
                        {{-- </div> --}}
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