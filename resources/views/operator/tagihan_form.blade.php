@extends('bahan.app-stisla', ['title' => 'Form Tagihan'])

@section('content')
    <!-- Main content -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Buat Tagihan Baru</h4>
            </div>
            <div class="card-body">
                {!! Form::model($model, ['route' => $route, 'method' => $method, 'files' => true]) !!}
                {{-- <div class="form-group">
                    <label for="siswa_id">Siswa</label>
                    {!! Form::select('siswa_id', $siswaList, null, ['class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('siswa_id') }} </span>
                </div> --}}
                <div class="form-group">
                    <label for="bulan_tagihan">Bulan Tagihan</label>
                    {!! Form::selectMonth('bulan_tagihan', null, ['class' => 'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('bulan_tagihan') }} </span>
                    * Jatuh Tempo Pada Tanggal 10 Setiap Bulan
                </div>
                <div class="form-group">
                    <label for="tahun_tagihan">Tahun Tagihan</label>
                    {!! Form::selectYear('tahun_tagihan', date('Y'), date('Y') - 10, null, ['class' => 'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('tahun_tagihan') }} </span>
                </div>
                {{-- <div class="form-group">
                    <label for="tanggal_jatuh_tempo">Tanggal Jatuh Tempo</label>
                    {!! Form::date('tanggal_jatuh_tempo', null, ['class' => 'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('tanggal_jatuh_tempo') }} </span>
                </div> --}}
                <div class="form-group">
                    <label for="kelas">Kelas & Biaya</label>
                    {!! Form::select('kelas', $kelasList, null, [
                        'class' => 'form-control',
                        'placeholder' => 'Pilih Kelas & Biaya',
                    ]) !!}
                    <span class="text-danger">{{ $errors->first('kelas') }} </span>
                </div>
                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                <a href="{{ url('tagihan', []) }}" class="ml-2 btn-primary btn">Kembali</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection
