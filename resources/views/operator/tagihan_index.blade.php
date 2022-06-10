@extends('bahan.app-stisla')

@section('content')

    <!-- Main content -->
    <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Tagihan</h4>
                </div>               
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route($routePrefix.'.create') }}" class="btn btn-primary">Tambah Data</a>
                        </div>  
                    </div>
                    <div class="row justify-content-start pt-3">
                        <div class="col-md-5 ">
                            {!! Form::open(['method' => "GET"]) !!}
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    {!! Form::text('q',request('q'), ['class' => 'form-control','placeholder' => 'Pencarian berdasarkan nama atau nis atau email']) !!}
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                                {{-- {!! Form::submit('Pencarian', ['class' => 'btn btn-primary']) !!} --}}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="table-responsive">
                    <table class="table table-hover table-sm">
                        <thead>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Periode Tagihan</th>
                        <th>Jatuh Tempo</th>
                        <th>Nama Tagihan</th>
                        <th>Jumlah Tagihan</th>
                        <th>Status</th>
                        <th>Aksi</th>

                    </thead>
                    <tbody>
                        
                        @foreach ($models as $item)
                        <tr>
                            <td>{{ $loop->iteration.'.' }}</td>
                            <td>{{ $item->siswa->nama }}</td>
                            <td>{{ $item->tanggal_tagihan->translatedFormat('F Y') }}</td>
                            <td>{{ $item->tanggal_jatuh_tempo->translatedFormat('d F Y') }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>Rp{{ number_format($item->jumlah,0,",",".") }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                {!! Form::open(['route'=>[$routePrefix . '.destroy',$item->id],'method'=>'DELETE','onsubmit'=>'return confirm("Anda Yakin?")']) !!}
                                <a href="{{ route($routePrefix . '.edit', $item->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="{{ route($routePrefix . '.show', $item->id) }}" class="btn btn-info ml-1 mr-1"><i class="fas fa-eye"></i></a>
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                {!! Form::close() !!}
                                {{-- {!! Form::submit('Hapus', ['class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!} --}}
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
