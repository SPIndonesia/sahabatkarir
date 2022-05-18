let baseUrl = window.origin
baseUrl += '/'

// TODO: Navigasi
const liNav = [...document.querySelectorAll('.nav')]

liNav.map(e => {
    e.addEventListener('click', el => {
        const dataTarget = e.getAttribute('data-target')
        window.location = baseUrl + dataTarget

        // ! Masukkan kelas aktif ke penyimpanan sementara
        sessionStorage.setItem('aktif', dataTarget)
    })
})

// TODO: Active Class
if (sessionStorage.getItem('aktif')) {
    setInterval(() => {
        const getStorageAktif = sessionStorage.getItem('aktif')

        const elementAktif = document.querySelector(`li[data-target="${getStorageAktif}"]`)
        elementAktif.classList.add('aktif')
    }, 1)

} else {
    document.querySelector('.navigasi-beranda ul li:first-child').classList.add('aktif')
}
