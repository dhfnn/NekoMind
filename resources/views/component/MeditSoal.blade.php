<form action="{{ route('soal.update', ['id' => $data->id]) }}" method="POST">
@csrf
@method('PUT')

    <div class="modal fade"  id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" >
          <div class="modal-content" >
            <div class="modal-body">
                <div class="col  mb-3 px-3 px-md-5 pb-3 pt-1" >
                    <div class="col d-flex">
                        <span class="pe-2" id="urutanTambahsoal"></span>
                        <div class="col">
                            <span>Pertanyaan</span>
                            <textarea class="form-control" name="pertanyaan" rows="4">{{ $data->pertanyaan }}</textarea>
                        </div>
                    </div>
                    <div class="row row-cols-1  mt-4">
                        <div class="col">
                            <div class="col mt-2 d-flex align-items-center flex-column">
                                @php
                                $opsiArray = explode(',', $data->opsi);
                                @endphp
                                @foreach ($opsiArray as $key => $option)
                                <div class="col-12 mt-2 d-flex align-items-center">
                                    <span>{{ chr(65 + $key) }}.</span>
                                    <input class="form-control ms-3" type="text" name="opsi[]" value="{{ trim($option) }}" >
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <div class="">

                                <select class="p-1" style="border-radius: 10px; border:1px rgba(0, 0, 0, 0.144) solid;" name="jawaban" id="">
                                    <option value="">Jawaban</option>
                                    <option value="0">A</option>
                                    <option value="1">B</option>
                                    <option value="2">C</option>
                                    <option value="3">D</option>
                                </select>
                                <input type="hidden" name="ujianid" id="" value="{{ $data->ujian_id }}">
                            </div>
                        </div>

                    </div>
                    </div>
                    <div class="col">
                        <button class="t-sep" type="submit">
                            Selesai
                        </button>
                    </div>
                </div>
          </div>
        </div>
      </div>

</form>