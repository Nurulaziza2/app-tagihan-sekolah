@extends('bahan.app')

@section('content')


    <!-- Main content -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Siswa</h4>
            </div>               
                <div class="card-body">
                {!! Form::model($model, ['route'=>$route, 'method'=>$method]) !!}
                <div class="form-group">
                    <label for="nama">Nama</label>
                    {!! Form::text('nama', null, ['class'=>'form-control','autofocus'=>true]) !!}
                    <span class="text-danger">{{ $errors->first('nama') }} </span>
                </div>
                <div class="form-group">
                    <label for="nisn">NISN</label>
                    {!! Form::text('nisn', null, ['class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('nisn') }} </span>
                </div>
                <div class="form-group">
                    <label for="program_studi">Program Studi</label>
                    {!! Form::select('program_studi', [
                        'MENJAHIT' => 'BELAJAR MENJAHIT',
                        'FASHION DESIGN' => 'FASHION DESIGN'
                    ], null, ['class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('program_studi') }} </span>
                </div>
                <div class="form-group">
                    <label for="angkatan">Angkatan</label>
                    {!! Form::selectRange('angkatan', 2019, date('Y'), null,  ['class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('angkatan') }} </span>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    {!! Form::select('jk', [
                        'Laki-laki' => 'Laki-laki',
                        'Perempuan' => 'Perempuan'
                    ], null, ['class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('jk') }} </span>
                </div>
                
                {!! Form::submit($namaTombol, ['class'=>'btn btn-primary']) !!}
                <a href="{{ url('siswa', []) }}" class="ml-2 btn-primary btn">Kembali</a>
                {!! Form::close() !!}
                </div>
            </div>
    </div>
        <!-- /.content -->
@endsection
