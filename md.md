<!-- // Deklarasikan variabel soals sebagai array kosong
let soals = [];
fetch("/soall")
    .then((response) => response.json())
    .then((data) => {
        soals = data.map((item) => {
            const opsiArray = item.opsi.split(",");
            return {
                pertanyaan: item.pertanyaan,
                opsi: opsiArray, // Gunakan array yang telah dibagi
                jawaban: item.jawaban,
            };
        });
        startTimer();
        fillQuestionList();
        showQuestions();
    })
    .catch((error) => {
        console.error("Gagal mengambil data soal:", error);
    });

function showQuestions() {
    soals.forEach((item) => {
        console.log(item.pertanyaan);
        item.opsi.forEach((opsi) => {
            console.log(opsi);
        });
        console.log(item.jawaban);
    });
}
var currentQuestion = 0;
var selectedAnswers = new Array(soals.length).fill(-1);
var score = 0;
var time = 60;
var quizStarted = false;
var intervalId;


function showQuestion() {
    var wadahSoal = document.getElementById("wadahSoal");
    var soal = soals[currentQuestion];

    if (currentQuestion >= soals.length) {
        wadahSoal.style.display = "none";
    } else {
        wadahSoal.style.display = "block";

        var judulPertanyaan = document.getElementById("judulPertanyaan");
        judulPertanyaan.innerText = "Pertanyaan Ke-" + (currentQuestion + 1);

        var soalElement = document.getElementById("soal");
        soalElement.textContent = soal.pertanyaan;

        var opsiElement = document.getElementById("opsi");

        while (opsiElement.firstChild) {
            opsiElement.removeChild(opsiElement.firstChild);
        }

        for (var i = 0; i < soal.opsi.length; i++) {
            var div = document.createElement("div");
            div.className = "col p-2 mt-3 px-4 py-3 bgn-opsi";

            var radio = document.createElement("input");
            radio.type = "radio";
            radio.name = "answer";
            radio.value = i;

            div.addEventListener("click", function () {
                var relatedRadio = this.querySelector("input[type=radio]");
                relatedRadio.checked = true;
                selectedAnswers[currentQuestion] = parseInt(relatedRadio.value);
            });

            // Label untuk pilihan jawaban dengan label A, B, C, dan D
            var label = String.fromCharCode(65 + i) + ". " + soal.opsi[i]; // Gunakan kode ASCII untuk label A, B, C, dan D

            var choice = document.createTextNode(label);

            div.appendChild(radio);
            div.appendChild(choice);
            opsiElement.appendChild(div);
        }

        var tombolKembali = document.getElementById("tombolKembali");
        var tombolLanjut = document.getElementById("tombolLanjut");

        if (currentQuestion === 0) {
            tombolKembali.style.display = "none !important"; // Sembunyikan tombol Kembali
        } else {
            tombolKembali.style.display = "block"; // Tampilkan tombol Kembali
            // Tambahkan ikon "Kembali" ke tombol
            var icon = document.createElement("i");
            icon.className = "fa-solid fa-angle-left text-white";
            tombolKembali.innerHTML = ""; // Menghapus semua konten sebelumnya
            tombolKembali.appendChild(icon);
        }

        if (currentQuestion === soals.length - 1) {
            tombolLanjut.classList.add("tombol-selesai"); // Menambahkan class "tombol-selesai"
            tombolLanjut.innerHTML = "Selesai"; // Menetapkan teks "Selesai"
        } else {
            tombolLanjut.classList.remove("tombol-selesai");
            tombolLanjut.innerHTML = ""; // Menghapus semua konten sebelumnya
            // Tambahkan ikon "Lanjut" ke tombol
            var icon = document.createElement("i");
            icon.className = "fa-solid fa-angle-right text-white";
            tombolLanjut.appendChild(icon);
        }

        var selectedAnswer = selectedAnswers[currentQuestion];
        var radioButtons = document.getElementsByName("answer");
        if (selectedAnswer !== -1) {
          radioButtons[selectedAnswer].checked = true;
        } else {
          selectedAnswers[currentQuestion] = -1;
        }

        var wadahWaktu = document.getElementById("wadahWaktu");
        wadahWaktu.innerText = "Waktu Tersisa: " + time + " detik";
    }
}
function startQuiz() {
    quizStarted = true;
    document.getElementById("home").style.display = "none";
    document.getElementById("quiz").style.display = "block";
document.addEventListener("DOMContentLoaded", function () {
    showQuestion();
});
    startTimer();
}

function fillQuestionList() {
    var daftarSoal = document.getElementById("daftarSoal");

    while (daftarSoal.firstChild) {
        daftarSoal.removeChild(daftarSoal.firstChild);
    }

    for (var i = 0; i < soals.length; i++) {
        var div = document.createElement("div");
        div.className = "list-soal";
        div.textContent = " " + (i + 1);
        div.dataset.soalIndex = i;

        if (selectedAnswers[i] !== -1) {
            div.style.color = "#3b73c5";
        } else {
            div.style.color = "red";
        }

        daftarSoal.appendChild(div);
    }
}

fillQuestionList();

function startTimer() {
    var wadahWaktu = document.getElementById("wadahWaktu");
    wadahWaktu.innerText = "Waktu Tersisa: " + time + " detik";

    intervalId = setInterval(function () {
        time--;

        if (time === 0) {
            clearInterval(intervalId);
            endQuiz();
        } else {
            wadahWaktu.innerText = "Waktu Tersisa: " + time + " detik";
        }
    }, 1000);
}

function endQuiz() {
    clearInterval(intervalId);
    quizStarted = false;

    calculateScore();

    if (time === 0) {
        // Handle logic when time is up
    }
    document.getElementById("quiz").style.display = "none";
    document.getElementById("score").style.display = "none";
    document.getElementById("home").style.display = "none";

    var modalScoreDisplay = document.getElementById("modalScoreDisplay");
    modalScoreDisplay.innerHTML = `Jawaban Benar: ${score}<br>Jawaban Salah: ${
        soals.length - score
    }<br>Skor Total: ${score * 10}<br>Persentase: ${(
        (score / soals.length) *
        100
    ).toFixed(2)}%`;

    $("#scoreModal").modal("show");
}

function calculateScore() {
    score = 0;

    for (var i = 0; i < soals.length; i++) {
        if (selectedAnswers[i] === soals[i].jawaban) {
            score++;
        }
    }
}

function restartQuiz() {
    currentQuestion = 0;
    selectedAnswers = new Array(soals.length).fill(-1);
    score = 0;
    time = 60;
    document.getElementById("score").style.display = "none";
    document.getElementById("quiz").style.display = "block";
    showQuestion();
    startTimer();
}

document.getElementById("startButton").addEventListener("click", startQuiz);

document.getElementById("tombolKembali").addEventListener("click", function () {
    currentQuestion--;
    showQuestion();
});

document.getElementById("tombolLanjut").addEventListener("click", function () {
    if (currentQuestion === soals.length - 1) {
        endQuiz();
    } else {
        currentQuestion++;
        showQuestion();
    }
});

document.addEventListener("DOMContentLoaded", function () {
    document
        .getElementById("restartButton")
        .addEventListener("click", restartQuiz);
});

var daftarSoal = document.getElementById("daftarSoal");
daftarSoal.addEventListener("click", function (event) {
    if (event.target && event.target.tagName === "DIV") {
        var clickedQuestionIndex = Array.from(daftarSoal.children).indexOf(
            event.target
        );
        if (clickedQuestionIndex !== -1) {
            currentQuestion = clickedQuestionIndex;
            showQuestion();
        }
    }
}); -->
