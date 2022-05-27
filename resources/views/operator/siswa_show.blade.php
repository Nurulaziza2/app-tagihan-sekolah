@extends('bahan.app')

@section('content')

    <!-- Main content -->
    <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Tampil Data {{ strtoupper($model->name) }}</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>: {{ $model->id }}</td>
                            </tr>
                            <tr>
                                <td>NAMA</td>
                                <td>: {{ $model->nama }}</td>
                            </tr>
                            <tr>
                                <td>NISN</td>
                                <td>: {{ $model->nisn }}</td>
                            </tr>
                            <tr>
                                <td>Prodi</td>
                                <td>: {{ $model->program_studi }}</td>
                            </tr>
                            <tr>
                                <td>Angkatan</td>
                                <td>: {{ $model->angkatan }}</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>: {{ $model->jk }}</td>
                            </tr>
                            <tr>
                                <td>User Input</td>
                                <td>: {{ $model->user->name }}</td>
                            </tr>
                        </thead>
                    </table>
                <a href="{{ url('siswa', []) }}" class="ml-2 btn-primary btn">Kembali</a>

                </div>
            </div>
            </div>
        <!-- /.content -->
@endsection
