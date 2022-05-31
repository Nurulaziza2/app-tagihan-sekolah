@extends('bahan.app-stisla')

@section('content')

    <!-- Main content -->
    <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Kelas</h4>
                </div>               
                <div class="card-body">
                    <a href="{{ route('kelas.create') }}" class="btn btn-primary mb-2">Tambah Data</a>
                    <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Program Kursus</th>
                        <th>Durasi Kursus</th>
                        <th>Detail</th>
                        <th>Aksi</th>

                    </thead>
                    <tbody>
                        @foreach ($models as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->program_kursus }}</td>
                            <td>{{ $item->durasi_kursus }}</td>
                            <td>{{ $item->detail }}</td>
                            {{-- <td>{{$item->created_at->format('d/m/Y H:i') }}</td> --}}
                            <td>
                                {!! Form::open(['route'=>[$routePrefix . '.destroy',$item->id],'method'=>'DELETE','onsubmit'=>'return confirm("Anda Yakin?")']) !!}
                                <a href="{{ route($routePrefix . '.edit', $item->id) }}" class="btn btn-warning">Edit</a>
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
        <!-- /.content -->
@endsection
