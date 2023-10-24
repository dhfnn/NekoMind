<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
          <div class="modal-header border-bottom-0">
            <h1 class="modal-title fs-5">HAPUS DATA AKUN PENGGUNA !!!</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body py-0">
            <p>Apakah anda yakin akan menghapus akun dari <b>{{ $userData->username }}</b> dengan email <b>'{{ $userData->email }}' </b> </p>
          </div>
          <div class="modal-footer border-top-0">
            {{-- <button type="submit" class="t-sepd me-3 me-md-0 mt-md-3" >hapus</button> --}}
            <button class="text-danger font-weight-bold text-xs" type="submit" data-toggle="tooltip" >Hapus</button>
          </div>
        </div>
      </div>
  </div>