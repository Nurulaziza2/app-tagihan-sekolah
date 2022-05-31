@extends('bahan.app-stisla')

@section('content')

    <!-- Main content -->
    <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Siswa</h4>
                </div>               
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <a href="{{ route($routePrefix.'.create') }}" class="btn btn-primary">Tambah Data</a>
                        </div>
                        {{-- <div class="col-md-4">
                            {!! Form::open(['route' => 'siswa.import','files' => true]) !!}
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    {!! Form::file('file_siswa', ['class' => 'form-control','id' => 'inputGroupFile02']) !!}
                                  <label class="custom-file-label" for="inputGroupFile02">
                                      Pilih File</label>
                                </div>
                                <div class="input-group-append">
                                {!! Form::submit('Import Excel', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div> --}}
                    </div>
                    <div class="row justify-content-start pt-3">
                        <div class="col-md-5 ">
                            {!! Form::open(['method' => "GET"]) !!}
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    {!! Form::text('q',request('q'), ['class' => 'form-control','placeholder' => 'Pencarian berdasarkan nama atau nis atau email']) !!}
                                </div>
                                <div class="input-group-append">
                                {!! Form::submit('Pencarian', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIS</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>Kelas</th>
                        <th>Tanggal Masuk</th>
                        <th>Aksi</th>

                    </thead>
                    <tbody>
                        
                        @foreach ($models as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->nis }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->jk }}</td>
                            <td>{{ $item->kelas->nama }}</td>
                            <td>{{ $item->tgl_masuk }}</td>
                            {{-- <td>{{$item->created_at->format('d/m/Y H:i') }}</td> --}}
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
            </div>
    </div>
        <!-- /.content -->
@endsection
