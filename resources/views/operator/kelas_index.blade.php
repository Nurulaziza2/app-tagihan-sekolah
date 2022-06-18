@extends('bahan.app-stisla',['title'=>'Kelas'])

@section('content')

    <!-- Main content -->
    <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Kelas</h4>
                </div>               
                <div class="card-body">
                    <a href="{{ route('kelas.create') }}" class="btn btn-primary mb-2">Tambah Data <i class="fas fa-plus"></i></a>
                    <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Detail</th>
                        <th>Aksi</th>

                    </thead>
                    <tbody>
                        @foreach ($models as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->detail }}</td>
                            {{-- <td>{{$item->created_at->format('d/m/Y H:i') }}</td> --}}
                            <td>
                                {!! Form::open(['route'=>[$routePrefix . '.destroy',$item->id],'method'=>'DELETE','onsubmit'=>'return confirm("Anda Yakin?")']) !!}
                                <a href="{{ route($routePrefix . '.edit', $item->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                {{-- <a href="{{ route($routePrefix . '.show', $item->id) }}" class="btn btn-info ml-1 mr-1"><i class="fas fa-eye"></i></a> --}}
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                {!! Form::close() !!}
                                {{-- {!! Form::submit('Hapus', ['class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!} --}}
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
