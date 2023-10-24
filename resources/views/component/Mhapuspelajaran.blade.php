
<form action="{{ route('materi.destroy', $data->id) }}" method="POST">
    @csrf
    @method('DELETE')
<div class="modal fade" id="hapusmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
          <div class="modal-header border-bottom-0">
            <h1 class="modal-title fs-5">HAPUS DATA AKUN PENGGUNA !!!</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body py-0 text-start" style="white-space: wrap; ">
            <p class="px-3">Apakah anda yakin akan menghapus  pelajaran <b>{{ $data->namapelajaran}}</b> beserta isinya ?  jika menghapusnya data akan terhapus permanen dan tidak bisa di kemablikan lagi !!</p>
          </div>
          <div class="modal-footer border-top-0">
            <button type="submit" class="t-sepd me-3 me-md-0 mt-md-3" >hapus</button>
            {{-- <button type="submit">hapus</button> --}}

          </div>
        </div>
      </div>
  </div>

</form>
