@extends('bahan.app-stisla',['title'=>'Detail Operator'])

@section('content')

    <!-- Main content -->
    <div class="col-lg-12">
            <div class="card">
                <div class="card-header"> </div>
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
                    </div>
                <a href="{{ url('user', []) }}" class="ml-2 btn-primary btn">Kembali</a>
                </div>
            </div>
    </div>
        <!-- /.content -->
@endsection
