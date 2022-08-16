<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Laporan Tagihan SPP Bulan {{ $bulanHuruf }} {{ $tahun }}</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand&display=swap');

        body {
            font-family: 'Quicksand', sans-serif;
        }

        header {
            /* background-color: red; */
            width: 100%;
            /* padding: 10px; */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            border-bottom: 1px solid #777;
            position: relative;
        }

        header .logo img {
            width: 100px;
            border-radius: 50%;
            position: absolute;
            top: 5px;
            left: 5%;
        }

        header ul li {
            display: block;
            list-style: none;
            margin: 10px 0;
        }

        header ul li h2 {
            font-weight: bold;
        }

        .container h4 {
            position: relative;
            font-weight: bold;
            text-transform: uppercase;
            border-radius: 5px;
            font-family: 'Quicksand', sans-serif;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img src="{{ asset('stisla') }}/assets/img/logo.png" alt="">
        </div>

        <ul>
            <li>
                <h2>FA SEKOLAH MODE</h2>
            </li>
            <li>
                <p>Jln. Halim Perdana Kusuma No.02 Jambi, Indonesia 36123</p>
            </li>
        </ul>
    </header>

    <div class="container">
        <h4 class="text-center p-3 mt-3">
            Laporan Tagihan SPP pada Bulan {{ $bulanHuruf }} {{ $tahun }}
        </h4>

        <br>

        @if ($model->count() === 0)
            <p class="text-center">Belum ada Pembayaran SPP pada bulan {{ $bulanHuruf }}
                {{ request()->tahunBelumBayar }}</p>
        @else
            <table class="table ">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Jenis Tagihan</th>
                        {{-- <th>Periode</th> --}}
                        <th>Tanggal Jatuh Tempo</th>
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                        <th>Denda</th>
                        <th>Total</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($model as $item)
                        @php
                            $tglSekarang = \Carbon\Carbon::now();
                            if ($tglSekarang->gt($item->tanggal_jatuh_tempo)) {
                                $telatHari = $tglSekarang->diffInDays($item->tanggal_jatuh_tempo);
                                $jumlahDenda = $telatHari * 2000;
                            } else {
                                $jumlahDenda = 0;
                            }
                        @endphp

                        <tr>
                            <td>{{ $loop->iteration . '.' }}</td>
                            <td>
                                {{ $item->siswa->nis }}
                            </td>
                            <td>
                                {{ $item->siswa->nama }}
                            </td>
                            <td>
                                {{ $item->nama }}
                            </td>
                            {{-- <td>
                                         {{ $item->tanggal_tagihan->translatedFormat('F Y') }}
                                     </td> --}}

                            <td>
                                {{ $item->tanggal_jatuh_tempo->translatedFormat('d F Y') }}
                            </td>
                            <td>
                                @if ($tglSekarang->gt($item->tanggal_jatuh_tempo))
                                    Terlambat {{ $telatHari = $tglSekarang->diffInDays($item->tanggal_jatuh_tempo) }}
                                    Hari
                                @else
                                    Belum Jatuh Tempo
                                @endif
                            </td>
                            <td>
                                Rp{{ number_format($item->jumlah, 0, ',', '.') }}
                            </td>
                            <td>
                                Rp{{ number_format($jumlahDenda, 0, ',', '.') }}
                            </td>
                            <td>
                                Rp{{ number_format($item->jumlah + $jumlahDenda, 0, ',', '.') }}
                            </td>


                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="8" class="text-right">
                            <b>Total Keseluruhan Jumlah Tagihan</b>
                        </td>
                        <td>
                            <b>Rp{{ number_format($model->sum('jumlah') + $model->sum('jumlah_denda'), 0, ',', '.') }}</b>

                        </td>
                        <td colspan="3"></td>
                    </tr>

                </tbody>
            </table>
        @endif

    </div>
</body>

</html>
