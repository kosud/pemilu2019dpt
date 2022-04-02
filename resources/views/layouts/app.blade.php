
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') | {{ config('app.name', 'Aplikasi SAN') }}</title>
    <link rel="icon" href="{{ asset('assets/img/logo.png')}}">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('assets/admin/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('assets/extras/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/AdminLTE.min.css')}}">
<!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->



    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style type="text/css">
        body {
            background-image: url("{{ asset('assets/img/bg.jpg')}}");
            background-size: cover;
        }
        .centered {
            position: fixed;
            top: 30%;
            left: 45%;
            margin-top: -50px;
            margin-left: -100px;
        }
        #popup {
            display:none;
            position:absolute;
            margin:0 auto;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
        }

    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="navbar-wrapper">
        <nav class="navbar navbar-inverse" style="background-color: #ff9933; border-color: #ff9933;">
            <div class="container-fluid" style="margin-right: 20px;">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img alt="Brand" src="{{ asset('assets/img/logo.png')}}" width="30px" style="margin-top: -8px;">
                    </a>
                </div>
                <ul class="nav navbar-nav pull-left">

                    <li class="dropdown">
                        <a href="{{ route('home')}}" style="font-size: 18px;color:white;margin-left: 10px" >
                            BERANDA
                        </a>
                    </li>
                    <li class="dropdown">
                        <a style="font-size: 18px;color:white;margin-left: 10px" href="{{ route('rekap.index')}}">
                            REKAPITULASI
                        </a>
                    </li>
                    <li class="dropdown">
                        <a style="font-size: 18px;color:white;margin-left: 10px" href="{{route('pemilih.tentang')}}">
                            SIAPA PEMILIH
                        </a>
                    </li>
                    <li class="dropdown">
                        <a style="font-size: 18px;color:white;margin-left: 10px" href="{{route('pemilih.pindah')}}">
                            PINDAH MEMILIH
                        </a>
                    </li>
                     @guest
                        <li class="dropdown">
                            <a style="font-size: 18px;color:white;margin-left: 10px" href="{{ route('login') }}">
                                {{ __('LOGIN') }}
                            </a>
                        </li>
                        @if (Route::has('register'))
                            <li class="dropdown">
                                <a style="font-size: 18px;color:white;margin-left: 10px" href="{{ route('register') }}">
                                    {{ __('REGISTER') }}
                                </a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a  style="font-size: 18px;color:white;margin-left: 10px" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a style="font-size: 18px;color:black;margin-left: 10px" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest

                </ul>
            </div>
        </nav>
    </div>
    <!-- Main content -->
    <section class="content">
        <center>
            <img width="90px" src="{{ asset('assets/img/logo.png')}}" style="margin-bottom:10px;">
        </center>
        @yield('content')
    </section>
    <!-- /.content -->

    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->

    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{ asset('assets/admin/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>

    <script src="{{ asset('assets/admin/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('assets/admin/dist/js/app.min.js')}}"></script>

    <script src="{{ asset('assets/admin/dist/js/demo.js')}}"></script>
    <script src="{{ asset('assets/admin/plugins/fastclick/fastclick.js')}}"></script>

    @yield('js')

    <script type="text/javascript">
        $('.tabel').DataTable( {
            "ordering": false,
        } );
        $(".datatables").DataTable({
            dom: 'lBfrtip',
            buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    </script>
    @yield('script')


</body>
</html>

