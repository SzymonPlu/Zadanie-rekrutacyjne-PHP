$(document).ready(function () {
    // Ustal datę losowania (zmień na właściwą datę)
    var drawDate = new Date("2023-12-31T00:00:00");

    // Funkcja do odliczania czasu
    function updateCounter() {
        var currentDate = new Date();
        var timeDifference = drawDate - currentDate;

        var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
        var hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

        // Aktualizuj wyświetlane wartości
        $("#days").text(days < 10 ? "0" + days : days);
        $("#hours").text(hours < 10 ? "0" + hours : hours);
        $("#minutes").text(minutes < 10 ? "0" + minutes : minutes);
        $("#seconds").text(seconds < 10 ? "0" + seconds : seconds);
    }

    // Wywołaj funkcję odliczania co sekundę
    setInterval(updateCounter, 1000);
});
