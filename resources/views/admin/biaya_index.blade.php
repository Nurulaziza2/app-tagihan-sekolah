@extends('bahan.app-stisla',['title' => 'Biaya'])

@section('content')

    <!-- Main content -->
    <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Biaya</h4>
                </div> 
                <div class="card-body">           
                <a href="{{ route('biaya.create') }}" class="btn btn-primary mb-2">Tambah Biaya <i class="fas fa-plus"></i></a>
                <div class="table-responsive">
                    <table class="table table-hover">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nominal</th>
                        <th>Tahun</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        
                        @foreach ($models as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>Rp{{ number_format($item->nominal,0,",",".") }}</td>
                            <td>{{ $item->tahun }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>
                                {!! Form::open(['route'=>[$routePrefix . '.destroy',$item->id],'method'=>'DELETE','onsubmit'=>'return confirm("Anda Yakin?")']) !!}
                                <a href="{{ route($routePrefix . '.edit', $item->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="{{ route($routePrefix . '.show', $item->id) }}" class="btn btn-info ml-1 mr-1"><i class="fas fa-eye"></i></a>
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $models->links() !!}
                </div>
            </div>
            </div>
    </div>
        <!-- /.content -->
@endsection
