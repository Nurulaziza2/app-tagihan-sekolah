@extends('bahan.app-stisla', ['title' => 'Dashboard'])

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
                            Rp{{ number_format($jumlah_pembayaran, 0, ',', '.') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    </div>
    {{-- <div class="row">
        <div class="container col-md-12">
            <div id="myChart">
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card gradient-bottom">
            <div class="card-header">
                <h4>Top 5 Products</h4>
                <div class="card-header-action dropdown">
                    <a href="#" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Month</a>
                    <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <li class="dropdown-title">Select Period</li>
                        <li><a href="#" class="dropdown-item">Today</a></li>
                        <li><a href="#" class="dropdown-item">Week</a></li>
                        <li><a href="#" class="dropdown-item active">Month</a></li>
                        <li><a href="#" class="dropdown-item">This Year</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body" id="top-5-scroll">
                <ul class="list-unstyled list-unstyled-border">
                    <li class="media">
                        <img class="mr-3 rounded" width="55"
                            src="{{ asset('stisla') }}/{{ asset('stisla') }}/ /img/products/product-3-50.png"
                            alt="product">
                        <div class="media-body">
                            <div class="float-right">
                                <div class="font-weight-600 text-muted text-small">86 Sales</div>
                            </div>
                            <div class="media-title">oPhone S9 Limited</div>
                            <div class="mt-1">
                                <div class="budget-price">
                                    <div class="budget-price-square bg-primary" data-width="64%"></div>
                                    <div class="budget-price-label">$68,714</div>
                                </div>
                                <div class="budget-price">
                                    <div class="budget-price-square bg-danger" data-width="43%"></div>
                                    <div class="budget-price-label">$38,700</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="media">
                        <img class="mr-3 rounded" width="55"
                            src="{{ asset('stisla') }}/{{ asset('stisla') }}/assets/img/products/product-4-50.png"
                            alt="product">
                        <div class="media-body">
                            <div class="float-right">
                                <div class="font-weight-600 text-muted text-small">67 Sales</div>
                            </div>
                            <div class="media-title">iBook Pro 2018</div>
                            <div class="mt-1">
                                <div class="budget-price">
                                    <div class="budget-price-square bg-primary" data-width="84%"></div>
                                    <div class="budget-price-label">$107,133</div>
                                </div>
                                <div class="budget-price">
                                    <div class="budget-price-square bg-danger" data-width="60%"></div>
                                    <div class="budget-price-label">$91,455</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="media">
                        <img class="mr-3 rounded" width="55"
                            src="{{ asset('stisla') }}/assets/img/products/product-1-50.png" alt="product">
                        <div class="media-body">
                            <div class="float-right">
                                <div class="font-weight-600 text-muted text-small">63 Sales</div>
                            </div>
                            <div class="media-title">Headphone Blitz</div>
                            <div class="mt-1">
                                <div class="budget-price">
                                    <div class="budget-price-square bg-primary" data-width="34%"></div>
                                    <div class="budget-price-label">$3,717</div>
                                </div>
                                <div class="budget-price">
                                    <div class="budget-price-square bg-danger" data-width="28%"></div>
                                    <div class="budget-price-label">$2,835</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="media">
                        <img class="mr-3 rounded" width="55"
                            src="{{ asset('stisla') }}/assets/img/products/product-3-50.png" alt="product">
                        <div class="media-body">
                            <div class="float-right">
                                <div class="font-weight-600 text-muted text-small">28 Sales</div>
                            </div>
                            <div class="media-title">oPhone X Lite</div>
                            <div class="mt-1">
                                <div class="budget-price">
                                    <div class="budget-price-square bg-primary" data-width="45%"></div>
                                    <div class="budget-price-label">$13,972</div>
                                </div>
                                <div class="budget-price">
                                    <div class="budget-price-square bg-danger" data-width="30%"></div>
                                    <div class="budget-price-label">$9,660</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="media">
                        <img class="mr-3 rounded" width="55"
                            src="{{ asset('stisla') }}/assets/img/products/product-5-50.png" alt="product">
                        <div class="media-body">
                            <div class="float-right">
                                <div class="font-weight-600 text-muted text-small">19 Sales</div>
                            </div>
                            <div class="media-title">Old Camera</div>
                            <div class="mt-1">
                                <div class="budget-price">
                                    <div class="budget-price-square bg-primary" data-width="35%"></div>
                                    <div class="budget-price-label">$7,391</div>
                                </div>
                                <div class="budget-price">
                                    <div class="budget-price-square bg-danger" data-width="28%"></div>
                                    <div class="budget-price-label">$5,472</div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="card-footer pt-3 d-flex justify-content-center">
                <div class="budget-price justify-content-center">
                    <div class="budget-price-square bg-primary" data-width="20"></div>
                    <div class="budget-price-label">Selling Price</div>
                </div>
                <div class="budget-price justify-content-center">
                    <div class="budget-price-square bg-danger" data-width="20"></div>
                    <div class="budget-price-label">Budget Price</div>
                </div>
            </div>
        </div>
    </div>
    </div> --}}
@endsection
{{-- @section('js')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        Highcharts.chart('myChart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Laporan SPP'
            },
            xAxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Rainfall (mm)'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Tagihan',
                data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

            }, {
                name: 'Lunas',
                data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

            }, {
                name: 'Belum Bayar',
                data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

            }, ]
        });
    </script>
@endsection --}}
