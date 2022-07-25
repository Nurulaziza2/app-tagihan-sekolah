<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Kwitansi Pembayaran SPP Bulan {{ $model->tagihan->tanggal_tagihan->translatedFormat('F Y') }}</title>

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
        .container .row table {
            background-color: rgba(0, 0, 0, 0.03);
            border-radius: 5px;
        }
        .container .row table td {
            border-bottom: 1px solid rgba(0, 0, 0, 0.4);
            width: 10rem;
            
            padding: 2% 0% 0% 0%;
        }
        .container .row h5 {
            font-weight: bold;
            font-size: 30px;
        }
        .container .nomor p{
            border-bottom: 1px solid rgba(0, 0, 0, 0.4);
            width: 10rem;
        }
        .container .tgl p{
            border-bottom: 1px solid rgba(0, 0, 0, 0.4);
            width:16rem;
        }
        .container .row .terbilang {
            padding: 20px;
        }
        .container .row .terbilang p {
            padding: 30px;
            background-color: rgba(0, 0, 0, 0.08);
            width: max-content ;
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
            Kwitansi Pembayaran 
        </h4>

        <div class="row ">
            <div class="nomor col-md-9">
                <p>No. {{ $model->id }}</p>
            </div>
            <div class="tgl col-md-3">
                <p>Tanggal: {{ $tanggalSekarang->translatedFormat('d F Y') }}</p>
            </div>
        </div>
        <br>

            <div class=" row d-flex justify-content-center ">

                <div class="col-9">
                    <table class="table table-borderless bg-white">
                        <tr>
                            <td>Telah diterima dari <b>{{ $model->tagihan->siswa->nama }}</b></td>
                        </tr>
                        <tr>
                            <td>Uang Sejumlah <b>{{ $model->getJumlahTerbilang() }}</b></td>
                        </tr>
                        <tr>
                            <td >Untuk Pembayaran <b>{{ $model->tagihan->nama}}</b></td>
                        </tr>
                    </table>
                </div>
            </div>
                <br>
                <br>
                <div class="row">
                    <div class="terbilang col-md-9">
                        {{-- {{$model->getJumlahTerbilang()}} --}}
                        <h5><p>Rp.{{ $model->getJumlahRupiah() }}</p></h5> 
                    </div>
                    <div class="col-md-3">
                        Jambi, {{$tanggalSekarang->translatedFormat('d F Y')}}
                        <br><br><br><br>
                        <u>Kepala Sekolah</u>
                    </div>
                </div>
            
    </div>
</body>
</html>