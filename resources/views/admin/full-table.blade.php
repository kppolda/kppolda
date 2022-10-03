@extends('layout/sidebar-admin')

@section('title', 'Laporan Polres')

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
                                    <li class="breadcrumb-item"><a href="/data-polres" class="breadcrumb-link">Data Polres</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Laporan</li>
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

                <div class="row">
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->

                    <!-- recent orders  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h1 class="m-0">{{$polres[0]->nama_polres}}</h1>
                            <a href="/pdf/{{Request::segment(2)}}" type="button" class="btn btn-primary" target="_blank">
                                Export to PDF
                            </a>
                        </div>
                        <div class="card">
                            <h5 class="m-0 card-header">Data Personil</h5>
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
                                            @foreach ($personil as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$item->nama_personil}}</td>
                                                <td>{{$item->nrp_personil}} </td>
                                                @if (isset($item->polres))
                                                <td>{{$item->polres}} </td>
                                                @else
                                                <td></td>
                                                @endif
                                                @php
                                                    $message = preg_split('/[\s,]+/', $item->pangkat_personil, 3);
                                                @endphp
                                                <td>@foreach ($message as $mess)
                                                    @if ($loop->first) @continue @endif
                                                        {{$mess}}
                                                    @endforeach
                                                </td>
                                                <td>{{$item->jabatan_personil}}</td>
                                                <td>{{$item->pendidikan_dikum}}</td>
                                                <td>{{$item->pendidikan_dikbang}}</td>
                                                <td class="d-flex">
                                                    <form class="mb-0 mr-2" method="POST" action="{{ route('personil.deleteid', [$item->id]) }}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-rounded btn-danger">Delete</button>
                                                    </form>
                                                    <button data-toggle="modal" data-target="#editPersonil{{$item->id}}" class="btn btn-rounded btn-brand">Edit</button>

                                                </td>
                                                <div class="modal fade" id="editPersonil{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="titlePersonil" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="titlePersonil">Edit Data Personil</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                {!! Form::open(['route' => ['personil.editid',$item->id], 'method' => 'PUT']) !!}
                                                                {{ csrf_field() }}
                                                                {{ method_field('PUT') }}
                                                                <div class='form-group'>
                                                                    {{ Form::label('nama_personil','Nama') }}
                                                                    {{ Form::text('nama_personil',$item->nama_personil,['class'=>'form-control']) }}
                                                                </div>
                                                                <div class="form-group">
                                                                    <input id="polres" value='{{$item->polres}}' type="text" name="polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('nrp_personil','NRP') }}
                                                                    {{ Form::text('nrp_personil',$item->nrp_personil,['class'=>'form-control']) }}
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('pangkat_personil','Pangkat') }}
                                                                    {{ Form::text('pangkat_personil',$item->pangkat_personil,['class'=>'form-control']) }}
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('jabatan_personil','Jabatan') }}
                                                                    {{ Form::text('jabatan_personil',$item->jabatan_personil,['class'=>'form-control']) }}
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('pendidikan_dikum','Pendidikan Dikum') }}
                                                                    {{ Form::text('pendidikan_dikum',$item->pendidikan_dikum,['class'=>'form-control']) }}
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('pendidikan_dikbang','Pendidikan Dikbang') }}
                                                                    {{ Form::text('pendidikan_dikbang',$item->pendidikan_dikbang,['class'=>'form-control']) }}
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
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h5 class="card-header m-0">Data Site</h5>
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
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$sites->nama_barang}}</td>
                                                <td>{{$sites->sumber}} </td>
                                                <td>{{$sites->jml_barang}}</td>
                                                <td>{{$sites->kondisi_bb}}</td>
                                                <td>{{$sites->kondisi_rr}}</td>
                                                <td>{{$sites->kondisi_rb}}</td>
                                                <td>{{$sites->keterangan}}</td>
                                                <td class="d-flex">
                                                    <form class="mb-0 mr-2" method="POST" action="{{ route('barang.delete', [$sites->id]) }}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-rounded btn-danger">Delete</button>
                                                    </form>
                                                    <button data-toggle="modal" data-target="#editBarang{{$sites->id}}" class="btn btn-rounded btn-brand">Edit</button>
                                                    <!-- Modal Edit -->
                                                </td>
                                                <div class="modal fade" id="editBarang{{$sites->id}}" tabindex="-1" role="dialog" aria-labelledby="titleBarang" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="titleBarang">Edit Data Barang</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="modal-body">
                                                                    {!! Form::open(['route' => ['barang.edit',$sites->id], 'method' => 'PUT']) !!}
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('PUT') }}
                                                                    <div class='form-group'>
                                                                        {{ Form::label('nama_barang','Nama Barang') }}
                                                                        {{ Form::text('nama_barang',$sites->nama_barang,['class'=>'form-control']) }}
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input id="id_polres" value='{{$sites->id_polres}}' type="text" name="id_polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label for="jenis_barang">Jenis Barang</label>
                                                                        <input id="jenis_barang" value="{{$sites->jenis_barang}}" type="text" name="jenis_barang" data-parsley-trigger="change" required placeholder="Site" autocomplete="off" class="form-control form-control-lg" readonly>
                                                                    </div>
                                                                    <div class='form-group'>
                                                                        {{ Form::label('sumber','Sumber') }}
                                                                        {{ Form::text('sumber',$sites->sumber,['class'=>'form-control']) }}
                                                                    </div>
                                                                    <label>Kondisi</label>
                                                                    <div class="row form-group pt-0">
                                                                        <div class='col'>
                                                                            <div class="input-group">
                                                                                {{ Form::number('kondisi_bb',$sites->kondisi_bb,['class'=>'form-control form-control-lg qty1']) }}
                                                                                <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='col'>
                                                                            <div class="input-group">
                                                                                {{ Form::number('kondisi_rr',$sites->kondisi_rr,['class'=>'form-control form-control-lg qty1']) }}
                                                                                <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class='col'>
                                                                            <div class="input-group">
                                                                                {{ Form::number('kondisi_rb',$sites->kondisi_rb,['class'=>'form-control form-control-lg qty1']) }}
                                                                                <div class="input-group-append"><span class="input-group-text">RB</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    {{-- <div class='form-group'>
                                                                        {{ Form::label('jml_barang','Jumlah Barang') }}
                                                                        {{ Form::text('jml_barang','',['class'=>'form-control total1','readonly']) }}
                                                                    </div> --}}
                                                                    <div class='form-group'>
                                                                        {{ Form::label('keterangan','Keterangan') }}
                                                                        {{ Form::text('keterangan',$sites->keterangan,['class'=>'form-control form-control-lg']) }}
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
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h5 class="card-header m-0">Data Alkom</h5>
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
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$alkoms->nama_barang}}</td>
                                                <td>{{$alkoms->sumber}} </td>
                                                <td>{{$alkoms->jml_barang}}</td>
                                                <td>{{$alkoms->kondisi_bb}}</td>
                                                <td>{{$alkoms->kondisi_rr}}</td>
                                                <td>{{$alkoms->kondisi_rb}}</td>
                                                <td>{{$alkoms->keterangan}}</td>
                                                <td class="d-flex">
                                                    <form class="mb-0 mr-2" method="POST" action="{{ route('polres.delete', [$alkoms->id]) }}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-rounded btn-danger">Delete</button>
                                                    </form>
                                                    <button data-toggle="modal" data-target="#editBarang{{$alkoms->id}}" class="btn btn-rounded btn-brand">Edit</button>
                                                    <!-- Modal Edit -->
                                                </td>
                                                <div class="modal fade" id="editBarang{{$alkoms->id}}" tabindex="-1" role="dialog" aria-labelledby="titleBarang" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="titleBarang">Edit Data Barang</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                {!! Form::open(['route' => ['barang.edit',$alkoms->id], 'method' => 'PUT']) !!}
                                                                {{ csrf_field() }}
                                                                {{ method_field('PUT') }}
                                                                <div class='form-group'>
                                                                    {{ Form::label('nama_barang','Nama Barang') }}
                                                                    {{ Form::text('nama_barang',$alkoms->nama_barang,['class'=>'form-control']) }}
                                                                </div>
                                                                <div class="form-group">
                                                                    <input id="id_polres" value='{{$alkoms->id_polres}}' type="text" name="id_polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label for="jenis_barang">Jenis Barang</label>
                                                                    <input id="jenis_barang" value="{{$alkoms->jenis_barang}}" type="text" name="jenis_barang" data-parsley-trigger="change" required placeholder="Alkom" autocomplete="off" class="form-control form-control-lg" readonly>
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('sumber','Sumber') }}
                                                                    {{ Form::text('sumber',$alkoms->sumber,['class'=>'form-control']) }}
                                                                </div>
                                                                <label>Kondisi</label>
                                                                <div class="row form-group pt-0">
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_bb',$alkoms->kondisi_bb,['class'=>'form-control form-control-lg qty2']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_rr',$alkoms->kondisi_rr,['class'=>'form-control form-control-lg qty2']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_rb',$alkoms->kondisi_rb,['class'=>'form-control form-control-lg qty2']) }}
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
                                                                    {{ Form::text('keterangan',$alkoms->keterangan,['class'=>'form-control form-control-lg']) }}
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
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h5 class="card-header m-0">Data Indihome</h5>
                            <div class="card-body p-0">
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
                                            </tr>
                                            <tr class="border-0">
                                                <th class="border-0">BB</th>
                                                <th class="border-0">RR</th>
                                                <th class="border-0">RB</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($indi as $inhome)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
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
                                                                    {{ Form::text('nama_barang',$inhome->nama_barang,['class'=>'form-control']) }}
                                                                </div>
                                                                <div class="form-group">
                                                                    <input id="id_polres" value='{{$inhome->id_polres}}' type="text" name="id_polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label for="jenis_barang">Jenis Barang</label>
                                                                    <input id="jenis_barang" value="{{$inhome->jenis_barang}}" type="text" name="jenis_barang" data-parsley-trigger="change" required placeholder="Site" autocomplete="off" class="form-control form-control-lg" readonly>
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('sumber','Sumber') }}
                                                                    {{ Form::text('sumber',$inhome->sumber,['class'=>'form-control']) }}
                                                                </div>
                                                                <label>Kondisi</label>
                                                                <div class="row form-group pt-0">
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_bb',$inhome->kondisi_bb,['class'=>'form-control form-control-lg qty1']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_rr',$inhome->kondisi_rr,['class'=>'form-control form-control-lg qty1']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_rb',$inhome->kondisi_rb,['class'=>'form-control form-control-lg qty1']) }}
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
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h5 class="card-header m-0">Data Telepon</h5>
                            <div class="card-body p-0">
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
                                            </tr>
                                            <tr class="border-0">
                                                <th class="border-0">BB</th>
                                                <th class="border-0">RR</th>
                                                <th class="border-0">RB</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($telp as $telpon)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
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
                                                                    {{ Form::text('nama_barang',$telpon->nama_barang,['class'=>'form-control']) }}
                                                                </div>
                                                                <div class="form-group">
                                                                    <input id="id_polres" value='{{$telpon->id_polres}}' type="text" name="id_polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label for="jenis_barang">Jenis Barang</label>
                                                                    <input id="jenis_barang" value="{{$telpon->jenis_barang}}" type="text" name="jenis_barang" data-parsley-trigger="change" required placeholder="Site" autocomplete="off" class="form-control form-control-lg" readonly>
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('sumber','Sumber') }}
                                                                    {{ Form::text('sumber',$telpon->sumber,['class'=>'form-control']) }}
                                                                </div>
                                                                <label>Kondisi</label>
                                                                <div class="row form-group pt-0">
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_bb',$telpon->kondisi_bb,['class'=>'form-control form-control-lg qty2']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_rr',$telpon->kondisi_rr,['class'=>'form-control form-control-lg qty2']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_rb',$telpon->kondisi_rb,['class'=>'form-control form-control-lg qty2']) }}
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
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h5 class="card-header m-0">Data Intranet</h5>
                            <div class="card-body p-0">
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
                                            </tr>
                                            <tr class="border-0">
                                                <th class="border-0">BB</th>
                                                <th class="border-0">RR</th>
                                                <th class="border-0">RB</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($intranet as $intran)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
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
                                                                    {{ Form::text('nama_barang',$intran->nama_barang,['class'=>'form-control']) }}
                                                                </div>
                                                                <div class="form-group">
                                                                    <input id="id_polres" value='{{$intran->id_polres}}' type="text" name="id_polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label for="jenis_barang">Jenis Barang</label>
                                                                    <input id="jenis_barang" value="{{$intran->jenis_barang}}" type="text" name="jenis_barang" data-parsley-trigger="change" required placeholder="Site" autocomplete="off" class="form-control form-control-lg" readonly>
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('sumber','Sumber') }}
                                                                    {{ Form::text('sumber',$intran->sumber,['class'=>'form-control']) }}
                                                                </div>
                                                                <label>Kondisi</label>
                                                                <div class="row form-group pt-0">
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_bb',$intran->kondisi_bb,['class'=>'form-control form-control-lg qty3']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_rr',$intran->kondisi_rr,['class'=>'form-control form-control-lg qty3']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_rb',$intran->kondisi_rb,['class'=>'form-control form-control-lg qty3']) }}
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
                                                                    {{ Form::text('keterangan',$intran->keterangan,['class'=>'form-control form-control-lg']) }}
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
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h5 class="card-header m-0">Data Wifi Id</h5>
                            <div class="card-body p-0">
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
                                            </tr>
                                            <tr class="border-0">
                                                <th class="border-0">BB</th>
                                                <th class="border-0">RR</th>
                                                <th class="border-0">RB</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($wifi as $wifii)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
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
                                                                    {{ Form::text('nama_barang',$wifii->nama_barang,['class'=>'form-control']) }}
                                                                </div>
                                                                <div class="form-group">
                                                                    <input id="id_polres" value='{{$wifii->id_polres}}' type="text" name="id_polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label for="jenis_barang">Jenis Barang</label>
                                                                    <input id="jenis_barang" value="{{$wifii->jenis_barang}}" type="text" name="jenis_barang" data-parsley-trigger="change" required placeholder="Site" autocomplete="off" class="form-control form-control-lg" readonly>
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('sumber','Sumber') }}
                                                                    {{ Form::text('sumber',$wifii->sumber,['class'=>'form-control']) }}
                                                                </div>
                                                                <label>Kondisi</label>
                                                                <div class="row form-group pt-0">
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_bb',$wifii->kondisi_bb,['class'=>'form-control form-control-lg qty4']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_rr',$wifii->kondisi_rr,['class'=>'form-control form-control-lg qty4']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_rb',$wifii->kondisi_rb,['class'=>'form-control form-control-lg qty4']) }}
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
                                                                    {{ Form::text('keterangan',$wifii->keterangan,['class'=>'form-control form-control-lg']) }}
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
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h5 class="card-header m-0">Data Astinet</h5>
                            <div class="card-body p-0">
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
                                            </tr>
                                            <tr class="border-0">
                                                <th class="border-0">BB</th>
                                                <th class="border-0">RR</th>
                                                <th class="border-0">RB</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($asti as $astin)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
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
                                                                    {{ Form::text('nama_barang',$astin->nama_barang,['class'=>'form-control']) }}
                                                                </div>
                                                                <div class="form-group">
                                                                    <input id="id_polres" value='{{$astin->id_polres}}' type="text" name="id_polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label for="jenis_barang">Jenis Barang</label>
                                                                    <input id="jenis_barang" value="{{$astin->jenis_barang}}" type="text" name="jenis_barang" data-parsley-trigger="change" required placeholder="Site" autocomplete="off" class="form-control form-control-lg" readonly>
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('sumber','Sumber') }}
                                                                    {{ Form::text('sumber',$astin->sumber,['class'=>'form-control']) }}
                                                                </div>
                                                                <label>Kondisi</label>
                                                                <div class="row form-group pt-0">
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_bb',$astin->kondisi_bb,['class'=>'form-control form-control-lg qty5']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_rr',$astin->kondisi_rr,['class'=>'form-control form-control-lg qty5']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::number('kondisi_rb',$astin->kondisi_rb,['class'=>'form-control form-control-lg qty5']) }}
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
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h5 class="m-0 card-header">Data Barang</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                <table id="barang" class="table table-striped table-bordered" style="width:100%">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0 align-middle" rowspan="2">No</th>
                                                <th class="border-0 align-middle" rowspan="2">Nama Barang</th>
                                                <th class="border-0 align-middle" rowspan="2">Jenis Barang</th>
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
                                            @foreach ($barang as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$item->nama_barang}}</td>
                                                <td>{{$item->jenis_barang}} </td>
                                                <td>{{$item->sumber}} </td>
                                                <!-- @if (isset($item->polres))
                                                @else
                                                <td></td>
                                                @endif -->
                                                <td>{{$item->jml_barang}}</td>
                                                <td>{{$item->kondisi_bb}}</td>
                                                <td>{{$item->kondisi_rr}}</td>
                                                <td>{{$item->kondisi_rb}}</td>
                                                <td>{{$item->keterangan}}</td>
                                                <td class="d-flex">
                                                    <form class="mb-0 mr-2" method="POST" action="{{ route('barang.delete', [$item->id]) }}">
                                                        {{-- <button type="submit" class="btn btn-rounded btn-brand">Edit</button> --}}
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-rounded btn-danger">Delete</button>
                                                    </form>
                                                    <button data-toggle="modal" data-target="#editBarang{{$item->id}}" class="btn btn-rounded btn-brand">Edit</button>
                                                    <!-- Modal Edit -->
                                                </td>
                                                <div class="modal fade" id="editBarang{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="titleBarang" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="titleBarang">Edit Data Barang</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                {!! Form::open(['route' => ['barang.edit',$item->id], 'method' => 'PUT']) !!}
                                                                {{ csrf_field() }}
                                                                {{ method_field('PUT') }}
                                                                <div class='form-group'>
                                                                    {{ Form::label('nama_barang','Nama Barang') }}
                                                                    {{ Form::text('nama_barang',$item->nama_barang,['class'=>'form-control']) }}
                                                                </div>
                                                                <div class="form-group">
                                                                    <input id="id_polres" value='{{$item->id_polres}}' type="text" name="id_polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('jenis_barang','Jenis Barang') }}
                                                                    {{ Form::text('jenis_barang',$item->jenis_barang,['class'=>'form-control']) }}
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('sumber','Sumber') }}
                                                                    {{ Form::text('sumber',$item->sumber,['class'=>'form-control']) }}
                                                                </div>
                                                                <label>Kondisi</label>
                                                                <div class="row form-group pt-0">
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::text('kondisi_bb',$item->kondisi_bb,['class'=>'form-control form-control-lg qty1']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::text('kondisi_rr',$item->kondisi_rr,['class'=>'form-control form-control-lg qty1']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::text('kondisi_rb',$item->kondisi_rb,['class'=>'form-control form-control-lg qty1']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">RB</span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- <div class='form-group'>
                                                                    {{ Form::label('jml_barang','Jumlah Barang') }}
                                                                    {{ Form::text('jml_barang','',['class'=>'form-control total','readonly']) }}
                                                                </div> --}}
                                                                <div class='form-group'>
                                                                    {{ Form::label('keterangan','Keterangan') }}
                                                                    {{ Form::text('keterangan',$item->keterangan,['class'=>'form-control form-control-lg']) }}
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
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h5 class="card-header m-0">Data Giat</h5>
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
                                            @foreach ($giat as $item)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$item->nama}}</td>
                                                <td>{{$item->tanggal}}</td>
                                                <td>{{$item->keterangan}}</td>
                                                @if (isset($item->image))
                                                <td><img src="{{asset('/'.$item->image)}}" style="height: 100px; width: flex;"></td>
                                                @else
                                                <td></td>
                                                @endif
                                                <td>
                                                    <form method="POST" action="{{ route('polres.delete', [$item->id]) }}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-rounded btn-danger">Delete</button>
                                                    </form>
                                                </td>
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

{{-- <script>
    $(document).ready(function() {
        $('#polres').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script> --}}

@endsection
