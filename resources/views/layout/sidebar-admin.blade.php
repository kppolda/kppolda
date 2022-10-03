<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/concept/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="/concept/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/concept/assets/libs/css/style.css">
    <link rel="stylesheet" href="/concept/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="/concept/assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="/concept/assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="/concept/assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="/concept/assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
    <link rel="stylesheet" href="/concept/assets/libs/css/style.css">
    <link rel="stylesheet" href="/concept/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="/concept/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="/concept/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="/concept/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/concept/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="/concept/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>@yield('title')</title>
    @yield('style')
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->

        <!-- Modal -->
        <div class="modal fade" id="gantiPassword" tabindex="-1" role="dialog" aria-labelledby="titleGantiPassword" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="titleGantiPassword">Ganti Password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {!! Form::open(['route' => ['polres.edit',Auth::user()->id], 'method' => 'PUT']) !!}
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class='form-group'>
                            {{ Form::text('nama_polres',Auth::user()->nama_polres,['class'=>'form-control', 'hidden']) }}
                        </div>
                        <div class='form-group'>
                            {{ Form::text('username',Auth::user()->username,['class'=>'form-control', 'hidden']) }}
                        </div>
                        <div class='form-group'>
                            {{ Form::label('password','Password baru') }}
                            {{ Form::text('password',Auth::user()->pass,['class'=>'form-control qty3', 'placeholder' => 'Password baru']) }}
                            <p>Panjang password minimal 6 karakter serta mengandung bilangan, minimal 1 huruf kapital, dan 1 huruf kecil.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand">POLDA JATIM</a>
                @guest
                <div class="text-end">
                    <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
                    <!-- <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a> -->
                </div>
                @endguest


                @auth
                <div class="ms-auto" style="margin-left:auto; margin-right:1cm">
                    <a class="nav-link " href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{auth()->user()->nama_polres}}</a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                    @if (Auth::user()->username === 'admin')
                    @else
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#gantiPassword"><i class="fas fa-user mr-2"></i>Ubah Password</a>
                    @endif
                        <a class="dropdown-item" href="{{ route('logout.perform') }}"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
                    </div>
                </div>
                @endauth
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            @guest
                            <li class="nav-item ">
                                <a class="nav-link {{ Request::is('*home*') ? 'active' : '' }}" href="/home">
                                    <i class="fa fa-fw fa-home"></i>Home <span class="badge badge-success">6</span>
                                </a>
                            </li>
                            @endguest
                            @auth
                            @if (Auth::user()->username === 'admin')
                            <li class="nav-item ">
                                <a class="nav-link {{ Request::is('*home*') ? 'active' : '' }}" href="/home">
                                    <i class="fa fa-fw fa-home"></i>Home <span class="badge badge-success">6</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('*data-polres*') ? 'active' : '' }}" href="/data-polres">
                                    <i class="fa fa-fw fa-building "></i>Data Polres
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('*data-personil*') ? 'active' : '' }}" href="/data-personil">
                                    <i class="fa fa-fw fa-users"></i>Data Personil
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ Request::is('*data-inventaris*') ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1">
                                    <i class="fa fa-fw fa-tags"></i>Data Inventaris <span class="badge badge-success">6</span>
                                </a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/data-inventaris/data-jarkomrad">Data JarKomRad</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/data-inventaris/data-jarkomdat">Data JarKomDat</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/data-inventaris/data-barang">Data Barang</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('*data-giat*') ? 'active' : '' }}" href="/data-giat">
                                    <i class="fa fa-fw fa-cogs"></i>Data Daftar Giat
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('*daftar-lapbul*') ? 'active' : '' }}" href="/daftar-lapbul">
                                    <i class="fa fa-fw fa-clipboard-list"></i>Daftar Lapbul
                                </a>
                            </li>
                            @else

                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('*data-personil*') ? 'active' : '' }}" href="/data-personil/id">
                                    <i class="fa fa-fw fa-users"></i>Data Personil
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ Request::is('*data-inventaris*') ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1">
                                    <i class="fa fa-fw fa-tags"></i>Data Inventaris <span class="badge badge-success">6</span>
                                </a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/data-inventaris/data-jarkomrad/id">Data JarKomRad</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/data-inventaris/data-jarkomdat/id">Data JarKomDat</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/data-inventaris/data-barang/id">Data Barang</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('*data-giat*') ? 'active' : '' }}" href="/data-giat/id">
                                    <i class="fa fa-fw fa-cogs"></i>Data Daftar Giat
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('*data-hambatan*') ? 'active' : '' }}" href="/data-hambatan/id">
                                    <i class="fa fa-fw fa-minus-circle"></i>Data Hambatan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('*kesimpulan-saran*') ? 'active' : '' }}" href="/kesimpulan-saran/id">
                                    <i class="fa fa-fw fa-hands"></i>Kesimpulan Saran
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('*daftar-lapbul*') ? 'active' : '' }}" href="{{route('lapbul')}}">
                                    <i class="fa fa-fw fa-clipboard-list"></i>Daftar Lapbul
                                </a>
                            </li>
                            @endif
                            @endauth
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->

        <div class="dashboard-wrapper">
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            Copyright © 2018 /concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->

    <script src="/concept/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="/concept/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="/concept/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="/concept/assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="/concept/assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="/concept/assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="/concept/assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="/concept/assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>

    <script src="/concept/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="/concept/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="/concept/assets/libs/js/main-js.js"></script>
    <script src="/concept/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <script src="/concept/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <script src="/concept/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="/concept/assets/vendor/charts/morris-bundle/morris.js"></script>
    <script src="/concept/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="/concept/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="/concept/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="/concept/assets/libs/js/dashboard-ecommerce.js"></script>
    @yield('script')

</body>

</html>
