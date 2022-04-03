@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tabel Data User</div>

                <div class="card-body">
                <a href="{{ route('user.create') }}" class="btn btn-primary mb-2">Tambah Data</a>
                <table class="table table-striped table-bordered">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Tanggal Buat</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        
                        @foreach ($models as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->created_at->format('d/m/Y H:i') }}</td>
                            <td>
                                {!! Form::open(['route'=>['user.destroy',$item->id],'method'=>'DELETE','onsubmit'=>'return confirm("Anda Yakin?")']) !!}
                                <a href="{{ route('user.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('user.show', $item->id) }}" class="btn btn-info ml-1 mr-1">Detail</a>
                                {!! Form::submit('Hapus', ['class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!}
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
@endsection
