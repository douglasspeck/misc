window.onload = function() {
    login();
}

function login() {

    const MAX_TIME_IN_MINUTES = 10;

    // minutes to milisseconds
    const MAX_TIME = MAX_TIME_IN_MINUTES * 60 * 1000;

    let isLogged = localStorage.getItem('isLogged');
    let lastLogin = parseInt(localStorage.getItem('lastLogin'));

    let now = new Date().getTime();
    let loggedTime = now - lastLogin;

    if (isLogged == "true" && loggedTime < MAX_TIME) {
        console.log('User is already logged');
        localStorage.setItem('lastLogin', now);
    }
    else { askPassword() }
}

function askPassword() {

    const PASS = 'sepromat@unicamp';

    let input = prompt('Senha de Acesso:', '');

    if (input === PASS) {
        let now = new Date();

        localStorage.setItem('isLogged', 'true');
        localStorage.setItem('lastLogin', now.getTime());
        console.log('User just logged')
    }
    else { window.location.replace('../') }
}