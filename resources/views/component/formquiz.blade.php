
<form action="{{ url('Pelajaran/'  .$ujianId) }}"@method('POST')>
    @csrf


<div class="col col-md-11 kage mb-3 px-3 px-md-5 pb-3 pt-1" style="border:1px rgba(0, 0, 0, 0.082) solid; border-radius:10px;">
    <div class="col d-flex">
        <span class="pe-2" id="urutanTambahsoal"></span>
        <div class="col">
            <span>Pertanyaan</span>
            <textarea class="form-control" name="pertanyaan" rows="4"></textarea>
        </div>
    </div>
    <div class="row row-cols-1  mt-4">
        <div class="col">
            <div class="col mt-2 d-flex align-items-center flex-column">
                <div class="col-12 mt-2 d-flex align-items-center">
                    <span>A.</span>
                    <input class="form-control ms-3" type="text" name="opsi[]">
                </div>
                <div class="col-12 mt-2 d-flex align-items-center">
                    <span>B.</span>
                    <input class="form-control ms-3" type="text" name="opsi[]">
                </div>
                <div class="col-12 mt-2 d-flex align-items-center">
                    <span>B.</span>
                    <input class="form-control ms-3" type="text" name="opsi[]">
                </div>
                <div class="col-12 mt-2 d-flex align-items-center">
                    <span>B.</span>
                    <input class="form-control ms-3" type="text" name="opsi[]">
                </div>
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
                <input type="text" name="ujianid" id="" value="{{ $ujianId }}">
            </div>
        </div>

    </div>
    </div>
    <div class="col d-flex justify-content-end">
        <button class="t-sep ">Selesai</button>
    </div>
</form>