@extends('templates.templateAdminSK')

@section('content')

<div class="data-peserta">
    <div class="sec-one">
        <form class="pencarian">
            <div class="cari input-icon">
                <input type="text" id="cariApapun" name="whatever" placeholder="Cari Data Peserta">
                <i class="svg-pencarian fa-solid fa-magnifying-glass"></i>
            </div>

            <div class="date input-icon">
                <input id="cariTanggal" type="date" name="date">
                <i class="svg-pencarian fa-solid fa-calendar"></i>
            </div>

            <div class="print">
                <h2>Print</h2>
                <i class="print-svg fa-solid fa-print"></i>
            </div>
        </form>
    </div>

    <div class="sec-two konten">
        <div class="judul">
            <h1>Tabel Data Peserta</h1>
        </div>

        <div class="tabel">
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Paket</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data_user as $d)


                    <tr>
                        <td>{{ $d->nama }}</td>
                        <td>Kelas SBMPTN</td>
                        <td>Paket</td>
                        <td>Tanggal</td>
                        <td>Aktif</td>
                        <td>
                            <i class="fa-solid fa-trash"></i>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="next-prev">
            <a href="" class="prev">Prev</a>
            <a href="" class="next">Next</a>
        </div>
    </div>
</div>

@endsection
