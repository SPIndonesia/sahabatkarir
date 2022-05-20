@extends('templates.templateadminSK')

@section('content')

<section class="kategori">
    <div class="sec-one">
        <div class="pencarian">
            <form action="">
                <input type="text" placeholder="Cari Kategori">
                <i class="fa-solid fa-magnifying-glass"></i>
            </form>
        </div>

        <div class="print">
            <i class="fa-solid fa-print"></i>
        </div>
    </div>

    <div class="sec-two kartu">
        <div class="judul">
            <h1>Tabel Kategori</h1>

            <a href="" class="tombol-tambah">Tambah Data</a>
        </div>

        <div class="tabel">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Deskripsi</th>
                        <th>Paket</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php for($i = 0; $i < 7; $i++) : ?>
                    <tr>
                        <td>
                            <?= $i + 1 ?>
                        </td>

                        <td>Kelas SBMPTN</td>

                        <td>
                            <p>Ayo Percayakan Masa Depanmu Bersama Sahabat SBMPTN</p>
                        </td>

                        <td>
                            Paket Apa
                        </td>

                        <td class="aksi">
                            <div class="ubah">
                                <i class="fa-solid fa-pen"></i>
                            </div>

                            <div class="hapus">
                                <i class="hapus fa-solid fa-trash"></i>
                            </div>
                        </td>
                    </tr>
                    <?php endfor ?>
                </tbody>
            </table>

            <div class="next-prev">
                <a href="" class="prev">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>

                <a href="" class="next">
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="popup">
        <div class="kategori-popup">
            <div class="tombol-close">
                <i class="fa-solid fa-xmark"></i>
            </div>

            <div class="konten">
                <div class="judul">
                    <h1>Tambah Data</h1>
                </div>

                <form action="">
                    <ul class="form">
                        <li>
                            <label for="">Nama Kategori : </label>
                            <input type="text" placeholder="Masukkan Nama Kategori">
                        </li>

                        <li>
                            <label for="">Deskripsi : </label>
                            <input type="text" placeholder="Masukkan Deskripsi Kategori">
                        </li>

                        <li>
                            <label for="">Lain - lain</label>
                            <input type="text" placeholder="Lainnya...">
                        </li>

                        <li class="tombol-simpan">
                            <button type="submit">Simpan</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection