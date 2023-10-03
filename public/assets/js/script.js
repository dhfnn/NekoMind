



document.addEventListener('DOMContentLoaded', function () {

  const checkbox = document.getElementById('Focus');
  const wadahBab = document.getElementById('wadah-bab');

  // Pastikan elemen dengan ID 'Focus' dan 'wadah-bab' ada dalam halaman
  if (checkbox && wadahBab) {
    // Tambahkan event listener untuk checkbox
    checkbox.addEventListener('change', function () {
      if (checkbox.checked) {
        // Jika checkbox dicentang, sembunyikan wadah-bab
        wadahBab.style.display = 'none';
      } else {
        // Jika checkbox tidak dicentang, tampilkan wadah-bab
        wadahBab.style.display = 'block';
      }
    });
  }
});

document.addEventListener('DOMContentLoaded', function () {

  //   untuk menu pengaturan
  const iElement = document.querySelector('.fa-gear');
  const dropMenupElement = document.querySelector('.drop-menup');

  iElement.addEventListener("click", function(event) {
    event.stopPropagation();
    if (dropMenupElement.style.display === "none" || dropMenupElement.style.display === "") {
      dropMenupElement.style.display = "block";
    } else {
      dropMenupElement.style.display = "none";
    }
  });

  document.addEventListener("click", function(event) {
    if (dropMenupElement.style.display === "block" && !dropMenupElement.contains(event.target) && event.target !== iElement) {
      dropMenupElement.style.display = "none";
    }
  });

  document.addEventListener("scroll", function() {
    dropMenupElement.style.display = "none";
  });

});



document.addEventListener('DOMContentLoaded', function () {
  const mkls = document.querySelector('.m-kls');
  const wkls = document.querySelector('.w-kls');
  const ikputar = document.querySelector('.ik-putar');

mkls.addEventListener("click", function(event) {
  event.stopPropagation();
  if (wkls.style.display === "none" || wkls.style.display === "") {
    wkls.style.display = "block";
    ikputar.classList.add('putar-ik');
  } else {
    wkls.style.display = "none";
    ikputar.classList.remove('putar-ik');

  }
});
document.addEventListener("click", function(event) {
// && event.target !== mkls
  if (wkls.style.display === "block" && !wkls.contains(event.target) ) {
    wkls.style.display = "none";
    ikputar.classList.remove('putar-ik');

  }
});

document.addEventListener("scroll", function() {
  wkls.style.display = "none";
});
});









function backpage() {
    if (window.history.length > 1) {
      // Jika ada riwayat navigasi sebelumnya, kembali ke halaman sebelumnya
      window.history.back();
    } else {
      // Jika tidak ada riwayat, arahkan ke halaman "dashboard.html"
      window.location.href = "dashboard.html";
    }
  }













// putar 180^
  const selectElement = document.querySelector('.ie-select');
    const arrowIcon = document.querySelector('.arrow-icon');

    selectElement.addEventListener('blur', () => {
      // Setelah elemen select kehilangan fokus, kembalikan ikon ke posisi awal
      arrowIcon.style.transform = 'rotate(0deg)';
    });


    document.addEventListener('DOMContentLoaded', function () {
        const checkboxes = document.querySelectorAll('input[name="checkboxtp"]');
        const maxChecked = 5;

        checkboxes.forEach(function (checkbox) {
            checkbox.addEventListener('change', function () {
                const checkedCheckboxes = document.querySelectorAll('input[name="checkboxtp"]:checked');
                if (checkedCheckboxes.length > maxChecked) {
                    this.checked = false;
                }
            });
        });
    });

    // $(document).ready(function(){
        // $("#selectKT").select2({

        // });

    // });
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $(".selectKT").select2();
    });

    // $(document).ready(function() {
    //     $("#selectSK").select2();
    // });

 $(document).ready(function() {
        $('#dataTable').DataTable({
            "paging": true,       // Aktifkan paging
            "pageLength": 10,     // Batasi jumlah tampilan per halaman menjadi 10
            // Konfigurasi lainnya sesuai kebutuhan
        });
    });





