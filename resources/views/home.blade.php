@extends('bahan.app-stisla',['title'=>'Dashboard'])

@section('content')
    <!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> {{ \Carbon\Carbon::now()->translatedFormat('d F Y H:i') }}</h4>
                </div>        
                <div class="card-body">
                Selamat Datang, {{ auth::user()->name }}
                </div>
            </div>
        </div>
    </div>

    {{--  <div class="row ">
        <div class="col-md-3">
            <div class="card ">       
                <div class="card-body">
                    <h2 class="text-center">{{ $jumlah_siswa }}</h2>
                    <h4 class="card-title text-center">Jumlah Siswa</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">      
                <div class="card-body">
                    <h2 class="text-center">{{ $jumlah_tagihan }}</h2>
                    <h4 class="card-title text-center">Tagihan Belum Lunas</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                
                <div class="card-body">
                    <h2 class="text-center">{{ $jumlah_tagihan_lunas}}</h2>
                    <h4 class="card-title text-center">Tagihan Lunas</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card ">   
                <div class="card-body">
                    <h2 class="text-center">Rp{{ number_format($jumlah_pembayaran,0,",",".") }}</h2>
                    <h4 class="card-title text-center ">Total Pembayaran</h4>
                </div>
            </div>
        </div>
    </div>  --}}
    <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Siswa</h4>
                  </div>
                  <div class="card-body">
                    {{ $jumlah_siswa }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-credit-card"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Tagihan Belum Bayar</h4>
                  </div>
                  <div class="card-body">
                    {{ $jumlah_tagihan }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="far fa-credit-card"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Tagihan Lunas</h4>
                  </div>
                  <div class="card-body">
                    {{ $jumlah_tagihan_lunas }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                  <i class="fas fa-wallet"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Pembayaran</h4>
                  </div>
                  <div class="card-body">
                    Rp{{ number_format($jumlah_pembayaran,0,",",".") }} 
                  </div>
                </div>
              </div>
            </div>
          </div>



@endsection
