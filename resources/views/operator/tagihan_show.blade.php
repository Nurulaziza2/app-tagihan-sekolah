@extends('bahan.app-stisla',['title'=>'Detail Tagihan'])
@section('js')  
@endsection
@section('content')

    <!-- Main content -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Informasi Siswa </h4>
                </div>               
                <div class="card-body">
                   <table class="table ">
                        <tr>
                            <td rowspan="6" width="250">
                                <img src="{{ \Storage::url($model->siswa->gambar ?? 'images/no-image.png') }}" alt="gbr" width="250" class="mt-3 rounded">
                            </td>
                        </tr>
                        <tr>
                            <td width="20%">NIS</td>
                            <td>{{$model->siswa->nis  }}</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>{{ $model->siswa->nama }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{$model->siswa->email  }}</td>
                        </tr>
                        <tr>
                            <td>Program Kursus</td>
                            <td>{{ $model->siswa->kelas->nama }} {{$model->siswa->durasi  }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Masuk</td>
                            <td>{{ $model->siswa->tgl_masuk->translatedFormat('d F Y') }}</td>
                        </tr>
                   </table> 
                </div>
            </div>
    </div>
    </div>
    <div class="row">
        <div class="col-sm-5">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Detail Tagihan </h4>
            </div>               
            <div class="card-body">
                
            </div>
        </div>
        </div>
        <div class="col-sm-7">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kartu SPP </h4>
                </div>               
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>

        <!-- /.content -->
@endsection
