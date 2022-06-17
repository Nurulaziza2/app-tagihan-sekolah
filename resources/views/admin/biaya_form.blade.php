@extends('bahan.app-stisla', ['title' => 'Form Biaya'])

@section('content')


    <!-- Main content -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Biaya</h4>
            </div>
                <div class="card-body">
                {!! Form::model($model, ['route'=>$route, 'method'=>$method]) !!}
                <div class="form-group">
                    <label for="nama">Nama</label>
                    {!! Form::text('nama', null, ['class'=>'form-control','autofocus'=>true]) !!}
                    <span class="text-danger">{{ $errors->first('nama') }} </span>
                </div>
                <div class="form-group">
                    <label for="nominal">Nominal</label>
                    {!! Form::text('nominal', null, ['class'=>'form-control format-rupiah']) !!}
                    <span class="text-danger">{{ $errors->first('nominal') }} </span>
                </div>
                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    {!! Form::selectRange('tahun', 2020, date('Y'), null, ['class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('tahun') }} </span>
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    {!! Form::textarea('deskripsi', null, ['class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('deskripsi') }} </span>
                </div>
                
                {!! Form::submit($namaTombol, ['class'=>'btn btn-primary']) !!}
                <a href="{{ url('biaya', []) }}" class="ml-2 btn-primary btn">Kembali</a>
                {!! Form::close() !!}
                </div>
        </div>
    </div>
        <!-- /.content -->
@endsection
