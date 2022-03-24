document.onload(askPassword());

function askPassword() {

    const PASS = 'sepromat@unicamp';

    let input = prompt('Senha de Acesso:', '');

    if (input === PASS) { return }
    else { window.location.replace('../') }
}