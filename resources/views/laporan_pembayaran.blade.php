<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Laporan Pembayaran SPP</title>

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
            top: 2px;
            left: 2%;
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
            <img src="{{ asset('stisla') }}/assets/img/logo.jpeg" alt="">
        </div>

        <ul>
            <li><h2>FA SEKOLAH MODE</h2></li>
            <li><p>Jln. Halim Perdana Kusuma No.02 Jambi, Indonesia 36123</p></li>
        </ul>
    </header>

    <div class="container">
        <h4 class="text-center p-3 mt-3">
            Laporan Pembayaran SPP Bulan {{ $bulanHuruf }} {{ request()->tahunPembayaran }}
        </h4>

        {{--  <div class="row ">
            <div class="nomor col-md-12">
                Periode Laporan :<b> {{ $bulanHuruf }} {{ request()->tahunPembayaran }}</b>
            </div>
        </div>  --}}
        <br>

            @if ($model->count() === 0)
               <p class="text-center">Belum ada Pembayaran SPP pada bulan {{ $bulanHuruf }} {{ request()->tahunPembayaran }}</p>
            @else
                <table class="table ">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Jenis Biaya</th>
                                    <th>Jumlah</th>
                                    <th>Denda</th>
                                    <th>Total</th>
                                    <th>Tanggal Pembayaran</th>
                                    <th>Keterangan</th>
                                    <th>Diterima Oleh</th>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach ($model as $item)
    
                                <tr>
                                    <td>{{ $loop->iteration.'.' }}</td>
 
                                    <td>
                                       {{ $item->tagihan->siswa->nis }}
                                    </td> 
                                    <td>
                                       {{ $item->tagihan->siswa->nama }}
                                    </td> 
                                    <td>
                                       {{ $item->tagihan->nama }}
                                    </td> 
                                    <td>
                                        Rp{{ number_format($item->tagihan->jumlah,0,",",".") }}
                                    </td>
                                    <td>
                                        Rp{{ number_format($item->tagihan->denda,0,",",".") }}
                                    </td>
                                    <td>
                                        Rp{{ number_format($item->jumlah,0,",",".") }}
                                    </td>
                                    <td>
                                        {{ $item->tanggal->translatedFormat('d F Y')  }}    
                                    </td>
                                    <td>
                                    @if ($item->tanggal->gt($item->tagihan->tanggal_jatuh_tempo))
                                        Terlambat {{ $telatHari= $item->tanggal->diffInDays($item->tagihan->tanggal_jatuh_tempo)}} Hari
                                    @else
                                        Pembayaran Tepat Waktu
                                    @endif
                                    <td>
                                        {{ $item->diterima_oleh }}
                                    </td>
                                </tr>
                                @endforeach
    
                            </tbody>
                        </table>
            @endif
            
    </div>
</body>
</html>