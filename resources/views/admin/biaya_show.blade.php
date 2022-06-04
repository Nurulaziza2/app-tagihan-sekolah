@extends('bahan.app-stisla')

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
                                <td>Nominal</td>
                                <td>: {{ $model->getJumlahRupiah() }}</td>
                            </tr>
                            <tr>
                                <td>TGL BUAT</td>
                                <td>: {{ $model->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                            <tr>
                                <td>Dibuat Oleh</td>
                                <td>{{ $model->user->name }}</td>
                            </tr>
                        </thead>
                    </table>
                    </div>
                <a href="{{ url('user', []) }}" class="ml-2 btn-primary btn">Kembali</a>
                </div>
            </div>
    </div>
        <!-- /.content -->
@endsection
