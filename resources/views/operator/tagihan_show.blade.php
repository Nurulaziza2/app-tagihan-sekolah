@extends('bahan.app-stisla', ['title' => 'Detail Tagihan'])
@section('js')
@endsection
@section('content')
    <!-- Main content -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-11">
                            <h4 class="card-title">Informasi Siswa </h4>
                        </div>
                        <div class="col-sm-1">
                            <h5 class="card-title">Detail</h5>
                        </div>
                    </div>

                    <table class="tabel ">
                        <tr>
                            <td rowspan="6" width="250">
                                <img src="{{ \Storage::url($model->siswa->gambar ?? 'images/no-image.png') }}"
                                    alt="gbr" width="250" class="mt-3 rounded">
                            </td>
                        </tr>
                        <tr>
                            <td width="20%">NIS</td>
                            <td>{{ $model->siswa->nis }}</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>{{ $model->siswa->nama }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $model->siswa->email }}</td>
                        </tr>
                        <tr>
                            <td>Program Kursus</td>
                            <td>{{ $model->siswa->kelas->nama }} {{ $model->siswa->durasi }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Masuk</td>
                            <td>{{ $model->siswa->tgl_masuk->translatedFormat('d F Y') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Tagihan Bulan {{ $model->tanggal_tagihan->translatedFormat('F Y') }}
                    </h4>
                    <div class="row">
                        <div class="col-md-4">
                            <h6 class="card-title">Periode</h6>
                            <b>{{ $model->tanggal_tagihan->translatedFormat('F Y') }}</b>
                        </div>
                        <div class="col-md-4">
                            <h6 class="card-title">Status</h6>
                            <b
                                class="{{ $model->status === 'Lunas' ? 'status-lunas' : 'status-belumlunas' }}">{{ $model->status }}</b>
                        </div>
                        <div class="col-md-4">
                            <h6 class="card-title">Tenggat</h6>
                            <b>{{ $model->tanggal_jatuh_tempo->translatedFormat('d F Y') }}</b>
                        </div>
                    </div>
                    <br>
                    <h5>Rincian Tagihan</h5>
                    <div class="row">
                        <div class="col-md-8">
                            <b>{{ $model->nama }}</b>
                        </div>
                        <div class="col-md-4">
                            Rp{{ $model->getJumlahRupiah() }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <b>Denda</b>
                        </div>
                        <div class="col-md-4">
                            Rp{{ $model->getDendaRupiah() }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-8">
                            SubTotal
                        </div>
                        <div class="col-md-4">
                            <b>Rp{{ number_format($total,0,",",".") }}</b>
                        </div>
                    </div>
                    @if ($model->status !== "Lunas")
                    <br>
                    <h5>Form Pembayaran</h5>
                    {!! Form::model($modelPembayaran, ['route' => $route, 'method' => $method]) !!}
                    {!! Form::hidden('tagihan_id', $model->id, []) !!}
                   
                    <div class="form-group">
                      <label for="tanggal">Tanggal Pembayaran</label>
                      {!! Form::date('tanggal', \Carbon\Carbon::now(), ['class'=>'form-control']) !!}
                      <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                    </div>
                    <div class="form-group">
                      <label for="jumlah">Jumlah Pembayaran</label>
                      {!! Form::text('jumlah', $total, ['class'=>'form-control format-rupiah']) !!}
                      <span class="text-danger">{{ $errors->first('jumlah') }}</span>
                    </div>
                    {!! Form::submit('Buat Pembayaran', ['class'=>'btn btn-primary']) !!}
                    @else
                    <div class="lunas text-center"><h4>Tagihan Sudah Lunas</h4></div>
                    <div class="lunas"><h4>Dibayar Pada {{ $model->pembayaran }}</h4></div>
                    
                    {{--  {!! Form::model($modelPembayaran, ['route' => $route, 'method' => $method]) !!}
                    {!! Form::hidden('tagihan_id', $model->id, []) !!}
                    <div class="form-group">
                      <label for="tanggal">Dibayar Pada</label>
                      {!! Form::date('tanggal', \Carbon\Carbon::now(), ['class'=>'form-control','disabled'=>'true']) !!}
                      <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                    </div>
                    <div class="form-group">
                      <label for="jumlah">Jumlah Pembayaran</label>
                      {!! Form::text('jumlah', $total, ['class'=>'form-control format-rupiah','disabled'=>'true']) !!}
                      <span class="text-danger">{{ $errors->first('jumlah') }}</span>
                    </div>      --}}
                    @endif
                    
                    
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Kartu SPP </h4>
                    <div class="">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Periode</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach ($model as $item)

                            <tr>
                                <td>{{ $loop->iteration.'.' }}</td>

                                <td>{{ $model->tanggal_tagihan->translatedFormat('F Y')  }}</td>

                                <td>Rp{{ number_format($total,0,",",".") }}</td>

                                <td>
                                    <div class="badge {{ $model->status ==='Lunas' ? 'badge-success' : 'badge-danger' }}">{{ $model->status }}</div>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-secondary"><i class="fas fa-print"></i></a>
                                </td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.content -->
@endsection
