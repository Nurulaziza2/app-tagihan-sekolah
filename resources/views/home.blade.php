@extends('bahan.app-stisla')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> {{ \Carbon\Carbon::now()->translatedFormat('d F Y H:i') }}</h4>
            </div>        
            <div class="card-body">
                Selamat Datang, {{ auth::user()->name }}
            </div>
        </div>
        </div>

@endsection
