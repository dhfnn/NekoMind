<!-- // Variabel untuk menyimpan data soal

function loadSoalsFromServer() {
    fetch('/soall')
        .then(response => response.json())
        .then(data => {
            soals = data;
            startQuiz();
        })
        .catch(error => {
            console.error("Gagal mengambil data soal: " + error);
        });
}
var soals ={};

var currentQuestion = 0;
var selectedAnswers = [];
var score = 0;
var time = 60;
var quizStarted = false;
var intervalId;

function startQuiz() {
    quizStarted = true;
    document.getElementById("home").style.display = "none";
    document.getElementById("quiz").style.display = "block";
    showQuestion();
    startTimer();
}

function showQuestion() {
    var wadahSoal = document.getElementById("wadahSoal");
    var soalElement = document.getElementById("soal");
    var opsiElement = document.getElementById("opsi");
    var tombolKembali = document.getElementById("tombolKembali");
    var tombolLanjut = document.getElementById("tombolLanjut");
    var wadahWaktu = document.getElementById("wadahWaktu");

    if (currentQuestion < soals.length) {
        wadahSoal.style.display = "block";

        var soal = soals[currentQuestion];
        soalElement.textContent = soal.soal;

        var judulPertanyaan = document.getElementById("judulPertanyaan");
        judulPertanyaan.innerText = "Pertanyaan Ke-" + (currentQuestion + 1);

        while (opsiElement.firstChild) {
            opsiElement.removeChild(opsiElement.firstChild);
        }

        // for (var i = 0; i < soal.opsi.length; i++) {
        //     var div = document.createElement("div");
        //     div.className = "col p-2 mt-3 px-4 py-3 bgn-opsi"; // Tambahkan kelas CSS sesuai keinginan Anda

        //     var radio = document.createElement("input");
        //     radio.type = "radio";
        //     radio.name = "answer";
        //     radio.value = i;

        //     div.addEventListener("click", function () {
        //         var relatedRadio = this.querySelector("input[type=radio]");
        //         relatedRadio.checked = true;
        //         selectedAnswers[currentQuestion] = parseInt(relatedRadio.value);
        //     });

        //     var choice = document.createTextNode(soal.opsi[i]);

        //     div.appendChild(radio);
        //     div.appendChild(choice);
        //     opsiElement.appendChild(div);
        // }

        // if (currentQuestion === 0) {
        //     tombolKembali.style.display = "none";
        // } else {
        //     tombolKembali.style.display = "block";
        // }

        // if (currentQuestion === soals.length - 1) {
        //     tombolLanjut.classList.add("tombol-selesai");
        //     tombolLanjut.innerHTML = 'Selesai';
        // } else {
        //     tombolLanjut.classList.remove("tombol-selesai");
        //     tombolLanjut.innerText = "";
        //     var icon = document.createElement("i");
        //     icon.className = "fa-solid fa-angle-right text-white";
        //     tombolLanjut.appendChild(icon);
        // }
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

            var choice = document.createTextNode(soal.opsi[i]);

            div.appendChild(radio);
            div.appendChild(choice);
            opsiElement.appendChild(div);
        }


        var selectedAnswer = selectedAnswers[currentQuestion];
        var radioButtons = document.getElementsByName("answer");
        if (selectedAnswer !== undefined) {
            radioButtons[selectedAnswer].checked = true;
        }

        wadahWaktu.innerText = "Waktu Tersisa: " + time + " detik";
    } else {
        wadahSoal.style.display = "none";
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

        if (selectedAnswers[i] !== undefined) {
            div.style.color = "green";
        } else {
            div.style.color = "white";
        }

        daftarSoal.appendChild(div);
    }
}

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
    document.getElementById("score").style.display = "block";

    var modalScoreDisplay = document.getElementById("modalScoreDisplay");
    modalScoreDisplay.innerHTML = `Jawaban Benar: ${score}<br>Jawaban Salah: ${soals.length - score}<br>Skor Total: ${score * 10}<br>Persentase: ${((score / soals.length) * 100).toFixed(2)}%`;
}

function calculateScore() {
    score = 0;

    for (var i = 0; i < soals.length; i++) {
        if (selectedAnswers[i] !== undefined && selectedAnswers[i] === soals[i].jawaban) {
            score++;
        }
    }
}

function restartQuiz() {
    currentQuestion = 0;
    selectedAnswers = [];
    score = 0;
    time = 60;
    document.getElementById("score").style.display = "none";
    document.getElementById("quiz").style.display = "block";
    showQuestion();
    startTimer();
}

document.getElementById("startButton").addEventListener("click", startQuiz);
document.getElementById("tombolKembali").addEventListener("click", function () {
    if (currentQuestion > 0) {
        currentQuestion--;
        showQuestion();
    }
});

document.getElementById("tombolLanjut").addEventListener("click", function () {
    if (currentQuestion < soals.length - 1) {
        currentQuestion++;
        showQuestion();
    } else {
        endQuiz();
    }
});

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("restartButton").addEventListener("click", restartQuiz);
});

// var daftarSoal = document.getElementById("daftarSoal");
// daftarSoal.addEventListener("click", function (event) {
//     if (event.target && event.target.tagName === "DIV") {
//         var clickedQuestionIndex = event.target.dataset.soalIndex;
//         if (clickedQuestionIndex !== undefined) {
//             currentQuestion = parseInt(clickedQuestionIndex);
//             showQuestion();
//         }
//     }
// });
var daftarSoal = document.getElementById("daftarSoal");
daftarSoal.addEventListener("click", function (event) {
    if (event.target && event.target.tagName === "DIV") {
        var clickedQuestionIndex = event.target.dataset.soalIndex;
        if (clickedQuestionIndex !== undefined) {
            currentQuestion = parseInt(clickedQuestionIndex);
            showQuestion();
        }
    }
});


// Mulai dengan memuat data soal dari server
loadSoalsFromServer(); -->
