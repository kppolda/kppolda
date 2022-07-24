@extends('layout/sidebar-admin')

@section('title', 'Data Polres')

<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header" style="margin-top: 38px;">
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/home" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Polres</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">

                <!-- Modal -->
                <div class="modal fade" id="dataPolres" tabindex="-1" role="dialog" aria-labelledby="titlePolres" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="titlePolres">Tambah Data Polres</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('polres.regis') }}" method="POST" id="basicform" data-parsley-validate="">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div class="form-group ">
                                <label for="namaPolres">Nama Polres</label>
                                <input id="namaPolres" type="text" name="nama_polres" data-parsley-trigger="change" required placeholder="Nama Polres" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="username">Username</label>
                                <input id="username" type="text" name="username" data-parsley-trigger="change" required placeholder="Username" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="email">Email</label>
                                <input id="email" type="text" name="email" data-parsley-trigger="change" required placeholder="Email" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="password">Password</label>
                                <input id="password" type="text" name="password" data-parsley-trigger="change" required placeholder="Password" autocomplete="off" class="form-control form-control-lg">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </div>
                </div>
                </div>

                <div class="row">
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->

                    <!-- recent orders  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="m-0">Data Polres</h5>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataPolres">
                                    Tambah Data
                                </button>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table id="polres" class="table table-striped table-bordered" style="width:100%">
                                    <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">id</th>
                                                <th class="border-0">nama polres</th>
                                                <th class="border-0">username</th>
                                                <th class="border-0">email</th>
                                                <th class="border-0">password</th>
                                                <th class="border-0">action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($users as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <!-- <td>
                                                    <div class="m-r-10"><img src="/concept/assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                                                </td> -->
                                                <td>{{$item->nama_polres}}</td>
                                                <td>{{$item->username}} </td>
                                                <td>{{$item->email}}</td>
                                                <td>
                                                    <form method="POST" action="{{ route('polres.delete', [$item->id]) }}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-rounded btn-danger">Delete</button>
                                                    </form>
                                                    <!-- <a href="{{route('polres.delete', [$item->id])}}" onclick="return confirm('yang benul bang?')">
                                                        {{ method_field('DELETE') }}
                                                    </a> -->
                                                </td>
                                                <!-- <td>$80.00</td>
                                                <td>27-08-2018 01:22:12</td>
                                                <td>Patricia J. King </td>
                                                <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td> -->
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td>1</td>
                                                <td>Kediri Kota</td>
                                                <td>Kediri_Kota</td>
                                                <td>kedirikota@gmail.com</td>
                                                <td>k3D1r1_k0t4</td>
                                                <td>
                                                    <form method="POST" action="" style="margin:0;">
                                                        <button type="submit" class="btn btn-rounded btn-brand">Edit</button>
                                                        <button type="submit" class="btn btn-rounded btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end recent orders  -->


                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- customer acquistion  -->
                    <!-- ============================================================== -->
                    
                </div>
            </div>
        </div>
    </div>
</div>

@section('script')

<script>
    $(document).ready(function() {
        $('#polres').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>

@endsection