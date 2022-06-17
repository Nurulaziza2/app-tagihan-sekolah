@extends('bahan.app-stisla')
@section('js')
<script>
    "use strict";

$("[data-checkboxes]").each(function() {
  var me = $(this),
    group = me.data('checkboxes'),
    role = me.data('checkbox-role');

  me.change(function() {
    var all = $('[data-checkboxes="' + group + '"]:not([data-checkbox-role="dad"])'),
      checked = $('[data-checkboxes="' + group + '"]:not([data-checkbox-role="dad"]):checked'),
      dad = $('[data-checkboxes="' + group + '"][data-checkbox-role="dad"]'),
      total = all.length,
      checked_length = checked.length;

    if(role == 'dad') {
      if(me.is(':checked')) {
        all.prop('checked', true);
      }else{
        all.prop('checked', false);
      }
    }else{
      if(checked_length >= total) {
        dad.prop('checked', true);
      }else{
        dad.prop('checked', false);
      }
    }
  });
});

$("#table-1").dataTable({
  "columnDefs": [
    { "sortable": false, "targets": [2,3] }
  ]
});
$("#table-2").dataTable({
  "columnDefs": [
    { "sortable": false, "targets": [0,2,3] }
  ]
});

</script>
    
@endsection
@section('content')

    <!-- Main content -->
    <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Tagihan</h4>
                </div>               
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <a href="{{ route($routePrefix.'.create') }}" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="col-md-4">
                            {!! Form::open(['route' => $routePrefix.'.index','method' => 'GET']) !!}
                            <div class="input-group mb-3">
                                {!! Form::selectMonth('bulan', request('bulan'), ['class'=>'form-control','placeholder'=>'Pilih Bulan']) !!}
                                {!! Form::selectRange('tahun', date('Y'), 2021, request('tahun'), ['class'=>'form-control','placeholder'=>'Pilih Tahun'])!!}
                                
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="fas fa-filter"></i></button>
                                {{-- {!! Form::submit('Import Excel', ['class' => 'btn btn-primary']) !!} --}}
                                </div>
                            </div>
                            {!! Form::close() !!}    
                        </div>  
                    </div>
                    
                    <div class="table-responsive">
                    <table class="table table-hover table-sm" id="datatables">
                        <thead>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>NIS</th>
                        <th>Periode Tagihan</th>
                        <th>Nama Tagihan</th>
                        <th>Jumlah Tagihan</th>
                        <th>Status</th>
                        <th>Aksi</th>

                    </thead>
                    <tbody>
                        
                        @foreach ($models as $item)
                        <tr>
                            <td>{{ $loop->iteration.'.' }}</td>
                            <td>{{ $item->siswa->nama }}</td>
                            <td>{{ $item->siswa->nis }}</td>
                            <td>{{ $item->tanggal_tagihan->translatedFormat('F Y') }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>Rp{{ number_format($item->jumlah,0,",",".") }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                {!! Form::open(['route'=>[$routePrefix . '.destroy',$item->id],'method'=>'DELETE','onsubmit'=>'return confirm("Anda Yakin?")']) !!}
                                <a href="{{ route($routePrefix . '.edit', $item->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="{{ route($routePrefix . '.show', $item->id) }}" class="btn btn-info ml-1 mr-1"><i class="fas fa-eye"></i></a>
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                {!! Form::close() !!}
                                {{-- {!! Form::submit('Hapus', ['class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!} --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {!! $models->links() !!} --}}
                </div>
            </div>
            </div>
    </div>
        <!-- /.content -->
@endsection
