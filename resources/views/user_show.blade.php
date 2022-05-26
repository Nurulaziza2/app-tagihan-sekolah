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
                                <td>: {{ $model->name }}</td>
                            </tr>
                            <tr>
                                <td>EMAIL</td>
                                <td>: {{ $model->email }}</td>
                            </tr>
                            <tr>
                                <td>TGL BUAT</td>
                                <td>: {{ $model->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        </thead>
                    </table>
                <a href="{{ url('user', []) }}" class="ml-2 btn-primary btn">Kembali</a>

                </div>
            </div>
        </section>
        <!-- /.content -->
@endsection
