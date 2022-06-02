@extends('bahan.app-stisla')

@section('content')


    <!-- Main content -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit data {{ auth::user()->name }}</h4>
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
                    <label for="password">Password</label>
                    {!! Form::password('password', ['class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('password') }} </span>
                    *Password tidak akan diubah jika kosong
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('password_confirmation') }} </span>
                </div>
                <div>
                {!! Form::submit($namaTombol, ['class'=>'btn btn-primary']) !!}
                <a href="{{ url('user', []) }}" class="ml-2 btn-primary btn">Kembali</a>
                {!! Form::close() !!}
                </div>
            </div>
    </div>
        <!-- /.content -->
@endsection
