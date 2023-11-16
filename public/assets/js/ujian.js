let soals = [];
fetch("/soall")
    .then((response) => response.json())
    .then((data) => {
        soals = data.map((item) => {
            const opsiArray = item.opsi.split(",");
            return {
                pertanyaan: item.pertanyaan,
                opsi: opsiArray,
                jawaban: item.jawaban,
            };
        });
        // startTimer();
        fillQuestionList();
        // showQuestions();
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
var quizStarted = false;
var time = 0;
var timeInSeconds = 0;
var intervalId;
fetch("/waktuu")
    .then((response) => response.json())
    .then((data) => {
        if (data && data.waktu) {
            time = data.waktu;
            timeInSeconds = time * 60;
        } else {
            console.error("Data waktu ujian tidak valid:", data);
        }
    })
    .catch((error) => {
        console.error("Gagal mengambil waktu ujian:", error);
    });
function startTimer() {
    var wadahWaktu = document.getElementById("wadahWaktu");

    intervalId = setInterval(function () {
        if (timeInSeconds === 0) {
            clearInterval(intervalId);
            endQuiz();
        } else {
            var minutes = Math.floor(timeInSeconds / 60);
            var seconds = timeInSeconds % 60;
            wadahWaktu.innerText =
                "Waktu Tersisa: " + minutes + " menit " + seconds + " detik";

            if (timeInSeconds > 0) {
                timeInSeconds--;
            }
        }
    }, 1000);
}
function startQuiz() {
    quizStarted = true;
    document.getElementById("home").style.display = "none";
    document.getElementById("quiz").style.display = "block";
    showQuestion();
    startTimer();
}
function showQuestion() {
    var wadahSoal = document.getElementById("wadahSoal");
    var soal = soals[currentQuestion];

    var opsiElement = document.getElementById("opsi");
    var tombolKembali = document.getElementById("tombolKembali");
    var tombolLanjut = document.getElementById("tombolLanjut");
    var wadahWaktu = document.getElementById("wadahWaktu");

    var soalElement = document.getElementById("soal");
    soalElement.textContent = soal.pertanyaan;

    if (currentQuestion >= soals.length) {
        wadahSoal.style.display = "none";
    } else {
        wadahSoal.style.display = "block";

        var judulPertanyaan = document.getElementById("judulPertanyaan");
        judulPertanyaan.innerText = "Pertanyaan Ke-" + (currentQuestion + 1);

        while (opsiElement.firstChild) {
            opsiElement.removeChild(opsiElement.firstChild);
        }

        for (var i = 0; i < soal.opsi.length; i++) {
            var div = document.createElement("div");
            div.className = "col p-2 mt-3 px-4 py-3 bgn-opsi";

            var radio = document.createElement("input");
            radio.type = "radio";
            radio.name = "answer" + currentQuestion; // Menggunakan nama berdasarkan indeks pertanyaan
            radio.value = i;

            // Tambahkan event listener untuk menangani klik pada elemen div
            div.addEventListener("click", function () {
                var relatedRadio = this.querySelector("input[type=radio]");
                relatedRadio.checked = true;
                selectedAnswers[currentQuestion] = parseInt(relatedRadio.value);
            });

            var choice = document.createTextNode(soal.opsi[i]);

            div.appendChild(radio);
            div.appendChild(choice);
            opsiElement.appendChild(div);
        }

        if (currentQuestion < 1) {
            tombolKembali.style.display = "none";
            var icon = document.createElement("i");
            icon.className = "fa-solid fa-angle-left text-white";
            tombolKembali.innerHTML = "woi";
            tombolKembali.appendChild(icon);
        } else {
            tombolKembali.style.display = "block";
        }

        if (currentQuestion === soals.length - 1) {
            tombolLanjut.classList.add("tombol-selesai"); // Menambahkan class "tombol-selesai"
            tombolLanjut.innerHTML = "Selesai"; // Menetapkan teks "Selesai"
        } else {
            tombolLanjut.classList.remove("tombol-selesai");
            tombolLanjut.innerText = "";
            var icon = document.createElement("i");
            icon.className = "fa-solid fa-angle-right text-white";
            tombolLanjut.innerHTML = ""; // Menghapus semua konten sebelumnya
            tombolLanjut.appendChild(icon);
        }

        var selectedAnswer = selectedAnswers[currentQuestion];
        var radioButtons = document.getElementsByName("answer");

        if (selectedAnswer !== -1 && selectedAnswer < radioButtons.length) {
            radioButtons[selectedAnswer].checked = true;
        } else {
            selectedAnswers[currentQuestion] = -1;
        }

        wadahWaktu.innerText = "Waktu Tersisa: " + time + " detik";
    }
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
            div.style.color = "green";
        } else {
            div.style.color = "white"; // Jika belum dijawab, beri warna merah
        }
        daftarSoal.appendChild(div);
    }
}

fillQuestionList();

function calculateScore() {
    score = 0;

    for (var i = 0; i < soals.length; i++) {
        if (selectedAnswers[i] === soals[i].jawaban) {
            score++;
        }
    }
}
function endQuiz() {
    clearInterval(intervalId);
    quizStarted = false;
    calculateScore();
    if (time === 0) {
    }
    document.getElementById("quiz").style.display = "none";
    document.getElementById("score").style.display = "none";
    document.getElementById("home").style.display = "none";
    var jawabanBenarInput = document.getElementById("jawabanBenarInput");
    var jawabanSalahInput = document.getElementById("jawabanSalahInput");
    var NilaiInput = document.getElementById("NilaiInput");
    var expInput = document.getElementById("expInput");

    var jawabanBenar = score;
    jawabanBenarInput.value = jawabanBenar;

    var jawabanSalah = soals.length - score;
    jawabanSalahInput.value = jawabanSalah;

    var exp = score * 150;
    expInput.value = exp;

    var persentase = Math.round((score / soals.length) * 100);
    NilaiInput.value = persentase;
    // });

    document.getElementById("tambahHistory").click();
    $("#scoreModal").modal("show");
}
function restartQuiz() {
    currentQuestion = 0;
    selectedAnswers = new Array(soals.length).fill(-1);
    score = 0;
    fetch("/waktuu")
        .then((response) => response.json())
        .then((data) => {
            if (data && data.waktu) {
                time = data.waktu;
                timeInSeconds = time * 60;
                document.getElementById("score").style.display = "none";
                document.getElementById("quiz").style.display = "block";
                showQuestion();
                startTimer();
            } else {
                console.error("Data waktu ujian tidak valid:", data);
            }
        })
        .catch((error) => {
            console.error("Gagal mengambil waktu ujian:", error);
        });
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
});
