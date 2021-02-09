var home = document.querySelector('#home');
var info = document.querySelector('#info');
var btn = document.querySelector('.toggler');
var create = document.querySelector('#createHeader')
var form = document.querySelector('#choixForm')

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

if (create) {

    create.onclick = function() {
        if (form.classList.contains('choix_on')) {
            console.log('off');
            form.classList.remove('choix_on');
            form.classList.add('choix_off');
        } else {
            console.log('on');
            form.classList.remove('choix_off');
            form.classList.add('choix_on');
        }
    }
}