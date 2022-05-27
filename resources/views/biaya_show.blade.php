@extends('layouts.app_adminlte')

@section('content')


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header">Tampil Data {{ strtoupper($model->name) }}</div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
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
                                <td>Jumlah Biaya</td>
                                <td>: {{ $model->jumlah }}</td>
                            </tr>
                            <tr>
                                <td>User Input</td>
                                <td>: {{ $model->user->name }}</td>
                            </tr>
                        </thead>
                    </table>
                <a href="{{ url('biaya', []) }}" class="ml-2 btn-primary btn">Kembali</a>

                </div>
            </div>
        </section>
        <!-- /.content -->
@endsection
