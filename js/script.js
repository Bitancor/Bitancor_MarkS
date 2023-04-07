const toggleMenu = document.querySelector('.menu')
const toggleMenuIcon = document.querySelector('.menu i')
const showMenu = document.querySelector('.nav_selection')

toggleMenu.onclick = function () {
    showMenu.classList.toggle('open')
    const isOpen = showMenu.classList.contains('open')

    toggleMenuIcon.classList = isOpen
        ? 'fa-solid fa-xmark'
        : 'fa-solid fa-bars'
}