@extends('layout/sidebar-admin')

@section('title', 'Data JarKomRad')

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
                                    <li class="breadcrumb-item active" aria-current="page">Data JarKomRad</li>
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
                <!-- Modal Site -->
                <div class="modal fade" id="dataSite" tabindex="-1" role="dialog" aria-labelledby="titleSite" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="titleSite">Tambah Data Site</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(['route' => 'rad.regis', 'method' => 'POST']) !!}
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                <div class='form-group'>
                                    {{ Form::label('nama_barang','Nama Barang') }}
                                    {{ Form::text('nama_barang','',['class'=>'form-control','placeholder'=>'Nama Barang']) }}
                                </div>
                                <div class="form-group ">
                                    <label for="jenis_barang">Jenis Barang</label>
                                    <input id="jenis_barang" value="site" type="text" name="jenis_barang" data-parsley-trigger="change" required placeholder="Site" autocomplete="off" class="form-control form-control-lg" readonly>
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('sumber','Sumber') }}
                                    {{ Form::text('sumber','',['class'=>'form-control','placeholder'=>'Sumber']) }}
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('jml_barang','Jumlah Barang') }}
                                    {{ Form::text('jml_barang','',['class'=>'form-control','placeholder'=>'Jumlah Barang']) }}
                                </div>
                                <label>Kondisi</label>
                                <div class="row form-group pt-0">
                                    <div class='col'>
                                        <div class="input-group">
                                            {{ Form::text('kondisi_bb','',['class'=>'form-control form-control-lg','placeholder'=>'Masukkan Jumlah']) }}
                                            <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                        </div>
                                    </div>
                                    <div class='col'>
                                        <div class="input-group">
                                            {{ Form::text('kondisi_rr','',['class'=>'form-control form-control-lg','placeholder'=>'Masukkan Jumlah']) }}
                                            <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                        </div>
                                    </div>
                                    <div class='col'>
                                        <div class="input-group">
                                            {{ Form::text('kondisi_rb','',['class'=>'form-control form-control-lg','placeholder'=>'Masukkan Jumlah']) }}
                                            <div class="input-group-append"><span class="input-group-text">RB</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('keterangan','Keterangan') }}
                                    {{ Form::text('keterangan','',['class'=>'form-control form-control-lg','placeholder'=>'Keterangan']) }}
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

                <!-- Modal Alkom -->
                <div class="modal fade" id="dataAlkom" tabindex="-1" role="dialog" aria-labelledby="titleAlkom" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="titleAlkom">Tambah Data Alkom</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(['route' => 'rad.regis', 'method' => 'POST']) !!}
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                <div class='form-group'>
                                    {{ Form::label('nama_barang','Nama Barang') }}
                                    {{ Form::text('nama_barang','',['class'=>'form-control','placeholder'=>'Nama Barang']) }}
                                </div>
                                <div class="form-group ">
                                    <label for="jenis_barang">Jenis Barang</label>
                                    <input id="jenis_barang" value="alkom" type="text" name="jenis_barang" data-parsley-trigger="change" required placeholder="Alkom" autocomplete="off" class="form-control form-control-lg" readonly>
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('sumber','Sumber') }}
                                    {{ Form::text('sumber','',['class'=>'form-control','placeholder'=>'Sumber']) }}
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('jml_barang','Jumlah Barang') }}
                                    {{ Form::text('jml_barang','',['class'=>'form-control','placeholder'=>'Jumlah Barang']) }}
                                </div>
                                <label>Kondisi</label>
                                <div class="row form-group pt-0">
                                    <div class='col'>
                                        <div class="input-group">
                                            {{ Form::text('kondisi_bb','',['class'=>'form-control form-control-lg','placeholder'=>'Masukkan Jumlah']) }}
                                            <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                        </div>
                                    </div>
                                    <div class='col'>
                                        <div class="input-group">
                                            {{ Form::text('kondisi_rr','',['class'=>'form-control form-control-lg','placeholder'=>'Masukkan Jumlah']) }}
                                            <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                        </div>
                                    </div>
                                    <div class='col'>
                                        <div class="input-group">
                                            {{ Form::text('kondisi_rb','',['class'=>'form-control form-control-lg','placeholder'=>'Masukkan Jumlah']) }}
                                            <div class="input-group-append"><span class="input-group-text">RB</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('keterangan','Keterangan') }}
                                    {{ Form::text('keterangan','',['class'=>'form-control form-control-lg','placeholder'=>'Keterangan']) }}
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
                                <h5 class="m-0">Data Site</h5>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataSite">
                                    Tambah Data
                                </button>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table id="site" class="table table-striped table-bordered" style="width:100%">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0 align-middle" rowspan="2">No</th>
                                                <th class="border-0 align-middle" rowspan="2">Nama Barang</th>
                                                <th class="border-0 align-middle" rowspan="2">Sumber</th>
                                                <th class="border-0 align-middle" rowspan="2">Jumlah Barang</th>
                                                <th class="border-0 text-center" colspan="3">Kondisi</th>
                                                <th class="border-0 align-middle" rowspan="2">Keterangan</th>
                                            </tr>
                                            <tr class="border-0">
                                                <th class="border-0">BB</th>
                                                <th class="border-0">RR</th>
                                                <th class="border-0">RB</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($site as $sites)
                                            <tr>
                                                <td>{{$sites->id}}</td>
                                                <td>{{$sites->nama_barang}}</td>
                                                <td>{{$sites->sumber}} </td>
                                                <td>{{$sites->jml_barang}}</td>
                                                <td>{{$sites->kondisi_bb}}</td>
                                                <td>{{$sites->kondisi_rr}}</td>
                                                <td>{{$sites->kondisi_rb}}</td>
                                                <td>{{$sites->keterangan}}</td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td>1</td>
                                                <td>Motorola 420</td>
                                                <td>Pemasukan Ini</td>
                                                <td>6</td>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                                <td>-</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="m-0">Data Alkom</h5>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataAlkom">
                                    Tambah Data
                                </button>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table id="alkom" class="table table-striped table-bordered" style="width:100%">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0 align-middle" rowspan="2">No</th>
                                                <th class="border-0 align-middle" rowspan="2">Nama Barang</th>
                                                <th class="border-0 align-middle" rowspan="2">Sumber</th>
                                                <th class="border-0 align-middle" rowspan="2">Jumlah Barang</th>
                                                <th class="border-0 text-center" colspan="3">Kondisi</th>
                                                <th class="border-0 align-middle" rowspan="2">Keterangan</th>
                                            </tr>
                                            <tr class="border-0">
                                                <th class="border-0">BB</th>
                                                <th class="border-0">RR</th>
                                                <th class="border-0">RB</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($alkom as $alkoms)
                                            <tr>
                                                <td>{{$alkoms->id}}</td>
                                                <td>{{$alkoms->nama_barang}}</td>
                                                <td>{{$alkoms->sumber}} </td>
                                                <td>{{$alkoms->jml_barang}}</td>
                                                <td>{{$alkoms->kondisi_bb}}</td>
                                                <td>{{$alkoms->kondisi_rr}}</td>
                                                <td>{{$alkoms->kondisi_rb}}</td>
                                                <td>{{$alkoms->keterangan}}</td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td>1</td>
                                                <td>Motorola 420</td>
                                                <td>Pemasukan Ini</td>
                                                <td>6</td>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                                <td>-</td>
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
        $('#site').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#alkom').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>

@endsection