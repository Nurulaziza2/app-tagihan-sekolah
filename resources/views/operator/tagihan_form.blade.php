@extends('bahan.app-stisla')

@section('content')


    <!-- Main content -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Tagihan</h4>
            </div>               
                <div class="card-body">
                {!! Form::model($model, ['route'=>$route, 'method'=>$method,'files' => true]) !!}
                <div class="form-group">
                    <label for="siswa_id">Siswa</label>
                    {!! Form::select('siswa_id', $siswa, null, ['class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('siswa_id') }} </span>
                </div>
                <div class="form-group">
                    <label for="tanggal_tagihan">Tanggal Tagihan</label>
                    {!! Form::date('tanggal_tagihan', null, ['class'=>'form-control',]) !!}
                    <span class="text-danger">{{ $errors->first('tanggal_tagihan') }} </span>
                </div>
                <div class="form-group">
                    <label for="nis">NIS</label>
                    {!! Form::text('nis', null, ['class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('nis') }} </span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    {!! Form::text('email', null, ['class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('email') }} </span>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    {!! Form::select('jk', [
                        'Laki-laki' => 'Laki-laki',
                        'Perempuan' => 'Perempuan'
                    ], null, ['class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('jk') }} </span>
                </div>
                {{-- <div class="form-group">
                    <label for="siswa_id">Kelas</label>
                    {!! Form::select('siswa_id', $kelas, null, ['class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('siswa_id') }} </span>
                </div> --}}
                
                
                {!! Form::submit($namaTombol, ['class'=>'btn btn-primary']) !!}
                <a href="{{ url('siswa', []) }}" class="ml-2 btn-primary btn">Kembali</a>
                {!! Form::close() !!}
                </div>
            </div>
    </div>
        <!-- /.content -->
@endsection
