
<div class="modal fade  " id="editmateri" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
    <div class="modal-dialog  modal-dialog" role="document"  style="  max-width: 80%;
    overflow-y: auto;">
      <div class="modal-content">
        <div class="modal-body py-0">
          <div class="col ">
            <div class="" style="background-image: url('images/img_1.jpg');">
            </div>
            <div class="content-text p-1 pt-2">
                <div class="d-flex justify-content-between">
                                  <span class="jn-materi">Tambah BAB</span>
              <a type="button"  data-bs-dismiss="modal" aria-label="Close" ><i class="fa-solid fa-xmark"></i></a>
                </div>
              {{-- <p>All their equipment and instruments are alive. The sky was cloudless and of a deep dark blue.</p> --}}
              {{-- <form class="needs-validation"  method="POST"> --}}
                {{-- @csrf --}}
                <div class="col mt-2 px-2">

                    <div class="col">
                        <form action="{{ route('bab.update' , $bab->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row gap-2 d-flex">
                                <div class="col-11">
                                    <div class="col text-start">
                                        <label for="isi" class="form-label">Judul Bab</label>
                                    </div>
                                        <input class="form-control" type="text" id="isi" name="judul" value="{{ $bab->judul }}">
                                </div>
                                <div class="col">
                                    <div class="col text-start">
                                        <label for="isia" class="form-label">Subab</label>
                                    </div>
                                        <input class="form-control" type="number" id="isia" name="subab" value="{{ $bab->subab }}">
                                </div>
                            </div>

                        <div class="col">
                            @include('component.teEdit')
                        </div>

                    </div>
                    <div class="row mt-2">
                    </div>
                        <div class="col d-flex justify-content-end mb-2">
                            <button class="t-sep me-3 me-md-0 mt-md-3" type="submit" onclick="tampilkanTagHTML()"  data-bs-dismiss="modal" aria-label="Close"   >
                                selesaai
                            </button>
                        </div>
                    </form>
                </div>

              {{-- </form> --}}
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
function tampilkanTagHTML() {
    var divEditor = document.getElementsByClassName("oii")[0];
    var divPreview = document.getElementsByClassName("preview");
    var kodeHTML = editor1.getHTMLCode(); // Anda mungkin perlu menyesuaikan ini sesuai dengan sumber
    var tombol = document.getElementById("tombol");

    if (kodeHTML.trim() !== '') {
        // Menambahkan kode HTML ke dalam elemen input
        divEditor.value = kodeHTML;

        // Menambahkan kode HTML ke dalam elemen div dengan ID "preview"
        divPreview.innerHTML = kodeHTML;

        // Mengubah gaya tombol menjadi tampil (display: block;)
        tombol.style.display = "block";
    } else {
        // Jika kodeHTML kosong, maka kosongkan elemen input dan div "preview"
        divEditor.value = "";
        divPreview.innerHTML = "";

        // Tombol tetap disembunyikan (display: none;)
        tombol.style.display = "none";
    }
}

function stripFormatting(event) {
            event.preventDefault(); // Mencegah aksi paste bawaan

            // Mendapatkan teks yang di-paste dari clipboard
            var clipboardData = event.clipboardData || window.clipboardData;
            var pastedText = clipboardData.getData('text/plain');

            // Membersihkan format dari teks yang di-paste
            var strippedText = pastedText.replace(/<[^>]+>/g, ''); // Menghapus semua tag HTML

            // Menetapkan teks yang di-paste tanpa format ke elemen input
            var inputElement = document.getElementsByClassName("oii")[0];
            inputElement.value = strippedText;
        }


</script>
@endpush