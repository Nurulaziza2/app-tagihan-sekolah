@extends('bahan.app-stisla',['title'=>'Profil Siswa'])

@section('content')

<style>
    body {
        font-weight: bold
    }
</style>
    <!-- Main content -->
    <div class="col-lg-12">
    
            <div class="card">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ \Storage::url($model->gambar ?? 'images/no-image.png') }}" alt="gbr" width="100%" class="mt-3 rounded">
                            <a href="{{ url('siswa', []) }}" class="ml-2 mt-2 btn-primary btn">Kembali</a>
                        </div>

                        <div class="col">
                            <div class="card-header">Data Siswa : {{ strtoupper($model->nama) }}</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive table-bordered table-md">
                                    <thead>
                                        <tr>
                                            <td width='50%'>ID</td>
                                            <td>: {{ $model->id }}</td>
                                        </tr>
                                        <tr>
                                            <td>NAMA</td>
                                            <td>: {{ $model->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td>NIS</td>
                                            <td>: {{ $model->nis }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>: {{ $model->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td>: {{ $model->jk }}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>: {{ $model->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <td>Program Kursus</td>
                                            <td>:  {{ $model->kelas->nama }} {{$model->durasi  }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Masuk</td>
                                            <td>:  {{ $model->tgl_masuk->translatedFormat('d F Y') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Dibuat Oleh</td>
                                            <td>: {{ $model->user->name }}</td>
                                        </tr>
                                    </thead>
                                </table>
                            

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <!-- /.content -->
@endsection
