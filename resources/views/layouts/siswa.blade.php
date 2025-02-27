<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title') | SPP</title>
  <link rel="icon" href="{{ URL::asset('favicon.png') }}" type="image/x-icon"/>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ url('../assets/css/style.css')}} ">
    <link rel="stylesheet" href="{{ url('../assets/css/components.css')}} ">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>

      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">


          </ul>

        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image"
                  src="https://ui-avatars.com/api/?background=fff&color=0D8ABC&bold=true&name={{ session('nama') }}"
                  class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">Hello, {{ session('nama') }}</div>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">INFORMASI USER</div>
              <form action="{{ url('siswa/logout') }}" method="GET">
                  @csrf
                  <button type="submit" class="dropdown-item text-danger text-small">
                      <i class="fas fa-sign-out-alt"></i> &nbsp; Keluar
                  </button>
              </form>
          </div>
      </li>
        </ul>
      </nav>


      @yield('content')

      @include('includes.footer')
    </div>
  </div>

  @include('sweetalert::alert')
  @stack('prepend-script')
    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    {{-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('../assets/js/stisla.js')}} "></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="{{ url('../assets/js/scripts.js')}} "></script>
    <script src="{{ url('../assets/js/custom.js')}} "></script>


    <!-- Page Specific JS File -->

  @stack('addon-script')
</body>
</html>
