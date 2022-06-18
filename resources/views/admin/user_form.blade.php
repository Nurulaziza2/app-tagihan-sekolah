@extends('bahan.app-stisla', ['title' => 'Form Operator'])

@section('content')


    <!-- Main content -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Operator</h4>
            </div>               
            <div class="card-body">
                {!! Form::model($model, ['route'=>$route, 'method'=>$method]) !!}
                <div class="form-group">
                    <label for="name">Nama</label>
                    {!! Form::text('name', null, ['class'=>'form-control','autofocus'=>true]) !!}
                    <span class="text-danger">{{ $errors->first('name') }} </span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    {!! Form::text('email', null, ['class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('email') }} </span>
                </div>
                <div class="form-group">
                    <label for="akses">Akses</label>
                    {!! Form::select('akses', ['operator' => 'operator',    ], null, ['class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('akses') }} </span>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    {!! Form::password('password', ['class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('password') }} </span>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('password_confirmation') }} </span>
                </div>
                {!! Form::submit($namaTombol, ['class'=>'btn btn-primary']) !!}
                <a href="{{ url('user', []) }}" class="ml-2 btn-primary btn">Kembali</a>
                {!! Form::close() !!}
                </div>
                
            </div>
    </div>
        <!-- /.content -->
@endsection
