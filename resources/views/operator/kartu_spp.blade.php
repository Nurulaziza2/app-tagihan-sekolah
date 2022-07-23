<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>KARTU SPP {{ $model->tanggal_tagihan->translatedFormat('Y') }}</title>

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
        .container .card-title {
            margin-left: 10%;
            font-weight: bold;
        }
        .container .table2 thead tr {
            background-color: rgba(0, 0, 0, 0.1);
        }
        .container blockquote {
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.08);
            font-weight: bold;
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

    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-11">
                                <h4 class="card-title text-center">KARTU PEMBAYARAN SPP BULANAN </h4>
                            </div>
                        </div>
    
                        <table class="tabel mt-3">
                            {{-- <tr>
                                <td rowspan="6" width="250">
                                    <img src="{{ \Storage::url($model->siswa->gambar ?? 'images/no-image.png') }}"
                                        alt="gbr" width="250" class="mt-3 rounded">
                                </td>
                            </tr> --}}
                            <tr>
                                <td width="200px" >NIS</td>
                                <td>: {{ $model->siswa->nis }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>: {{ $model->siswa->nama }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>: {{ $model->siswa->email }}</td>
                            </tr>
                            <tr>
                                <td>Program Kursus</td>
                                <td>: {{ $model->siswa->kelas->nama }} {{ $model->siswa->durasi }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Masuk</td>
                                <td>: {{ $model->siswa->tgl_masuk->translatedFormat('d F Y') }}</td>
                            </tr>
                        </table><br>

                        <table class="table table2">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Periode</th>
                                    <th>Jumlah</th>
                                    <th>Status</th>
                                    <th>Paraf</th>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach ($kartuTagihan as $item)
    
                                <tr>
                                    <td>{{ $loop->iteration.'.' }}</td>
    
                                    <td>
                                        {{ $item->tanggal_tagihan->translatedFormat('F Y')  }}    
                                    </td>
    
                                    <td>
                                        Rp{{ number_format($item->jumlah,0,",",".") }}
                                    </td>
    
                                    <td>
                                        <a href={{ route('tagihan.show', $item->id) }} ><div class="badge {{ $item->status ==='Lunas' ? 'badge-success' : 'badge-danger' }}">{{ $item->status }}</div></a>
                                    </td> 
                                    
                                    <td>

                                    </td>
                                </tr>
                                @endforeach
    
                            </tbody>
                        </table>
                        <div class="row mt-5">
                            <div class="col-md-9">
                                <blockquote>
                                    *Pembayaran SPP paling lambat setiap tanggal 10 pada bulan jatuh tempo, jika terlambat maka akan dikenakan denda Rp. 2000/hari.
                                </blockquote>
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
        </div>
    </div>
</body>
</html>