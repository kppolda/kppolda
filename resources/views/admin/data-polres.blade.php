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
                                    {!! Form::open(['route' => 'polres.regis', 'method' => 'POST', 'id' => 'newModalForm']) !!}
                                    {{ csrf_field() }}
                                    {{ method_field('POST') }}
                                    {{-- <div class='form-group'>
                                        {{ Form::text('nama_polres','',['class'=>'form-control','placeholder'=>'Nama Polres']) }}
                                    </div> --}}
                                    <div class="form-group">
                                        {{ Form::label('nama_polres','Nama Polres') }}
                                        <input id="nama_polres" value='' type="text" name="nama_polres" data-parsley-trigger="change" placeholder="Nama Polres" autocomplete="off" class="form-control" required>
                                    </div>
                                    <div class='form-group'>
                                        {{ Form::label('anggaran','Anggaran') }}
                                        {{ Form::text('anggaran','',['class'=>'form-control','required','placeholder'=>'Anggaran']) }}
                                    </div>
                                    <div class='form-group'>
                                        {{ Form::label('dspp','DSPP') }}
                                        {{ Form::text('dspp','',['class'=>'form-control','required','placeholder'=>'DSPP']) }}
                                    </div>
                                    <div class='form-group'>
                                        {{ Form::label('username','Username') }}
                                        {{ Form::text('username','',['class'=>'form-control','required','placeholder'=>'Username']) }}
                                    </div>
                                    <div class='form-group'>
                                        {{ Form::label('password','Password') }}
                                        {{ Form::text('password','',['class'=>'form-control qty1','required','placeholder'=>'Password']) }}
                                        <p>Panjang password minimal 6 karakter serta mengandung bilangan, minimal 1 huruf kapital, dan 1 huruf kecil.</p>
                                    </div>
                                    <div class="form-group ">
                                        <input id="pass" type="text" name="pass" data-parsley-trigger="change" autocomplete="off" class="form-control total" hidden>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                        {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
                                    </div>
                                {!! Form::close() !!}

                                {{-- <form role="form" id="newModalForm">
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="email">A p Name:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="pName" name="pName" placeholder="Enter a p name" require/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="email">Action:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="action" name="action" placeholder="Enter and action" require>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success" id="btnSaveIt">Save</button>
                                        <button type="button" class="btn btn-default" id="btnCloseIt" data-dismiss="modal">Close</button>
                                    </div>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
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
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="polres" class="table table-striped table-bordered" style="width:100%">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">no</th>
                                                <th class="border-0">nama polres</th>
                                                <th class="border-0">username</th>
                                                <th class="border-0">password</th>
                                                <th class="border-0">action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $item)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <!-- <td>
                                                    <div class="m-r-10"><img src="/concept/assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                                                </td> -->
                                                <td>{{$item->nama_polres}}</td>
                                                <td>{{$item->username}} </td>
                                                <td>{{$item->pass}}</td>
                                                <td class="d-flex">
                                                    <form class="mb-0 mr-2" method="POST" action="{{ route('polres.delete', [$item->id]) }}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-rounded btn-danger">Delete</button>
                                                    </form>
                                                    <button data-toggle="modal" data-target="#editBarang{{$item->id}}" class="btn mr-2 btn-rounded btn-brand">Edit</button>
                                                    <a href="/laporan/{{$item->username}}" class="btn btn-rounded btn-info">Info</a>
                                                </td>
                                                <!-- Modal Edit -->
                                                <div class="modal fade" id="editBarang{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="titleBarang" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="titleBarang">Edit Data Polres</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                {!! Form::open(['route' => ['polres.edit',$item->id], 'method' => 'PUT']) !!}
                                                                {{ csrf_field() }}
                                                                {{ method_field('PUT') }}
                                                                <div class='form-group'>
                                                                    {{ Form::label('nama_polres','Nama Polres') }}
                                                                    {{ Form::text('nama_polres',$item->nama_polres,['class'=>'form-control']) }}
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('anggaran','Anggaran') }}
                                                                    {{ Form::text('anggaran',$item->anggaran,['class'=>'form-control','placeholder'=>'Anggaran']) }}
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('dspp','DSPP') }}
                                                                    {{ Form::text('dspp',$item->dspp,['class'=>'form-control','placeholder'=>'DSPP']) }}
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('username','Username') }}
                                                                    {{ Form::text('username',$item->username,['class'=>'form-control']) }}
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('password','Password') }}
                                                                    {{ Form::text('password',$item->pass,['class'=>'form-control qty3']) }}
                                                                    <p>Panjang password minimal 6 karakter serta mengandung bilangan, minimal 1 huruf kapital, dan 1 huruf kecil.</p>
                                                                </div>
                                                                {{-- <div class='form-group'>
                                                                    <input id="pass" type="text" name="pass" data-parsley-trigger="change" autocomplete="off" class="form-control total3" readonly>
                                                                </div> --}}
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                                    {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
                                                                </div>
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @if(count($errors) > 0)
                                        @foreach($errors->all() as $error)
                                            <div class="alert alert-danger">
                                                {{$error}}
                                            </div>
                                        @endforeach
                                    @endif
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

<script>
    $(document).on("change", ".qty1", function() {
        var inputString = $(".qty1").val();
        $(".total").val(inputString);
    });
</script>
<script>
    $(document).on("change", ".qty2", function() {
        var inputString = $(".qty2").val();
        $(".total2").val(inputString);
    });
</script>
<script>
    $(document).on("change", ".qty3", function() {
        var inputString = $("#password").val();
        $(".total3").val(inputString);
    });
</script>
@endsection
