@extends('bahan.app-stisla')

@section('content')


    <!-- Main content -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Kelas</h4>
            </div>               
                <div class="card-body">
                {!! Form::model($model, ['route'=>$route, 'method'=>$method]) !!}
                <div class="form-group">
                    <label for="nama">Nama</label>
                    {!! Form::text('nama', null, ['class'=>'form-control','autofocus'=>true]) !!}
                    <span class="text-danger">{{ $errors->first('nama') }} </span>
                </div>
                <div class="form-group">
                    <label for="durasi_kursus">Durasi Kursus</label>
                    {!! Form::select('durasi_kursus', [
                        '3 Bulan' => '3 Bulan',
                        '6 Bulan' => '6 Bulan',
                        '12 Bulan' => '12 Bulan',
                    ], null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="detail">Detail</label>
                    {!! Form::textarea('detail', null, ['class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('detail') }} </span>
                </div>
                {!! Form::submit($namaTombol, ['class'=>'btn btn-primary']) !!}
                <a href="{{ url('siswa', []) }}" class="ml-2 btn-primary btn">Kembali</a>
                {!! Form::close() !!}
                </div>
            </div>
    </div>
        <!-- /.content -->
@endsection
