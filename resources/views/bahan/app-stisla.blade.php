
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>APP Pembayaran SPP</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
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
            <li><a href="{{ asset('stisla') }}/#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="{{ asset('stisla') }}/#">How to hack NASA using CSS</a>
                <a href="{{ asset('stisla') }}/#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
            
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="{{ asset('stisla') }}/#">
                  <img class="mr-3 rounded" width="30" src="{{ asset('stisla') }}/assets/img/products/product-3-50.png" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="{{ asset('stisla') }}/#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="{{ asset('stisla') }}/#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="{{ asset('stisla') }}/#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="{{ asset('stisla') }}/#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ asset('stisla') }}/assets/img/avatar/avatar-1.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="{{ asset('stisla') }}/#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="{{ asset('stisla') }}/#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="{{ asset('stisla') }}/#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="{{ asset('stisla') }}/#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="{{ asset('stisla') }}/#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="{{ asset('stisla') }}/#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('stisla') }}/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="{{ asset('stisla') }}/features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="{{ asset('stisla') }}/features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="{{ asset('stisla') }}/features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
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
              <li class="nav-item {{ Request::path() === 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}" class="nav-link "><i class="fas fa-fire"></i><span>Dashboard</span></a>  
              </li>
              @if (auth()->user()->akses == 'admin')
                <li class="nav-item {{ Request::path() === 'user' ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('user.index') }}"><i class="fas fa-users"></i> <span>Data User</span>
                  </a>
                </li>
                <li class="nav-item {{ Request::path() === 'biaya' ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('biaya.index') }}"><i class="fas fa-money-bill-wave"></i> <span>Data Biaya</span>
                  </a>
                </li>
              @endif

              <li class="nav-item {{ Request::path() === 'kelas' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('kelas.index') }}"><i class="fas fa-pencil-ruler"></i> <span>Data Kelas</span>
                </a>
              </li>
              <li class="nav-item {{ Request::path() === 'siswa' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('siswa.index') }}"><i class="fas fa-user-graduate"></i> <span>Data Siswa</span>
                </a>
              </li>
              <li class="nav-item {{ Request::path() === 'laporan' ? 'active' : '' }}">
                <a class="nav-link" href="#"><i class="fas fa-file"></i> <span>Laporan</span>
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
              <h1>Data {{ Request::path() }}</h1>
            </div>
        
            <div class="section-body">
                @include('flash::message')
                @yield('content')
            </div>
            
       
        
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="{{ asset('stisla') }}/https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          2.3.0
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
</body>
</html>
