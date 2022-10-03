@extends('layout/sidebar-admin')

@section('title', 'Data JarKomDat')

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
                                    <li class="breadcrumb-item active" aria-current="page">Data JarKomDat</li>
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

                <!-- Modal Indihome -->
                <div class="modal fade" id="dataIndihome" tabindex="-1" role="dialog" aria-labelledby="titleIndihome" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="titleIndihome">Tambah Data Indihome</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                {!! Form::open(['route' => 'dat.regis', 'method' => 'POST']) !!}
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                <div class='form-group'>
                                    {{ Form::label('nama_barang','Nama Barang') }}
                                    {{ Form::text('nama_barang','',['required', 'class'=>'form-control','placeholder'=>'Nama Barang']) }}
                                </div>
                                <div class="form-group">
                                    <input id="id_polres" value='{{Auth::user()->username}}' type="text" name="id_polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                </div>
                                <div class="form-group ">
                                    <label for="jenis_barang">Jenis Barang</label>
                                    <input id="jenis_barang" value="indihome" required type="text" name="jenis_barang" data-parsley-trigger="change" required placeholder="Indihome" autocomplete="off" class="form-control form-control-lg" readonly>
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('sumber','Sumber') }}
                                    <select name="sumber" required class="form-control" id="sumber">
                                        <option hidden>Pilih Sumber</option>
                                        <option value="pengadaan">Pengadaan</option>
                                        <option value="hibah">Hibah</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <label>Kondisi</label>
                                <div class="row form-group pt-0">
                                    <div class='col'>
                                        <div class="input-group">
                                            {{ Form::number('kondisi_bb','',['class'=>'form-control form-control-lg qty1','placeholder'=>'Masukkan Jumlah','required']) }}
                                            <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                        </div>
                                    </div>
                                    <div class='col'>
                                        <div class="input-group">
                                            {{ Form::number('kondisi_rr','',['class'=>'form-control form-control-lg qty1','placeholder'=>'Masukkan Jumlah','required']) }}
                                            <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                        </div>
                                    </div>
                                    <div class='col'>
                                        <div class="input-group">
                                            {{ Form::number('kondisi_rb','',['class'=>'form-control form-control-lg qty1','placeholder'=>'Masukkan Jumlah','required']) }}
                                            <div class="input-group-append"><span class="input-group-text">RB</span></div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class='form-group'>
                                    {{ Form::label('jml_barang','Jumlah Barang') }}
                                    {{ Form::text('jml_barang','',['class'=>'form-control total1', 'readonly']) }}
                                </div> --}}
                                <div class='form-group'>
                                    {{ Form::label('keterangan','Keterangan') }}
                                    {{ Form::text('keterangan','',['class'=>'form-control form-control-lg','placeholder'=>'Keterangan']) }}
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                {{ Form::submit('Simpan',['class'=>'btn btn-primary']) }}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

                <!-- Modal Telepon -->
                <div class="modal fade" id="dataTelepon" tabindex="-1" role="dialog" aria-labelledby="titleTelepon" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="titleTelepon">Tambah Data Telepon</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(['route' => 'dat.regis', 'method' => 'POST']) !!}
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                <div class='form-group'>
                                    {{ Form::label('nama_barang','Nama Barang') }}
                                    {{ Form::text('nama_barang','',['required', 'class'=>'form-control','placeholder'=>'Nama Barang']) }}
                                </div>
                                <div class="form-group">
                                    <input id="id_polres" value='{{Auth::user()->username}}' type="text" name="id_polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                </div>
                                <div class="form-group ">
                                    <label for="jenis_barang">Jenis Barang</label>
                                    <input id="jenis_barang" value="telepon" required type="text" name="jenis_barang" data-parsley-trigger="change" required placeholder="Telepon" autocomplete="off" class="form-control form-control-lg" readonly>
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('sumber','Sumber') }}
                                    <select name="sumber" required class="form-control" id="sumber">
                                        <option hidden>Pilih Sumber</option>
                                        <option value="pengadaan">Pengadaan</option>
                                        <option value="hibah">Hibah</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <label>Kondisi</label>
                                <div class="row form-group pt-0">
                                    <div class='col'>
                                        <div class="input-group">
                                            {{ Form::number('kondisi_bb','',['required','class'=>'form-control form-control-lg qty2','placeholder'=>'Masukkan Jumlah','required']) }}
                                            <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                        </div>
                                    </div>
                                    <div class='col'>
                                        <div class="input-group">
                                            {{ Form::number('kondisi_rr','',['required','class'=>'form-control form-control-lg qty2','placeholder'=>'Masukkan Jumlah','required']) }}
                                            <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                        </div>
                                    </div>
                                    <div class='col'>
                                        <div class="input-group">
                                            {{ Form::number('kondisi_rb','',['required','class'=>'form-control form-control-lg qty2','placeholder'=>'Masukkan Jumlah','required']) }}
                                            <div class="input-group-append"><span class="input-group-text">RB</span></div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class='form-group'>
                                    {{ Form::label('jml_barang','Jumlah Barang') }}
                                    {{ Form::text('jml_barang','',['class'=>'form-control total2', 'readonly']) }}
                                </div> --}}
                                <div class='form-group'>
                                    {{ Form::label('keterangan','Keterangan') }}
                                    {{ Form::text('keterangan','',['class'=>'form-control form-control-lg','placeholder'=>'Keterangan']) }}
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                {{ Form::submit('Simpan',['class'=>'btn btn-primary']) }}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

                <!-- Modal Intranet -->
                <div class="modal fade" id="dataIntranet" tabindex="-1" role="dialog" aria-labelledby="titleIntranet" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="titleIntranet">Tambah Data Intranet</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(['route' => 'dat.regis', 'method' => 'POST']) !!}
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                <div class='form-group'>
                                    {{ Form::label('nama_barang','Nama Barang') }}
                                    {{ Form::text('nama_barang','',['required', 'class'=>'form-control','placeholder'=>'Nama Barang']) }}
                                </div>
                                <div class="form-group">
                                    <input id="id_polres" value='{{Auth::user()->username}}' type="text" name="id_polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                </div>
                                <div class="form-group ">
                                    <label for="jenis_barang">Jenis Barang</label>
                                    <input id="jenis_barang" value="intranet" required type="text" name="jenis_barang" data-parsley-trigger="change" required placeholder="Intranet" autocomplete="off" class="form-control form-control-lg" readonly>
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('sumber','Sumber') }}
                                    <select name="sumber" required class="form-control" id="sumber">
                                        <option hidden>Pilih Sumber</option>
                                        <option value="pengadaan">Pengadaan</option>
                                        <option value="hibah">Hibah</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <label>Kondisi</label>
                                <div class="row form-group pt-0">
                                    <div class='col'>
                                        <div class="input-group">
                                            {{ Form::number('kondisi_bb','',['class'=>'form-control form-control-lg qty3','placeholder'=>'Masukkan Jumlah','required']) }}
                                            <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                        </div>
                                    </div>
                                    <div class='col'>
                                        <div class="input-group">
                                            {{ Form::number('kondisi_rr','',['class'=>'form-control form-control-lg qty3','placeholder'=>'Masukkan Jumlah','required']) }}
                                            <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                        </div>
                                    </div>
                                    <div class='col'>
                                        <div class="input-group">
                                            {{ Form::number('kondisi_rb','',['class'=>'form-control form-control-lg qty3','placeholder'=>'Masukkan Jumlah','required']) }}
                                            <div class="input-group-append"><span class="input-group-text">RB</span></div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class='form-group'>
                                    {{ Form::label('jml_barang','Jumlah Barang') }}
                                    {{ Form::text('jml_barang','',['class'=>'form-control total3', 'readonly']) }}
                                </div> --}}
                                <div class='form-group'>
                                    {{ Form::label('keterangan','Keterangan') }}
                                    {{ Form::text('keterangan','',['class'=>'form-control form-control-lg','placeholder'=>'Keterangan']) }}
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

                <!-- Modal Wifi Id -->
                <div class="modal fade" id="dataWifiId" tabindex="-1" role="dialog" aria-labelledby="titleWifiId" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="titleWifiId">Tambah Data Wifi Id</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(['route' => 'dat.regis', 'method' => 'POST']) !!}
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                <div class='form-group'>
                                    {{ Form::label('nama_barang','Nama Barang') }}
                                    {{ Form::text('nama_barang','',['required', 'class'=>'form-control','placeholder'=>'Nama Barang']) }}
                                </div>
                                <div class="form-group">
                                    <input id="id_polres" value='{{Auth::user()->username}}' type="text" name="id_polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                </div>
                                <div class="form-group ">
                                    <label for="jenis_barang">Jenis Barang</label>
                                    <input id="jenis_barang" value="wifiid" required type="text" name="jenis_barang" data-parsley-trigger="change" required placeholder="Wifi Id" autocomplete="off" class="form-control form-control-lg" readonly>
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('sumber','Sumber') }}
                                    <select name="sumber" required class="form-control" id="sumber">
                                        <option hidden>Pilih Sumber</option>
                                        <option value="pengadaan">Pengadaan</option>
                                        <option value="hibah">Hibah</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <label>Kondisi</label>
                                <div class="row form-group pt-0">
                                    <div class='col'>
                                        <div class="input-group">
                                            {{ Form::number('kondisi_bb','',['class'=>'form-control form-control-lg qty4','placeholder'=>'Masukkan Jumlah','required']) }}
                                            <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                        </div>
                                    </div>
                                    <div class='col'>
                                        <div class="input-group">
                                            {{ Form::number('kondisi_rr','',['class'=>'form-control form-control-lg qty4','placeholder'=>'Masukkan Jumlah','required']) }}
                                            <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                        </div>
                                    </div>
                                    <div class='col'>
                                        <div class="input-group">
                                            {{ Form::number('kondisi_rb','',['class'=>'form-control form-control-lg qty4','placeholder'=>'Masukkan Jumlah','required']) }}
                                            <div class="input-group-append"><span class="input-group-text">RB</span></div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class='form-group'>
                                    {{ Form::label('jml_barang','Jumlah Barang') }}
                                    {{ Form::text('jml_barang','',['class'=>'form-control total4', 'readonly']) }}
                                </div> --}}
                                <div class='form-group'>
                                    {{ Form::label('keterangan','Keterangan') }}
                                    {{ Form::text('keterangan','',['class'=>'form-control form-control-lg','placeholder'=>'Keterangan']) }}
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

                <!-- Modal Astinet -->
                <div class="modal fade" id="dataAstinet" tabindex="-1" role="dialog" aria-labelledby="titleAstinet" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="titleAstinet">Tambah Data Astinet</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(['route' => 'dat.regis', 'method' => 'POST']) !!}
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                <div class='form-group'>
                                    {{ Form::label('nama_barang','Nama Barang') }}
                                    {{ Form::text('nama_barang','',['required', 'class'=>'form-control','placeholder'=>'Nama Barang']) }}
                                </div>
                                <div class="form-group">
                                    <input id="id_polres" value='{{Auth::user()->username}}' type="text" name="id_polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                </div>
                                <div class="form-group ">
                                    <label for="jenis_barang">Jenis Barang</label>
                                    <input id="jenis_barang" value="astinet" required type="text" name="jenis_barang" data-parsley-trigger="change" required placeholder="Astinet" autocomplete="off" class="form-control form-control-lg" readonly>
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('sumber','Sumber') }}
                                    <select name="sumber" required class="form-control" id="sumber">
                                        <option hidden>Pilih Sumber</option>
                                        <option value="pengadaan">Pengadaan</option>
                                        <option value="hibah">Hibah</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <label>Kondisi</label>
                                <div class="row form-group pt-0">
                                    <div class='col'>
                                        <div class="input-group">
                                            {{ Form::number('kondisi_bb','',['class'=>'form-control form-control-lg qty5','placeholder'=>'Masukkan Jumlah','required']) }}
                                            <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                        </div>
                                    </div>
                                    <div class='col'>
                                        <div class="input-group">
                                            {{ Form::number('kondisi_rr','',['class'=>'form-control form-control-lg qty5','placeholder'=>'Masukkan Jumlah','required']) }}
                                            <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                        </div>
                                    </div>
                                    <div class='col'>
                                        <div class="input-group">
                                            {{ Form::number('kondisi_rb','',['class'=>'form-control form-control-lg qty5','placeholder'=>'Masukkan Jumlah','required']) }}
                                            <div class="input-group-append"><span class="input-group-text">RB</span></div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class='form-group'>
                                    {{ Form::label('jml_barang','Jumlah Barang') }}
                                    {{ Form::text('jml_barang','',['class'=>'form-control total5', 'readonly']) }}
                                </div> --}}
                                <div class='form-group'>
                                    {{ Form::label('keterangan','Keterangan') }}
                                    {{ Form::text('keterangan','',['class'=>'form-control form-control-lg','placeholder'=>'Keterangan']) }}
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                {{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
                            </div>
                            {!! Form::close() !!}
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
                                <h5 class="m-0">Data Indihome</h5>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataIndihome">
                                    Tambah Data
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="indihome" class="table table-striped table-bordered" style="width:100%">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0 align-middle" rowspan="2">No</th>
                                                <th class="border-0 align-middle" rowspan="2">Nama Barang</th>
                                                <th class="border-0 align-middle" rowspan="2">Sumber</th>
                                                <th class="border-0 align-middle" rowspan="2">Jumlah Barang</th>
                                                <th class="border-0 text-center" colspan="3">Kondisi</th>
                                                <th class="border-0 align-middle" rowspan="2">Keterangan</th>
                                                <th class="border-0 align-middle" rowspan="2">Action</th>
                                            </tr>
                                            <tr class="border-0">
                                                <th class="border-0">BB</th>
                                                <th class="border-0">RR</th>
                                                <th class="border-0">RB</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $a=1;
                                            @endphp
                                            @foreach ($indi as $inhome)
                                            @if (Auth::user()->username === $inhome->id_polres)
                                            <tr>
                                                <td>{{$a++}}</td>
                                                <td>{{$inhome->nama_barang}}</td>
                                                <td>{{$inhome->sumber}} </td>
                                                <td>{{$inhome->jml_barang}}</td>
                                                <td>{{$inhome->kondisi_bb}}</td>
                                                <td>{{$inhome->kondisi_rr}}</td>
                                                <td>{{$inhome->kondisi_rb}}</td>
                                                <td>{{$inhome->keterangan}}</td>
                                                <td class="d-flex">
                                                    <form class="mb-0 mr-2"method="POST" action="{{ route('barang.delete', [$inhome->id]) }}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-rounded btn-danger">Delete</button>
                                                    </form>
                                                    <button data-toggle="modal" data-target="#editBarang{{$inhome->id}}" class="btn btn-rounded btn-brand">Edit</button>
                                                    <!-- Modal Edit -->
                                                </td>
                                                <div class="modal fade" id="editBarang{{$inhome->id}}" tabindex="-1" role="dialog" aria-labelledby="titleBarang" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="titleBarang">Edit Data Barang</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                {!! Form::open(['route' => ['barang.edit',$inhome->id], 'method' => 'PUT']) !!}
                                                                {{ csrf_field() }}
                                                                {{ method_field('PUT') }}
                                                                <div class='form-group'>
                                                                    {{ Form::label('nama_barang','Nama Barang') }}
                                                                    {{ Form::text('nama_barang',$inhome->nama_barang,['required','class'=>'form-control']) }}
                                                                </div>
                                                                <div class="form-group">
                                                                    <input id="id_polres" value='{{Auth::user()->username}}' type="text" name="id_polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label for="jenis_barang">Jenis Barang</label>
                                                                    <input id="jenis_barang" value="{{$inhome->jenis_barang}}" required type="text" name="jenis_barang" data-parsley-trigger="change" required placeholder="Site" autocomplete="off" class="form-control form-control-lg" readonly>
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('sumber','Sumber') }}
                                                                    {{ Form::text('sumber',$inhome->sumber,['required','class'=>'form-control']) }}
                                                                </div>
                                                                <label>Kondisi</label>
                                                                <div class="row form-group pt-0">
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_bb',$inhome->kondisi_bb,['required','class'=>'form-control form-control-lg qty1']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_rr',$inhome->kondisi_rr,['required','class'=>'form-control form-control-lg qty1']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_rb',$inhome->kondisi_rb,['required','class'=>'form-control form-control-lg qty1']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">RB</span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- <div class='form-group'>
                                                                    {{ Form::label('jml_barang','Jumlah Barang') }}
                                                                    {{ Form::text('jml_barang','',['class'=>'form-control total1', 'readonly']) }}
                                                                </div> --}}
                                                                <div class='form-group'>
                                                                    {{ Form::label('keterangan','Keterangan') }}
                                                                    {{ Form::text('keterangan',$inhome->keterangan,['class'=>'form-control form-control-lg']) }}
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                {{ Form::submit('Simpan',['class'=>'btn btn-primary']) }}
                                                            </div>
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="m-0">Data Telepon</h5>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataTelepon">
                                    Tambah Data
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="telepon" class="table table-striped table-bordered" style="width:100%">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0 align-middle" rowspan="2">No</th>
                                                <th class="border-0 align-middle" rowspan="2">Nama Barang</th>
                                                <th class="border-0 align-middle" rowspan="2">Sumber</th>
                                                <th class="border-0 align-middle" rowspan="2">Jumlah Barang</th>
                                                <th class="border-0 text-center" colspan="3">Kondisi</th>
                                                <th class="border-0 align-middle" rowspan="2">Keterangan</th>
                                                <th class="border-0 align-middle" rowspan="2">Action</th>
                                            </tr>
                                            <tr class="border-0">
                                                <th class="border-0">BB</th>
                                                <th class="border-0">RR</th>
                                                <th class="border-0">RB</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $b=1;
                                            @endphp
                                            @foreach ($telp as $telpon)
                                            @if (Auth::user()->username === $telpon->id_polres)
                                            <tr>
                                                <td>{{$b++}}</td>
                                                <td>{{$telpon->nama_barang}}</td>
                                                <td>{{$telpon->sumber}} </td>
                                                <td>{{$telpon->jml_barang}}</td>
                                                <td>{{$telpon->kondisi_bb}}</td>
                                                <td>{{$telpon->kondisi_rr}}</td>
                                                <td>{{$telpon->kondisi_rb}}</td>
                                                <td>{{$telpon->keterangan}}</td>
                                                <td class="d-flex">
                                                    <form class="mb-0 mr-2" method="POST" action="{{ route('barang.delete', [$telpon->id]) }}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-rounded btn-danger">Delete</button>
                                                    </form>
                                                    <button data-toggle="modal" data-target="#editBarang{{$telpon->id}}" class="btn btn-rounded btn-brand">Edit</button>
                                                    <!-- Modal Edit -->
                                                </td>
                                                <div class="modal fade" id="editBarang{{$telpon->id}}" tabindex="-1" role="dialog" aria-labelledby="titleBarang" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="titleBarang">Edit Data Barang</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                {!! Form::open(['route' => ['barang.edit',$telpon->id], 'method' => 'PUT']) !!}
                                                                {{ csrf_field() }}
                                                                {{ method_field('PUT') }}
                                                                <div class='form-group'>
                                                                    {{ Form::label('nama_barang','Nama Barang') }}
                                                                    {{ Form::text('nama_barang',$telpon->nama_barang,['required','class'=>'form-control']) }}
                                                                </div>
                                                                <div class="form-group">
                                                                    <input id="id_polres" value='{{Auth::user()->username}}' type="text" name="id_polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label for="jenis_barang">Jenis Barang</label>
                                                                    <input id="jenis_barang" value="{{$telpon->jenis_barang}}" required type="text" name="jenis_barang" data-parsley-trigger="change" required placeholder="Site" autocomplete="off" class="form-control form-control-lg" readonly>
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('sumber','Sumber') }}
                                                                    {{ Form::text('sumber',$telpon->sumber,['required','class'=>'form-control']) }}
                                                                </div>
                                                                <label>Kondisi</label>
                                                                <div class="row form-group pt-0">
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_bb',$telpon->kondisi_bb,['required','class'=>'form-control form-control-lg qty2']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_rr',$telpon->kondisi_rr,['required','class'=>'form-control form-control-lg qty2']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_rb',$telpon->kondisi_rb,['required','class'=>'form-control form-control-lg qty2']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">RB</span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- <div class='form-group'>
                                                                    {{ Form::label('jml_barang','Jumlah Barang') }}
                                                                    {{ Form::text('jml_barang','',['class'=>'form-control total2','readonly']) }}
                                                                </div> --}}
                                                                <div class='form-group'>
                                                                    {{ Form::label('keterangan','Keterangan') }}
                                                                    {{ Form::text('keterangan',$telpon->keterangan,['class'=>'form-control form-control-lg']) }}
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                {{ Form::submit('Simpan',['class'=>'btn btn-primary']) }}
                                                            </div>
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="m-0">Data Intranet</h5>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataIntranet">
                                    Tambah Data
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="intranet" class="table table-striped table-bordered" style="width:100%">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0 align-middle" rowspan="2">No</th>
                                                <th class="border-0 align-middle" rowspan="2">Nama Barang</th>
                                                <th class="border-0 align-middle" rowspan="2">Sumber</th>
                                                <th class="border-0 align-middle" rowspan="2">Jumlah Barang</th>
                                                <th class="border-0 text-center" colspan="3">Kondisi</th>
                                                <th class="border-0 align-middle" rowspan="2">Keterangan</th>
                                                <th class="border-0 align-middle" rowspan="2">Action</th>
                                            </tr>
                                            <tr class="border-0">
                                                <th class="border-0">BB</th>
                                                <th class="border-0">RR</th>
                                                <th class="border-0">RB</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $c=1;
                                            @endphp
                                            @foreach ($intranet as $intran)
                                            @if (Auth::user()->username === $intran->id_polres)
                                            <tr>
                                                <td>{{$c++}}</td>
                                                <td>{{$intran->nama_barang}}</td>
                                                <td>{{$intran->sumber}} </td>
                                                <td>{{$intran->jml_barang}}</td>
                                                <td>{{$intran->kondisi_bb}}</td>
                                                <td>{{$intran->kondisi_rr}}</td>
                                                <td>{{$intran->kondisi_rb}}</td>
                                                <td>{{$intran->keterangan}}</td>
                                                <td class="d-flex">
                                                    <form class="mb-0 mr-2" method="POST" action="{{ route('barang.delete', [$intran->id]) }}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-rounded btn-danger">Delete</button>
                                                    </form>
                                                    <button data-toggle="modal" data-target="#editBarang{{$intran->id}}" class="btn btn-rounded btn-brand">Edit</button>
                                                    <!-- Modal Edit -->
                                                </td>
                                                <div class="modal fade" id="editBarang{{$intran->id}}" tabindex="-1" role="dialog" aria-labelledby="titleBarang" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="titleBarang">Edit Data Barang</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                {!! Form::open(['route' => ['barang.edit',$intran->id], 'method' => 'PUT']) !!}
                                                                {{ csrf_field() }}
                                                                {{ method_field('PUT') }}
                                                                <div class='form-group'>
                                                                    {{ Form::label('nama_barang','Nama Barang') }}
                                                                    {{ Form::text('nama_barang',$intran->nama_barang,['required','class'=>'form-control']) }}
                                                                </div>
                                                                <div class="form-group">
                                                                    <input id="id_polres" value='{{Auth::user()->username}}' type="text" name="id_polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label for="jenis_barang">Jenis Barang</label>
                                                                    <input id="jenis_barang" value="{{$intran->jenis_barang}}" required type="text" name="jenis_barang" data-parsley-trigger="change" required placeholder="Site" autocomplete="off" class="form-control form-control-lg" readonly>
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('sumber','Sumber') }}
                                                                    {{ Form::text('sumber',$intran->sumber,['required','class'=>'form-control']) }}
                                                                </div>
                                                                <label>Kondisi</label>
                                                                <div class="row form-group pt-0">
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_bb',$intran->kondisi_bb,['required','class'=>'form-control form-control-lg qty3']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_rr',$intran->kondisi_rr,['required','class'=>'form-control form-control-lg qty3']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_rb',$intran->kondisi_rb,['required','class'=>'form-control form-control-lg qty3']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">RB</span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- <div class='form-group'>
                                                                    {{ Form::label('jml_barang','Jumlah Barang') }}
                                                                    {{ Form::text('jml_barang','',['class'=>'form-control total3', 'readonly']) }}
                                                                </div> --}}
                                                                <div class='form-group'>
                                                                    {{ Form::label('keterangan','Keterangan') }}
                                                                    {{ Form::text('keterangan',$intran->keterangan,['required','class'=>'form-control form-control-lg']) }}
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                {{ Form::submit('Simpan',['class'=>'btn btn-primary']) }}
                                                            </div>
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="m-0">Data Wifi Id</h5>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataWifiId">
                                    Tambah Data
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="wifiid" class="table table-striped table-bordered" style="width:100%">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0 align-middle" rowspan="2">No</th>
                                                <th class="border-0 align-middle" rowspan="2">Nama Barang</th>
                                                <th class="border-0 align-middle" rowspan="2">Sumber</th>
                                                <th class="border-0 align-middle" rowspan="2">Jumlah Barang</th>
                                                <th class="border-0 text-center" colspan="3">Kondisi</th>
                                                <th class="border-0 align-middle" rowspan="2">Keterangan</th>
                                                <th class="border-0 align-middle" rowspan="2">Action</th>
                                            </tr>
                                            <tr class="border-0">
                                                <th class="border-0">BB</th>
                                                <th class="border-0">RR</th>
                                                <th class="border-0">RB</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $d=1;
                                            @endphp
                                            @foreach ($wifi as $wifii)
                                            @if (Auth::user()->username === $wifii->id_polres)
                                            <tr>
                                                <td>{{$d++}}</td>
                                                <td>{{$wifii->nama_barang}}</td>
                                                <td>{{$wifii->sumber}} </td>
                                                <td>{{$wifii->jml_barang}}</td>
                                                <td>{{$wifii->kondisi_bb}}</td>
                                                <td>{{$wifii->kondisi_rr}}</td>
                                                <td>{{$wifii->kondisi_rb}}</td>
                                                <td>{{$wifii->keterangan}}</td>
                                                <td class="d-flex">
                                                    <form class="mb-0 mr-2" method="POST" action="{{ route('barang.delete', [$wifii->id]) }}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-rounded btn-danger">Delete</button>
                                                    </form>
                                                    <button data-toggle="modal" data-target="#editBarang{{$wifii->id}}" class="btn btn-rounded btn-brand">Edit</button>
                                                    <!-- Modal Edit -->
                                                </td>
                                                <div class="modal fade" id="editBarang{{$wifii->id}}" tabindex="-1" role="dialog" aria-labelledby="titleBarang" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="titleBarang">Edit Data Barang</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                {!! Form::open(['route' => ['barang.edit',$wifii->id], 'method' => 'PUT']) !!}
                                                                {{ csrf_field() }}
                                                                {{ method_field('PUT') }}
                                                                <div class='form-group'>
                                                                    {{ Form::label('nama_barang','Nama Barang') }}
                                                                    {{ Form::text('nama_barang',$wifii->nama_barang,['required','class'=>'form-control']) }}
                                                                </div>
                                                                <div class="form-group">
                                                                    <input id="id_polres" value='{{Auth::user()->username}}' type="text" name="id_polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label for="jenis_barang">Jenis Barang</label>
                                                                    <input id="jenis_barang" value="{{$wifii->jenis_barang}}" required type="text" name="jenis_barang" data-parsley-trigger="change" required placeholder="Site" autocomplete="off" class="form-control form-control-lg" readonly>
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('sumber','Sumber') }}
                                                                    {{ Form::text('sumber',$wifii->sumber,['required','class'=>'form-control']) }}
                                                                </div>
                                                                <label>Kondisi</label>
                                                                <div class="row form-group pt-0">
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_bb',$wifii->kondisi_bb,['required','class'=>'form-control form-control-lg qty4']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_rr',$wifii->kondisi_rr,['required','class'=>'form-control form-control-lg qty4']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_rb',$wifii->kondisi_rb,['required','class'=>'form-control form-control-lg qty4']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">RB</span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- <div class='form-group'>
                                                                    {{ Form::label('jml_barang','Jumlah Barang') }}
                                                                    {{ Form::text('jml_barang','',['class'=>'form-control total4', 'readonly']) }}
                                                                </div> --}}
                                                                <div class='form-group'>
                                                                    {{ Form::label('keterangan','Keterangan') }}
                                                                    {{ Form::text('keterangan',$wifii->keterangan,['required','class'=>'form-control form-control-lg']) }}
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                {{ Form::submit('Simpan',['class'=>'btn btn-primary']) }}
                                                            </div>
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="m-0">Data Astinet</h5>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataAstinet">
                                    Tambah Data
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="astinet" class="table table-striped table-bordered" style="width:100%">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0 align-middle" rowspan="2">No</th>
                                                <th class="border-0 align-middle" rowspan="2">Nama Barang</th>
                                                <th class="border-0 align-middle" rowspan="2">Sumber</th>
                                                <th class="border-0 align-middle" rowspan="2">Jumlah Barang</th>
                                                <th class="border-0 text-center" colspan="3">Kondisi</th>
                                                <th class="border-0 align-middle" rowspan="2">Keterangan</th>
                                                <th class="border-0 align-middle" rowspan="2">Action</th>
                                            </tr>
                                            <tr class="border-0">
                                                <th class="border-0">BB</th>
                                                <th class="border-0">RR</th>
                                                <th class="border-0">RB</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $e=1;
                                            @endphp
                                            @foreach ($asti as $astin)
                                            @if (Auth::user()->username === $astin->id_polres)
                                            <tr>
                                                <td>{{$e++}}</td>
                                                <td>{{$astin->nama_barang}}</td>
                                                <td>{{$astin->sumber}} </td>
                                                <td>{{$astin->jml_barang}}</td>
                                                <td>{{$astin->kondisi_bb}}</td>
                                                <td>{{$astin->kondisi_rr}}</td>
                                                <td>{{$astin->kondisi_rb}}</td>
                                                <td>{{$astin->keterangan}}</td>
                                                <td class="d-flex">
                                                    <form class="mb-0 mr-2" method="POST" action="{{ route('barang.delete', [$astin->id]) }}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-rounded btn-danger">Delete</button>
                                                    </form>
                                                    <button data-toggle="modal" data-target="#editBarang{{$astin->id}}" class="btn btn-rounded btn-brand">Edit</button>
                                                    <!-- Modal Edit -->
                                                </td>
                                                <div class="modal fade" id="editBarang{{$astin->id}}" tabindex="-1" role="dialog" aria-labelledby="titleBarang" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="titleBarang">Edit Data Barang</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                {!! Form::open(['route' => ['barang.edit',$astin->id], 'method' => 'PUT']) !!}
                                                                {{ csrf_field() }}
                                                                {{ method_field('PUT') }}
                                                                <div class='form-group'>
                                                                    {{ Form::label('nama_barang','Nama Barang') }}
                                                                    {{ Form::text('nama_barang',$astin->nama_barang,['required','class'=>'form-control']) }}
                                                                </div>
                                                                <div class="form-group">
                                                                    <input id="id_polres" value='{{Auth::user()->username}}' type="text" name="id_polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label for="jenis_barang">Jenis Barang</label>
                                                                    <input id="jenis_barang" value="{{$astin->jenis_barang}}" required type="text" name="jenis_barang" data-parsley-trigger="change" required placeholder="Site" autocomplete="off" class="form-control form-control-lg" readonly>
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('sumber','Sumber') }}
                                                                    {{ Form::text('sumber',$astin->sumber,['required','class'=>'form-control']) }}
                                                                </div>
                                                                <label>Kondisi</label>
                                                                <div class="row form-group pt-0">
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_bb',$astin->kondisi_bb,['required','class'=>'form-control form-control-lg qty5']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_rr',$astin->kondisi_rr,['required','class'=>'form-control form-control-lg qty5']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_rb',$astin->kondisi_rb,['required','class'=>'form-control form-control-lg qty5']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">RB</span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- <div class='form-group'>
                                                                    {{ Form::label('jml_barang','Jumlah Barang') }}
                                                                    {{ Form::text('jml_barang','',['class'=>'form-control total5', 'readonly']) }}
                                                                </div> --}}
                                                                <div class='form-group'>
                                                                    {{ Form::label('keterangan','Keterangan') }}
                                                                    {{ Form::text('keterangan',$astin->keterangan,['class'=>'form-control form-control-lg']) }}
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                {{ Form::submit('Simpan',['class'=>'btn btn-primary']) }}
                                                            </div>
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>
                                            @endif
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
        $('#indihome').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#telepon').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#intranet').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#wifiid').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#astinet').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>

<script>
    $(document).on("change", ".qty1", function() {
        var sum = 0;
        $(".qty1").each(function(){
            sum += +$(this).val();
        });
        $(".total1").val(sum);
    });
</script>
<script>
    $(document).on("change", ".qty2", function() {
        var sum = 0;
        $(".qty2").each(function(){
            sum += +$(this).val();
        });
        $(".total2").val(sum);
    });
</script>
<script>
    $(document).on("change", ".qty3", function() {
        var sum = 0;
        $(".qty3").each(function(){
            sum += +$(this).val();
        });
        $(".total3").val(sum);
    });
</script>
<script>
    $(document).on("change", ".qty4", function() {
        var sum = 0;
        $(".qty4").each(function(){
            sum += +$(this).val();
        });
        $(".total4").val(sum);
    });
</script>
<script>
    $(document).on("change", ".qty5", function() {
        var sum = 0;
        $(".qty5").each(function(){
            sum += +$(this).val();
        });
        $(".total5").val(sum);
    });
</script>

@endsection
