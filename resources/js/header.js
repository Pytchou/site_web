var home = document.querySelector('#home');
var info = document.querySelector('#info');
var btn = document.querySelector('.toggler');

if (home) {

    home.onclick = function() {
        $(btn).click();
    }
} 

if (info) {

    info.onclick = function() {
        $(btn).click();
    }
} 