// TODO: Fungsi Untuk Merubah Rupiah
function Rp(nilai) {
    let number_string = nilai.toString(),
        sisa = number_string.length % 3,
        rupiah = number_string.substring(0, sisa),
        ribuan = number_string.substring(sisa).match(/\d{3}/g)

    if (ribuan) {
        separator = sisa ? '.' : ''
        rupiah += separator + ribuan.join('.')
    }

    return rupiah
}

// TODO: Ubah Semua Harga Kedalam Bentuk Rupiah
const harga = [...document.querySelectorAll('.harga')]

harga.map(e => {
    const number_string = e.innerText
    e.innerText = `Rp. ${Rp(number_string)}`
})
