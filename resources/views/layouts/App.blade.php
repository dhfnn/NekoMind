<!DOCTYPE html>
<html lang="en">
  <head>

    <link rel="shortcut icon" href="{{ asset('assets/ikon/logon.png') }}" type="image/x-icon">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nekomind</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" />
    <script src="https://kit.fontawesome.com/9494185896.js" crossorigin="anonymous"></script>
    {{-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="../assets/js/color-modes.js"></script> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

      </head>
  <body class=""  style="background-color: #F8F9FA !important;" >
    <header class="position-fixed fixed-top d-md-flex justify-content">
      <nav class="navbar navbar-light navbar-expand-md dash-nav d-none d-md-flex">
        <div class="col container-fluid">
          <!-- bagian nav atas   -------------------------------------------------------------------------------->
          <div class="col-12 d-none d-md-flex justify-content-between align-items-center">
            <a class="navbar-brand ps-1 ps-sm-3 pe-5" href="#" style="color: #fe8d00; font-weight: 700; font-size: 25px">NekoMind</a>
            <div class="navbar navbar-hide me-md-4 d-none d-md-flex " >
                <a href="{{ Route::currentRouteName() === 'dashboard-pengguna' ? '#' : route('dashboard-pengguna') }}"  {{ Route::currentRouteName() === 'dashboard-pengguna' ? 'style=color:#5484CC;' : ''}}  >Beranda</a>

                <a href="{{ Request::is('MateriPengguna') ? '#' : url('MateriPengguna') }}" class="px-4"
                {{ Request::is('MateriPengguna') ? 'style=color:#5484CC;' : '' }} >Materi</a>
                <a href="{{ Request::is('Soal')  ? '#' : url('Soal') }}" class="pe-4"
                {{ Request::is('Soal')  ? 'style=color:#5484CC;' : '' }}>Soal</a>
                <a href="{{ Request::is('peringkat')  ? '#' : url('peringkat') }}"
                {{ Request::is('peringkat')  ? 'style=color:#5484CC;' : '' }}>Peringkat</a>
              <!-- <a href="" class="ps-4 ps-xl-5"><i class="fa-solid fa-circle-user i-pd"></i></a> -->
              <div class="menu-profile d-flex align-items-center">
                <ul class="menu">
                  <li class="menu-item">
                    <a href="Profilepengguna" class="ps-4 ps-xl-4 d-flex align-items-center a-putar">
                      <i class="fa-solid fa-caret-down i-putar" style="color: #00000076"></i>
                      <i class="fa-solid fa-circle-user i-pd ms-1"></i>
                    </a>
                    <ul class="drop-menu">
                      <li class="drop-menu-item"><a href="/Profilepengguna">Akun</a></li>
                      <li class="drop-menu-item"><a href="{{ url('Profilepengguna/' . $userId . '/edit') }}">Ubah Profile</a></li>
                      <li class="drop-menu-item">
                        <form action="/logout" method="POST">
                            @csrf
                        <button type="submit " style="border: none; background-color:transparent; color: rgb(255, 0, 0) !important" >
                            Keluar</button>
                        </li>
                        </form>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- penutup bagian nav atas   -------------------------------------------------------------------------------->
        </div>
      </nav>

      <!-- navbar bagian bawah  -------------------------------------------------------------------------------->
      <div class="navbar navbar-multi d-md-none pb-2 px-4">
        <div class="nav-item d-flex flex-column align-items-center ps-3 tod">
          <a href="{{ Route::currentRouteName() === 'dashboard-pengguna' ? '#' : route('dashboard-pengguna') }}" class="text-decoration-none d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-house i-multi {{ Route::currentRouteName() === 'dashboard-pengguna' ? 'i-act' : '' }}"></i>
            <span class="i-multit {{ Route::currentRouteName() === 'dashboard-pengguna' ? 'i-act' : '' }}">Beranda</span>
          </a>
        </div>
        <div class="nav-item d-flex flex-column align-items-center ps-0">
          <a href="{{ Request::is('MateriPengguna') ? '#' : url('MateriPengguna') }}" class="text-decoration-none d-flex flex-column justify-content-center align-items-center">
            <i class="fa-brands fa-leanpub i-multi  {{Request::is('MateriPengguna') ? 'i-act': '' }}   "></i>
            <span class="i-multit  {{ Route::currentRouteName() === 'materi' ? 'i-act' : '' }}   ">Materi</span>
          </a>
        </div>
        <div class="nav-item d-flex flex-column align-items-center">
          <a href="{{ Request::is('Soal') ? '#' : url('Soal') }}" class="text-decoration-none d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-lines-leaning i-multi  {{Request::is('Soal') ? 'i-act': '' }}"></i>
            <span class="i-multit  {{Request::is('Soal') ? 'i-act': '' }}  ">Soal</span>
          </a>
        </div>
        <div class="nav-item d-flex flex-column align-items-center">
          <a href="{{ Request::is('peringkat') ? '#' : url('peringkat') }}" class="text-decoration-none d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-lines-leaning i-multi  {{Request::is('peringkat') ? 'i-act': '' }}"></i>
            <span class="i-multit  {{Request::is('peringkat') ? 'i-act': '' }}  ">peringkat</span>
          </a>
        </div>
        <div class="nav-item d-flex flex-column align-items-center ps-0 pe-3">
          <a href="{{ request()->is('Profilepengguna') ? '#' : route('Profilepengguna.index') }}" class="text-decoration-none d-flex flex-column justify-content-center align-items-center">
            <i class="fa-solid fa-circle-user i-multi {{ request()->is('Profilepengguna') ? 'i-act' : '' }}"></i>
            <span class="i-multit {{ request()->is('Profilepengguna') ? '#' : ''}}">Profile</span>
          </a>
        </div>
      </div>

      <!-- penutupan navbar bagian bawah  -------------------------------------------------------------------------------->
    </header>

    @yield('main')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    {{-- ini bagian script --}}


    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>

let teksArray = ["Sel saraf manusia dapat mengirimkan sinyal dengan kecepatan hingga 120 meter per detik.", "Walaupun Pluto tidak lagi dianggap sebagai planet dalam Sistem Tata Surya, ternyata, butiran es di permukaannya dapat menghasilkan suara mirip dengan 'dengungan' atau 'gemuruh' yang dapat didengar jika manusia berada disana.","Kupu-kupu Monark (Monarch Butterfly) memiliki perjalanan migrasi yang luar biasa. Meskipun hanya seukuran tangan, mereka dapat menempuh perjalanan ribuan mil dari Amerika Utara ke Meksiko untuk berkumpul dalam jumlah besar di hutan.","Nikola Tesla, seorang ilmuwan Serbia-Amerika, memiliki kebiasaan aneh. Dia menghabiskan waktu berjam-jam berjalan-jalan di sekitar gedung sebelum memasuki ruang laboratoriumnya, dan dia memiliki ketidakmampuan terhadap perasaan sentuhan dengan rambut manusia.","Kolibri adalah burung yang sangat kecil, namun memiliki detak jantung yang sangat cepat, mencapai lebih dari 1.200 denyut per menit saat sedang terbang. Ini membantu mereka mempertahankan energi selama aktivitas bergerak intens"];
let index = 0;

function gantiTeks() {
const teksUbah = document.getElementById("teks-ubah");
if (teksUbah) {
  teksUbah.textContent = teksArray[index];
  index = (index + 1) % teksArray.length;
  setTimeout(hapusTeks, 10000);
}
}

function hapusTeks() {
const teksUbah = document.getElementById("teks-ubah");
if (teksUbah) {
  teksUbah.textContent = '';
  setTimeout(gantiTeks, 0);
}
}
if (document.getElementById("teks-ubah")) {
gantiTeks();
}



const ctx = document.getElementById('myChart');
<?php
if (isset($rataQuiz)) {
  ?>
if (ctx) {
  new Chart(ctx, {
  type: 'bar',
data: {
  labels: ['Quiz', 'Latihan', 'Ujian', 'TryOut'],
  datasets: [{
    label: 'Rata-Rata Nilai',
    data: [{{ $rataQuiz }},{{ $rataLatihan }} ,  {{ $rataUjian }}, {{ $rataTryout }}],
    borderWidth: 1,
    borderRadius: 5,
    backgroundColor: '#3b73c5',
  }
]
},
options: {
  scales: {
    x: {
      beginAtZero: true,
      title: {
        display: false,
      },
      grid: {
  display: false
}
    },
    y: {
      beginAtZero: true,
      title: {
        display: false,
      },
      ticks: {
        // display: false,
        max: 100,
        stepSize: 25,
      }
    }
  }
}
});
}
<?php
}
?>
// chart Rekap nilai

const dat = document.getElementById('myChart2');

<?php
if (isset($arrayQuiz)) {
  ?>

  new Chart(dat, {
type: 'line',
data: {
  labels: ['3', '2', '1', 'Terbaru'],
  datasets: [{
    label: 'Quiz',
    data: {!! json_encode($arrayQuiz) !!},
    borderColor: '#fe8d00',
    backgroundColor: '#fe8d00',
  },{
    label: 'Latihan',
    data: {!! json_encode($arrayLatihan) !!},
    borderColor: '#3b73c5',
    backgroundColor: '#3b73c5',
  },{
    label: 'Ujian',
    data: {!! json_encode($arrayUjian) !!},
    borderColor: '#009feb',
    backgroundColor: '#009feb',
  },{
    label: 'TryOut',
    data: {!! json_encode($arrayTryout) !!},
    borderColor: '#3b73c5',
    backgroundColor: '#3b73c5',
  }
]
},
options: {
  scales: {
    x: {
      beginAtZero: true,
      title: {
        display: false,
      },
      grid: {
  display: false
}
    },
    y: {
      beginAtZero: true,
      title: {
        display: false,
      },
      ticks: {
        // display: false,
        max: 100,
        stepSize: 25,
      }
    }
  }
}
});

<?php
}
?>




var kelasFilterElement = document.getElementById('kelasFilter');

if (kelasFilterElement) {
  kelasFilterElement.addEventListener('change', function () {
      var selectedKelas = this.value;

      if (selectedKelas === "") {
          window.location.href = window.location.materi;
      } else {
          // Jika pilihan lain dipilih, maka ubah URL dengan parameter "kelas"
          window.location.search = `kelas=${selectedKelas}`;
      }
  });
}
function kirimdataKelas(kelas) {
if (kelas) {
  updateURLParameter('kelas', kelas);
  var button = document.querySelector(`button[data-kelas="${kelas}"]`);
  if (button) {
    button.classList.add("bt-act");
  }
}
}
function redirectToJenis(jenis) {
  updateURLParameter('jenis', jenis);
}

function updateURLParameter(key, value) {
  var url = window.location.href;
  var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
  var separator = url.indexOf('?') !== -1 ? "&" : "?";

  if (url.match(re)) {
    url = url.replace(re, '$1' + key + "=" + value + '$2');
  } else {
    url = url + separator + key + "=" + value;
  }

  window.location.href = url;
}
function resetURL() {
    window.location.href = window.location.origin + window.location.pathname;
}
document.addEventListener("DOMContentLoaded", function() {
        var chatBody = document.getElementById('chatbody');
        chatBody.scrollTop = chatBody.scrollHeight;
    });
  </script>
  </html>
