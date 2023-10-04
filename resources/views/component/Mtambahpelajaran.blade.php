                 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog  modal-dialog" role="document" >
      <div class="modal-content">
        <div class="modal-body py-0">
          <div class="col ">
            <div class="" style="background-image: url('images/img_1.jpg');">
            </div>
            <div class="content-text p-1 pt-2">
              <span class="jn-materi">Tambah Pelajaran</span>
              {{-- <p>All their equipment and instruments are alive. The sky was cloudless and of a deep dark blue.</p> --}}
              <form class="needs-validation" action="{{ url('Materi') }}" method="POST">
                @csrf
                <div class="col mt-2 px-2">

                    <div class="row">
                      {{-- <label for="fname">Nama Pelajaran</label> --}}
                        <div class="col">
                            <div class="col">
                            <label for="" class="ji-ep">Nama Pelajaran</label>
                            </div>
                            <select class="form-select "  name="namapelajaran" required >
                                <option value="" disabled selected>Pilih Kelas</option>
                                <optgroup label="Bahasa">
                                    <option value="inggris">Inggris</option>
                                    <option value="indonesia">Indonesia</option>
                                </optgroup>
                                <optgroup label="Sejarah">
                                    <option value="sejarah">Sejarah</option>
                                </optgroup>
                                <optgroup label="Ilmu Alam">
                                    <option value="ipa">IPA</option>
                                    <option value="biologi">Biologi</option>
                                    <option value="kimia">Kimia</option>
                                    <option value="fisika">Fisika</option>
                                    <option value="matematika">Matematika</option>
                                </optgroup>
                                <optgroup label="Geografi">
                                    <option value="geografi">Geografi</option>
                                </optgroup>
                                <optgroup label="Ilmu Sosial">
                                    <option value="sosial">Sosial</option>
                                    <option value="ips">IPS</option>
                                </optgroup>
                                <optgroup label="Lainnya">
                                    <option value="tps">Tes Potensi Skolastik</option>
                                    <option value="lindonesia">Literasi B. Indonesia</option>
                                    <option value="linggris">Literasi B. Inggris</option>
                                    <option value="pm">Penalaran Matematika</option>
                                </optgroup>
                            </select>

                        </div>
                        {{-- <div class="col">
                            <div class="col">
                                <label for="" class="ji-ep">Jenis Pelajaran</label>
                                </div>
                            <select class="form-select" name="jenis" required>
                                <option value="" disabled selected>Pilih Jenis</option>
                                <option value="pelajaran">Materi Pelajaran</option>
                                <option value="utbk">Materi UTBK</option>
                            </select>
                        </div> --}}
                        <div class="col">
                            <div class="col">
                                <label for="" class="ji-ep">Jenis Pelajaran</label>
                                </div>
                            <select class="form-select" name="id_semester" required>
                                <option value="" disabled selected>Pilih Semester</option>
                                <option value="1"> Semester 1</option>
                                <option value="2"> Semester 2</option>
                            </select>
                            <input type="hidden" name="id_kelas" value="{{ $kelas->id }}">
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