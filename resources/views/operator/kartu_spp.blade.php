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
      
    </style>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-11">
                                <h4 class="card-title">KARTU SPP TAHUN {{ $model->tanggal_tagihan->translatedFormat('Y') }}</h4>
                            </div>
                        </div>
    
                        <table class="tabel ">
                            <tr>
                                <td rowspan="6" width="250">
                                    <img src="{{ \Storage::url($model->siswa->gambar ?? 'images/no-image.png') }}"
                                        alt="gbr" width="250" class="mt-3 rounded">
                                </td>
                            </tr>
                            <tr>
                                <td width="20%">NIS</td>
                                <td>{{ $model->siswa->nis }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>{{ $model->siswa->nama }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $model->siswa->email }}</td>
                            </tr>
                            <tr>
                                <td>Program Kursus</td>
                                <td>{{ $model->siswa->kelas->nama }} {{ $model->siswa->durasi }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Masuk</td>
                                <td>{{ $model->siswa->tgl_masuk->translatedFormat('d F Y') }}</td>
                            </tr>
                        </table>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Periode</th>
                                    <th>Jumlah</th>
                                    <th>Status</th>
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
                                </tr>
                                @endforeach
    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>