@extends('bahan.app-stisla',['title'=>'Laporan'])

@section('content')
    <!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Laporan Pembayaran</h4>
                </div>        
                <div class="card-body">
                {!! Form::model($modelPembayaran, ['route'=>$route, 'method'=>$method,'files' => true]) !!}
                <div class="form-group">
                    <label for="tanggal_mulai">Dari</label>
                    {!! Form::date('tanggal_mulai', null, ['class'=>'form-control',]) !!}
                    <span class="text-danger">{{ $errors->first('tanggal_mulai') }} </span>
                </div>
                <div class="form-group">
                    <label for="tanggal_akhir">Hingga</label>
                    {!! Form::date('tanggal_akhir', null, ['class'=>'form-control',]) !!}
                    <span class="text-danger">{{ $errors->first('tanggal_akhir') }} </span>
                </div>
                 {!! Form::submit('Buat Laporan', ['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Laporan Belum Bayar SPP</h4>
                </div>        
                <div class="card-body">
                {!! Form::model($modelTagihan, ['route'=>$route, 'method'=>$method,'files' => true]) !!}
                <div class="form-group">
                    <label for="tanggal_mulai">Dari</label>
                    {!! Form::date('tanggal_mulai', null, ['class'=>'form-control',]) !!}
                    <span class="text-danger">{{ $errors->first('tanggal_mulai') }} </span>
                </div>
                <div class="form-group">
                    <label for="tanggal_akhir">Hingga</label>
                    {!! Form::date('tanggal_akhir', null, ['class'=>'form-control',]) !!}
                    <span class="text-danger">{{ $errors->first('tanggal_akhir') }} </span>
                </div>
                 {!! Form::submit('Buat Laporan', ['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
