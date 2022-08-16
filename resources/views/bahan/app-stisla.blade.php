
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="shortcut icon" href="{{ asset('stisla') }}/assets/img/favicon.ico" type="image/x-icon">
  <title>APP Pembayaran SPP{{ $namaHalaman ?? '' }}</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  {{-- <link rel="stylesheet" href="{{asset('stisla')}}/assets/datatables/datatables.min.css"> --}}

  <!-- CSS Libraries -->
  <!-- CSS Libraries DataTables -->
  <link rel="stylesheet" href="{{ asset('stisla') }}/pages/assets/modules/datatables/datatables.min.css">
  <link rel="stylesheet" href="{{ asset('stisla') }}/pages/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('stisla') }}/pages/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
  @yield('css')
  <!-- favicon -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('stisla') }}/assets/css/style.css">
  <link rel="stylesheet" href="{{ asset('stisla') }}/assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="{{ asset('stisla') }}/#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            
          </ul>
          <div class="search-element">
            
            <div class="search-backdrop"></div>
            <div class="search-result">
              
             
              
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          
          <li class="dropdown"><a href="{{ asset('stisla') }}/#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('stisla') }}/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="{{ route('userprofil.edit',0) }}" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{ route ('logout') }}" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ url('/') }}">APP Pembayaran SPP</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/') }}">SPP</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item {{ Request::path() === '/' ? 'active' : '' }}">
                <a href="{{ url('/') }}" class="nav-link "><i class="fas fa-fire"></i><span>Dashboard</span></a>  
              </li>
              @if (auth()->user()->akses == 'admin')
              <li class="nav-item {{ Request::path() === 'user' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.index') }}"><i class="fas fa-users"></i> <span>Data Operator</span>
                </a>
              </li>
              <li class="nav-item {{ Request::path() === 'biaya' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('biaya.index') }}"><i class="fas fa-money-bill-wave"></i> <span>Data Biaya</span>
                </a>
              </li>
              @else
              <li class="nav-item {{ Request::path() === 'kelas' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('kelas.index') }}"><i class="fas fa-pencil-ruler"></i> <span>Data Kelas</span>
                </a>
              </li>
              <li class="nav-item {{ Request::path() === 'siswa' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('siswa.index') }}"><i class="fas fa-user-graduate"></i> <span>Data Siswa</span>
                </a>
              </li>
              <li class="nav-item {{ Request::path() === 'tagihan' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('tagihan.index') }}"><i class="fas fa-money-bill"></i> <span>Data Tagihan</span>
                </a>
              </li>
              @endif
              {{--  <li class="nav-item {{ Request::path() === 'kalkulator' ? 'active' : '' }}">
                <a class="nav-link" href="/kalkulator"><i class="fas fa-calculator"></i> <span>Kalkulator</span>
                </a>
              </li>  --}}
              <li class="nav-item {{ Request::path() === 'laporan' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('laporan.index') }}"><i class="fas fa-file"></i> <span>Laporan</span>
                </a>
              </li>
            </ul>
              

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="{{ route ('logout') }}" class="btn btn-danger btn-lg btn-block btn-icon-split">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
            <div class="section-header">
              <h1>{{ $title ?? ''}}</h1>
            </div>
        
            <div class="section-body">
                @include('flash::message')
                @yield('content')
            </div>
            
        </section>  
      
        
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022 <div class="bullet"></div> App Pembayaran SPP FA Sekolah Mode</a>
        </div>
        <div class="footer-right">
        
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('stisla') }}/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('stisla') }}/pages/assets/modules/datatables/datatables.min.js"></script>
  <script src="{{ asset('stisla') }}/pages/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{ asset('stisla') }}/pages/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="{{ asset('stisla') }}/pages/assets/modules/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  {{-- <script src="{{ asset('stisla') }}/pages/assets/js/page/modules-datatables.js"></script> --}}
  @yield('js')
  <!-- Template JS File -->
  <script src="{{ asset('stisla') }}/assets/js/scripts.js"></script>
  <script src="{{ asset('stisla') }}/assets/js/custom.js"></script>
  <script src="{{ asset('js') }}/jquery.mask.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.format-rupiah').mask('#.##0', {reverse: true});
    });
  </script>

  <!-- Page Specific JS File -->

  {{-- datatables --}}
  <script src="{{ asset('stisla') }}/assets/datatables/datatables.min.js"></script>
  <script>
    $(document).ready( function () {
      $('#datatables').DataTable();
    });
  </script>
</body>
</html>
