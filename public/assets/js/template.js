/* ----------------------------------------------------------------------------------------------
 * Header
 * ----------------------------------------------------------------------------------------------
 */
// TODO: Header
window.addEventListener('scroll', () => {
    if (window.pageYOffset > 1) {
        document.querySelector('header').classList.add('header-shadow')
    } else {
        document.querySelector('header').classList.remove('header-shadow')
    }

    // TODO: Navigasi Hamburger
    if (document.querySelector('.navigasi-halaman-landing').classList.contains('lihat-navigasi')) document.querySelector('.navigasi-halaman-landing').classList.remove('lihat-navigasi')
})

// TODO: Icon Cari
document.querySelector('.icon-cari').addEventListener('click', () => {
    document.querySelector('.header__cari').click()
})

// TODO: Navigasi Hamburger
const hamburgerNavigasi = document.querySelector('.hamburger-navigasi')
hamburgerNavigasi.addEventListener('click', () => {
    document.querySelector('.navigasi-halaman-landing').classList.toggle('lihat-navigasi')
})

document.addEventListener('click', e => {
    if (!hamburgerNavigasi.contains(e.target)) {
        document.querySelector('.navigasi-halaman-landing').classList.remove('lihat-navigasi')
    }
})