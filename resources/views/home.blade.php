@extends('bahan.app-stisla',['title'=>'Dashboard'])

@section('content')
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
    @if (auth::user()->akses == 'admin')
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Operator</h4>
                  </div>
                  <div class="card-body">
                    {{ $jumlah_operator }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                  <i class="fas fa-wallet"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jenis Biaya</h4>
                  </div>
                  <div class="card-body">
                    {{ $jenis_biaya }}
                  </div>
                </div>
              </div>
            </div>
          </div>
    @else
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
    @endif



@endsection
