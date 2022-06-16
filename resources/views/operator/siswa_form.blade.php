@extends('bahan.app-stisla')

@section('content')


    <!-- Main content -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Siswa</h4>
            </div>               
                <div class="card-body">
                {!! Form::model($model, ['route'=>$route, 'method'=>$method,'files' => true]) !!}
                <div class="form-group">
                    <label for="nama">Nama</label>
                    {!! Form::text('nama', null, ['class'=>'form-control','autofocus'=>true]) !!}
                    <span class="text-danger">{{ $errors->first('nama') }} </span>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    {!! Form::file('gambar', ['class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('gambar') }} </span>
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
                    ], null, ['class'=>'form-control','placeholder'=>'Jenis Kelamin']) !!}
                    <span class="text-danger">{{ $errors->first('jk') }} </span>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    {!! Form::textarea('alamat', null, ['class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('alamat') }} </span>
                </div>
                <div class="form-group">
                    <label for="prodi">Program Studi</label>
                    {!! Form::select('prodi', [
                        'Menjahit' => 'Menjahit',
                        'Fashion Design' => 'Fashion Design',
                ], null, ['class'=>'form-control','placeholder'=>'Pilih Program Studi']) !!}
                    <span class="text-danger">{{ $errors->first('prodi') }} </span>
                </div>
                <div class="form-group">
                    <label for="durasi">Durasi</label>
                    {!! Form::select('durasi', [
                        '3 Bulan' => '3 Bulan',
                        '6 Bulan' => '6 Bulan',
                        '12 Bulan' => '12 Bulan',
                ], null, ['class'=>'form-control','placeholder'=>'Pilih Durasi Kursus']) !!}
                    <span class="text-danger">{{ $errors->first('durasi') }} </span>
                </div>
                {{-- <div class="form-group">
                    <label for="kelas_id">Kelas</label>
                    {!! Form::select('kelas_id', $kelas, null, ['class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('kelas_id') }} </span>
                </div> --}}
                <div class="form-group">
                    <label for="tgl_masuk">Tanggal Masuk</label>
                    {!! Form::date('tgl_masuk', null, ['class'=>'form-control',]) !!}
                    <span class="text-danger">{{ $errors->first('tgl_masuk') }} </span>
                </div>
                
                {!! Form::submit($namaTombol, ['class'=>'btn btn-primary']) !!}
                <a href="{{ url('siswa', []) }}" class="ml-2 btn-primary btn">Kembali</a>
                {!! Form::close() !!}
                </div>
            </div>
    </div>
        <!-- /.content -->
@endsection
