// TODO: Popup
const tombolTambahData = document.querySelector('.tombol-tambah')
const base_url = window.origin
const method = [...document.querySelectorAll('input[name="_method"]')]
const popup = document.querySelector('.popup')
const tombolClosePopup = document.querySelector('.popup .tombol-close')

function Put(val = '') {
    method.map(e => {
        e.setAttribute('value', val)
    })
}

function showPopup(data = null) {
    popup.style.display = 'initial'

    setTimeout(() => {
        popup.classList.toggle('opacity-1')
    }, 1)

    if (data) {
        const konten = document.querySelector('.popup .konten')
        konten.querySelector('.judul h1').innerHTML = data.judul
        konten.querySelector('.tombol-simpan button').innerHTML = data.teksTombol
        konten.querySelector('form').setAttribute('action', data.action)
    }
}

function hiddenPopup() {
    popup.classList.toggle('opacity-1')

    setTimeout(() => {
        popup.style.display = 'none'
    }, 500)
}

tombolTambahData.addEventListener('click', e => {
    e.preventDefault()

    showPopup({
        judul: 'Tambah Data',
        teksTombol: 'Simpan',
        action: `${base_url}/kategori`
    })

    Put()
})

tombolClosePopup.addEventListener('click', () => {
    hiddenPopup()

    Put('PUT')
})

// TODO: Action

// ? Ubah
const tombolUbah = [...document.querySelectorAll('.ubah')]

tombolUbah.map(e => {
    e.addEventListener('click', () => {
        const id = e.getAttribute('data-id')
        showPopup({
            judul: 'Ubah Data Kategori',
            teksTombol: 'Simpan Perubahan',
            action: `${base_url}/kategori/ubah/${id}`
        })
    })
})

// ? Hapus
const tombolHapus = [...document.querySelectorAll('.hapus')]

tombolHapus.map(e => {
    e.addEventListener('click', () => {
        Swal.fire({
            title: 'Hapus Kategori?',
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Cancel',
            width: '30%'
        }).then(res => {
            res.isConfirmed ? Swal.fire({
                title: 'Berhasil Menghapus Kategori X',
                icon: 'success'
            }) : ''
        })
    })
})
