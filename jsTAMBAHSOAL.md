<!-- 
document.addEventListener('DOMContentLoaded', function () {
    var queryString = window.location.search;
    var urlParams = new URLSearchParams(queryString);
    var ujianId = urlParams.get("ujian");
    fetch("{{ route('pelajaran.create') }}?ujianId=" + ujianId)
        .then(response => {
            console.log('berhasil');
        })
        .catch(error => {
            console.log();
        });
    var DataUjianIdElement = document.getElementById("DataUjianId");
    if (DataUjianIdElement) {
        DataUjianIdElement.value = ujianId;
    }

    var jumlah = parseInt(urlParams.get("jumlah"));

    var kageContainer = document.querySelector(".kage");
    for (var i = 1; i < jumlah - 1; i++) {
        var divToClone = kageContainer.cloneNode(true);
        kageContainer.parentNode.appendChild(divToClone);

        // Mengganti nama elemen input, select, dan textarea pada elemen yang dikloning
        var inputs = divToClone.querySelectorAll("input, select, textarea");
        inputs.forEach(function (input) {
            var name = input.getAttribute("name");
            if (name) {
                input.setAttribute("name", name + i );

            }
        });

        var urutanTambahsoalElements = divToClone.querySelectorAll("#urutanTambahsoal");
        urutanTambahsoalElements.forEach(function (element, index) {
            var urutan = (i + 1).toString();
            element.textContent = urutan;
        });
    }

    var tambahButton = document.getElementById("tambahpertanyaan");
    tambahButton.addEventListener("show.bs.modal", function (event) {
        var button = event.relatedTarget;
        var ujianId = button.getAttribute("data-ujian");
        document.getElementById("ujianid").value = ujianId;
        let judulUjian = fetchJudulUjian(ujianId); // Gantilah ini dengan cara Anda mengambil data dari server
        document.getElementById("judulUjian").innerText = judulUjian;
    });

    // Tambahkan event listener untuk tombol "Tambah Soal" dalam modal
    document.getElementById("tambahButtonsoal").addEventListener("click", function () {
        var angka = document.getElementById("InputJumlahSoal").value;
        var ujianId = document.getElementById("ujianid").value;
        window.location.href = "{{ route('pelajaran.create') }}?jumlah=" + angka + "&ujian=" + ujianId;
    });
}); -->