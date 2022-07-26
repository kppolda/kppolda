@extends('layout/sidebar-admin')

@section('title', 'Data Personil')

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
                                    <li class="breadcrumb-item active" aria-current="page">Data Personil</li>
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
                <div class="modal fade" id="dataPersonil" tabindex="-1" role="dialog" aria-labelledby="titlePersonil" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="titlePersonil">Tambah Data Personil</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(['route' => 'personil.regis', 'method' => 'POST']) !!}
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                <div class='form-group'>
                                    {{ Form::label('nama_personil','Nama') }}
                                    {{ Form::text('nama_personil','',['class'=>'form-control','placeholder'=>'Nama']) }}
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('nrp_personil','NRP') }}
                                    {{ Form::text('nrp_personil','',['class'=>'form-control','placeholder'=>'NRP']) }}
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('pangkat_personil','Pangkat') }}
                                    {{ Form::text('pangkat_personil','',['class'=>'form-control','placeholder'=>'Pangkat']) }}
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('jabatan_personil','Jabatan') }}
                                    {{ Form::text('jabatan_personil','',['class'=>'form-control','placeholder'=>'Jabatan']) }}
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('pendidikan_dikbang','Pendidikan Dikbang') }}
                                    {{ Form::text('pendidikan_dikbang','',['class'=>'form-control','placeholder'=>'Pendidikan Dikbang']) }}
                                </div>

                                {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
                                {!! Form::close() !!}
                                <!-- <form action="#" id="basicform" data-parsley-validate="">
                                    <div class="form-group ">
                                        <label for="namaPersonil">Nama Personil</label>
                                        <input id="namaPersonil" type="text" name="namaPersonil" data-parsley-trigger="change" required placeholder="Nama Personil" autocomplete="off" class="form-control form-control-lg">
                                    </div>
                                    <div class="form-group ">
                                        <label for="nrp">NRP</label>
                                        <input id="nrp" type="text" name="nrp" data-parsley-trigger="change" required placeholder="NRP" autocomplete="off" class="form-control form-control-lg">
                                    </div>
                                    <div class="form-group ">
                                        <label for="polres">Polres</label>
                                        <input id="polres" type="text" name="polres" data-parsley-trigger="change" required placeholder="Polres" autocomplete="off" class="form-control form-control-lg">
                                    </div>
                                    <div class="form-group ">
                                        <label for="pangkat">Pangkat</label>
                                        <input id="pangkat" type="text" name="pangkat" data-parsley-trigger="change" required placeholder="Pangkat" autocomplete="off" class="form-control form-control-lg">
                                    </div>
                                    <div class="form-group ">
                                        <label for="jabatan">Jabatan</label>
                                        <input id="jabatan" type="text" name="jabatan" data-parsley-trigger="change" required placeholder="Jabtan" autocomplete="off" class="form-control form-control-lg">
                                    </div>
                                    <div class="form-group ">
                                        <label for="dikum">Pendidikan Dikum</label>
                                        <input id="dikum" type="text" name="dikum" data-parsley-trigger="change" required placeholder="Pendidikan Dikum" autocomplete="off" class="form-control form-control-lg">
                                    </div>
                                    <div class="form-group ">
                                        <label for="dikbang">Pendidikan Dikbang</label>
                                        <input id="dikbang" type="text" name="dikbang" data-parsley-trigger="change" required placeholder="Pendidikan Dikbang" autocomplete="off" class="form-control form-control-lg">
                                    </div>
                                </form> -->
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
                                <h5 class="m-0">Data Personil</h5>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataPersonil">
                                    Tambah Data
                                </button>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table id="personil" class="table table-striped table-bordered" style="width:100%">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">No</th>
                                                <th class="border-0">Nama</th>
                                                <th class="border-0">NRP</th>
                                                <th class="border-0">Polres</th>
                                                <th class="border-0">Pangkat</th>
                                                <th class="border-0">Jabatan</th>
                                                <th class="border-0">Pendidikan Dikum</th>
                                                <th class="border-0">Pendidikan Dikbang</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($datas as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->nama_polres}}</td>
                                                <td>{{$item->username}} </td>
                                                <td>{{$item->email}}</td>
                                                <td>{{$item->password}}</td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td>1</td>
                                                <td>Samsul Guardian</td>
                                                <td>089569</td>
                                                <td>Kediri Kota</td>
                                                <td>Iptu</td>
                                                <td>Kanit Provos</td>
                                                <td>Noinfo</td>
                                                <td>Noinfo</td>
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
        $('#personil').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>

@endsection