const toast = document.querySelector(".toast");
const progress = document.querySelector(".progress");
let timer1, timer2;

// Функция для запуска скрипта
function runScript() {
    toast.classList.add("active");
    progress.classList.add("active");

    timer1 = setTimeout(() => {
        toast.classList.remove("active");
    }, 5000);

    timer2 = setTimeout(() => {
        progress.classList.remove("active");
    }, 5300);
}

// Функция для остановки скрипта
function stopScript() {
    toast.classList.remove("active");

    setTimeout(() => {
        progress.classList.remove("active");
    }, 300);

    clearTimeout(timer1);
    clearTimeout(timer2);
}

// Пример вызова функции runScript
runScript();

// Пример вызова функции stopScript
// stopScript();
