function toggleMenu() {

    const menu = document.getElementById('menu');

    var isOpened = menu.getAttribute('class') == 'open' ? true : false;

    if (isOpened) {
        menu.removeAttribute('class');
        isOpened = false;
    } else {
        menu.setAttribute('class', 'open');
        isOpened = true;
    }

    var menuStatus = isOpened ? 'opened' : 'closed'
    console.log(`The menu is ${menuStatus}.`);

}