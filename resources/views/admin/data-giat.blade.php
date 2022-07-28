@extends('layout/sidebar-admin')

@section('title', 'Data Daftar Giat')

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
                                    <li class="breadcrumb-item active" aria-current="page">Data Daftar Giat</li>
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
                <div class="modal fade" id="dataGiat" tabindex="-1" role="dialog" aria-labelledby="titleGiat" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="titleGiat">Tambah Data Giat</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(['route' => 'giat.tambah', 'method' => 'POST']) !!}
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                <div class='form-group'>
                                    {{ Form::label('nama','Nama Giat') }}
                                    {{ Form::text('nama','',['class'=>'form-control','placeholder'=>'Nama Giat']) }}
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('tanggal','Tanggal Giat') }}
                                    {{ Form::date('tanggal','',['class'=>'form-control','placeholder'=>'Tanggal Giat']) }}
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('keterangan','keterangan') }}
                                    {{ Form::text('keterangan','',['class'=>'form-control','placeholder'=>'keterangan']) }}
                                </div>
                                <div class="custom-file">
                                    {!! Form::file('file',['class'=>'form-control','placeholder'=>''])!!}
                                    <!-- <input type="file" class="custom-file-input" id="dokumentasi">
                                    <label class="custom-file-label" for="dokumentasi">Dokumentasi</label> -->
                                </div>

                                {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
                                {!! Form::close() !!}
                                {{-- <form action="#" id="basicform" data-parsley-validate="">
                            <div class="form-group ">
                                <label for="namaGiat">Nama Giat</label>
                                <input id="namaGiat" type="text" name="namaGiat" data-parsley-trigger="change" required placeholder="Nama Giat" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="tanggalGiat">Tanggal Giat</label>
                                <input id="tanggalGiat" type="date" name="tanggalGiat" data-parsley-trigger="change" required autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="keterangan">Keterangan</label>
                                <input id="keterangan" type="text" name="keterangan" data-parsley-trigger="change" required placeholder="Keterangan" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="dokumentasi">
                                <label class="custom-file-label" for="dokumentasi">Dokumentasi</label>
                            </div>
                        </form> --}}
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
                                <h5 class="m-0">Data Giat</h5>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataGiat">
                                    Tambah Data
                                </button>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table id="giat" class="table table-striped table-bordered" style="width:100%">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">No</th>
                                                <th class="border-0">Nama Giat</th>
                                                <th class="border-0">Tanggal Giat</th>
                                                <th class="border-0">Keterangan</th>
                                                <th class="border-0">Dokumentasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Pengecekan Tower Telkom</td>
                                                <td>12/7/2022</td>
                                                <td>-</td>
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
        $('#giat').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>

@endsection