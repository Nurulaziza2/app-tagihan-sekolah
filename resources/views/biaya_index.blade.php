@extends('layouts.app_adminlte')

@section('content')


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header">Tabel Biaya</div>

                <div class="card-body">
                <a href="{{ route('biaya.create') }}" class="btn btn-primary mb-2">Tambah Biaya</a>
                <table class="table table-striped table-bordered">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        
                        @foreach ($models as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jumlah }}</td>
                            {{-- <td>{{ $item->created_at->format('d/m/Y H:i') }}</td> --}}
                            <td>
                                {!! Form::open(['route'=>[$routePrefix . '.destroy',$item->id],'method'=>'DELETE','onsubmit'=>'return confirm("Anda Yakin?")']) !!}
                                <a href="{{ route($routePrefix . '.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route($routePrefix . '.show', $item->id) }}" class="btn btn-info ml-1 mr-1">Detail</a>
                                {!! Form::submit('Hapus', ['class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </section>
        <!-- /.content -->
@endsection
