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
                                <!-- <form action="{{ route('polres.regis') }}" method="POST" id="basicform" data-parsley-validate=""> -->
                                {!! Form::open(['route' => 'polres.regis', 'method' => 'POST']) !!}
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                <div class='form-group'>
                                    {{ Form::label('nama_polres','Nama Polres') }}
                                    {{ Form::text('nama_polres','',['class'=>'form-control','placeholder'=>'Nama Polres']) }}
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('username','Username') }}
                                    {{ Form::text('username','',['class'=>'form-control','placeholder'=>'Username']) }}
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('email','Email') }}
                                    {{ Form::text('email','',['class'=>'form-control','placeholder'=>'Email']) }}
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('password','Password') }}
                                    {{ Form::text('password','',['class'=>'form-control','placeholder'=>'Password']) }}
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
                                                <td>{{$item->password}}</td>
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