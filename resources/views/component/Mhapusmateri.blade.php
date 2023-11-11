<div class="modal fade" id="hapusmateri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow px-4">
          <div class="modal-header border-bottom-0">
            <h1 class="modal-title fs-5">HAPUS DATA BAB {{ $bab->subab }} !!!</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body py-0 text-start">
            <p>Apakah anda yakin akan menghapus data <b>BAB {{ $bab->subab }} </b> beserta materinya ?</p>
          </div>
          <div class="modal-footer border-top-0">
            {{-- <button type="submit" class="t-sepd me-3 me-md-0 mt-md-3" >hapus</button> --}}
            <form action="{{ url('Bab/' .$bab->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="t-sepd me-3 me-md-0 mt-md-3" type="submit" data-toggle="tooltip" >Hapus</button>

            </form>
          </div>
        </div>
      </div>
  </div>