var countdown = 6;
var countdownTimer = setInterval(function () {
    countdown--;
    document.getElementById("countdown").innerHTML = countdown;
    if (countdown == 0) {
        clearInterval(countdownTimer);
        window.location.href = window.location.origin + '/it-ems/logout';
    }
}, 1000); 