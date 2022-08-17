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
                            <h5 class="card-title"><a href={{ route('siswa.show', $model->siswa->id) }}>Detail</a></h5>
                        </div>
                    </div>

                    <table class="tabel ">
                        <tr>
                            <td rowspan="6" width="250">
                                @if ($model->siswa->gambar == null)
                                    <img src="{{ url('stisla/assets/img/avatar/avatar-3.png') }}" alt="gbr"
                                        width="100%" class="mt-3 rounded">
                                @else
                                    <img src="{{ \Storage::url($model->siswa->gambar) }}" alt="gbr" width="100%"
                                        class="mt-3 rounded">
                                @endif
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
                    @if ($jumlahDenda > 0)
                        <div class="row">
                            <div class="col-md-8">
                                <b>Denda ( telat {{ $telatHari }} hari )</b>
                            </div>
                            <div class="col-md-4">
                                Rp{{ number_format($jumlahDenda, 0, ',', '.') }}
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-md-8">
                                <b>Denda </b>
                            </div>
                            <div class="col-md-4">
                                Rp{{ number_format($jumlahDenda, 0, ',', '.') }}
                            </div>
                        </div>
                    @endif
                    <hr>
                    <div class="row">
                        <div class="col-md-8">
                            SubTotal
                        </div>
                        <div class="col-md-4">
                            <b>Rp{{ number_format($total, 0, ',', '.') }}</b>
                        </div>
                    </div>
                    @if ($model->status !== 'Lunas')
                        <br>
                        <h5>Form Pembayaran</h5>
                        {!! Form::model($modelPembayaran, ['route' => $route, 'method' => $method]) !!}
                        {!! Form::hidden('tagihan_id', $model->id, []) !!}

                        <div class="form-group">
                            <label for="tanggal">Tanggal Pembayaran</label>
                            {{-- {!! Form::date('tanggal', \Carbon\Carbon::parse('2022-07-12'), ['class' => 'form-control']) !!} --}}
                            {!! Form::date('tanggal', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah Pembayaran</label>
                            {!! Form::text('jumlah', $total, ['class' => 'form-control format-rupiah']) !!}
                            <span class="text-danger">{{ $errors->first('jumlah') }}</span>
                        </div>
                        {!! Form::submit('Buat Pembayaran', ['class' => 'btn btn-primary']) !!}
                    @else
                        <div class="lunas text-center"><u>
                                <h4>Tagihan Sudah Lunas</h4>
                            </u></div>
                        <div class="lunas">
                            <h5>Dibayar pada : {{ $dataPembayaran[0]->tanggal->translatedFormat('d F Y') }}</h5>
                            <h5>Pembayaran diterima oleh : {{ $dataPembayaran[0]->diterima_oleh }}</h5>
                        </div>
                    @endif
                    {!! Form::close() !!}

                </div>
            </div>
        </div>

        {{-- KartuSPP --}}
        <div class="col-sm-7">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-10">
                            <h4 class="card-title">Kartu SPP </h4>
                        </div>
                        <div class="col-sm-2">
                            <div class="cetak"> <a href="{{ route('kartuspp.show', [$model->id]) }}"
                                    class="btn btn-primary" alt="Cetak Kartu SPP" target="blank"><i
                                        class="fas fa-print"></i></a></div>
                        </div>
                    </div>

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
                            @foreach ($kartuTagihan as $item)
                                <tr>
                                    <td>{{ $loop->iteration . '.' }}</td>

                                    <td>{{ $item->tanggal_tagihan->translatedFormat('F Y') }}

                                    </td>

                                    <td>
                                        Rp{{ number_format($item->jumlah, 0, ',', '.') }}
                                    </td>

                                    <td>
                                        <a href={{ route('tagihan.show', $item->id) }}>
                                            <div
                                                class="badge {{ $item->status === 'Lunas' ? 'badge-success' : 'badge-danger' }}">
                                                {{ $item->status }}</div>
                                        </a>
                                    </td>
                                    <td>
                                        @if ($item->status !== 'Lunas')
                                            <a href={{ route('invoice.show', $item->id) }} target="blank"
                                                class="btn btn-info"><i class="fas fa-print"></i></a>
                                        @else
                                            <a href={{ route('kwitansi.show', $item->id) }} target="blank"
                                                class="btn btn-info"><i class="fas fa-print"></i></a>
                                        @endif
                                    </td>


                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <a href="{{ url('tagihan', []) }}" class="ml-3 mt-2 btn-primary btn">Kembali</a>
    </div>
    </div>

    <!-- /.content -->
@endsection
