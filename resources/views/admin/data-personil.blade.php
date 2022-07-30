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
                                    {{ Form::label('pendidikan_dikum','Pendidikan Dikum') }}
                                    {{ Form::text('pendidikan_dikum','',['class'=>'form-control','placeholder'=>'Pendidikan Dikum']) }}
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('pendidikan_dikbang','Pendidikan Dikbang') }}
                                    {{ Form::text('pendidikan_dikbang','',['class'=>'form-control','placeholder'=>'Pendidikan Dikbang']) }}
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
                                                <td>{{$item->nama_personil}}</td>
                                                <td>{{$item->nrp_personil}} </td>
                                                @if (isset($item->id_polres))
                                                <td>{{$item->id_polres}} </td>
                                                @else
                                                <td></td>
                                                @endif
                                                <td>{{$item->pangkat_personil}}</td>
                                                <td>{{$item->jabatan_personil}}</td>
                                                <td>{{$item->pendidikan_dikum}}</td>
                                                <td>{{$item->pendidikan_dikbang}}</td>
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
        $('#personil').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>

@endsection