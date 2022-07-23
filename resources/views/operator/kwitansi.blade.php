<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Kwitansi Pembayaran SPP Bulan {{ $model->tanggal_tagihan->translatedFormat('F Y') }}</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand&display=swap');
        body {
            font-family: 'Quicksand', sans-serif;

        }
        .container h4 {
            position: relative;
            background-color: #168aad;
            font-weight: bold;
            color: #fff;
            text-transform: uppercase;
            border-radius: 5px;
            font-family: 'Quicksand', sans-serif;
        }
        .container h4 .logo {
            position: absolute;
            top: 3px;
            left: 5px;
            border-radius: 5px;
            width: 53px;
        }
        .container .row table {
            background-color: rgba(0, 0, 0, 0.09);
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h4 class="text-center p-3 mt-5">
            <img src="{{ asset('stisla') }}/assets/img/logo.jpeg" alt="logo" class="logo">
            Kwitansi Pembayaran SPP Bulan {{ $model->tanggal_tagihan->translatedFormat('F Y') }}
        </h4>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <tr>
                        <td>Telah diterima dari </td>
                        <td>: {{ $model->siswa->nama }}</td>
                    </tr>
                    <tr>
                        <td>Uang Sejumlah </td>
                    <td>: Rp.{{ $model->getJumlahRupiah() }}</td>
                    </tr>
                    <tr>
                        <td>Program Kursus </td>
                        <td>: {{ $model->siswa->kelas->nama }} {{ $model->siswa->durasi }}</td>
                    </tr>
                    <tr >
                        <td>Tanggal Masuk </td>
                        <td>: {{ $model->siswa->tgl_masuk->translatedFormat('d F Y') }}</td>
                    </tr>
                </table>
                <div class="row">
                    <div class="col-md-9">
                        <u>Terbilang : {{$model->getJumlahTerbilang()}}</u> 
                    </div>
                    <div class="col-md-3">
                        Jambi, {{date('d F Y')}}
                        <br><br><br>
                        <u>{{Auth::user()->name}}</u>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>