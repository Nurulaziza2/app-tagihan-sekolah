@extends('bahan.app-stisla',['title'=>'Laporan'])

@section('content')
    <!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">                                
                <div class="card-header">
                    <h4 class="card-title">Laporan Tagihan</h4>
                </div>        
                <div class="card-body">
                {!! Form::open(['route' => $routeTagihan,'method' => 'GET']) !!}
                            <div class="input-group mb-3">
                                {!! Form::selectMonth('bulanTagihan',null, ['class'=>'form-control','placeholder'=>'Pilih Bulan']) !!}
                                {!! Form::selectRange('tahunTagihan', date('Y'), 2021, null, ['class'=>'form-control','placeholder'=>'Pilih Tahun'])!!}                                
                            </div>
                            {!! Form::submit('Buat Laporan', ['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}  
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Laporan Pembayaran</h4>
                </div>        
                <div class="card-body">
                {!! Form::open(['route' => $routePembayaran,'method' => 'GET']) !!}
                            <div class="input-group mb-3">
                                {!! Form::selectMonth('bulanPembayaran',null, ['class'=>'form-control','placeholder'=>'Pilih Bulan']) !!}
                                {!! Form::selectRange('tahunPembayaran', date('Y'), 2021, null, ['class'=>'form-control','placeholder'=>'Pilih Tahun'])!!}                                
                            </div>
                            {!! Form::submit('Buat Laporan', ['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}   
                </div>
            </div>
        </div>
        
    </div>

@endsection
