
@php
    $i=0; $a=0; $c=0;
@endphp

@extends('layout/sidebar-admin')

@section('style')
<style>
    .td-no {
        width: 20px;
    }
    .td-is {
        width: 20rem;
    }
</style>
@endsection

@section('title', 'Dashboard')

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
                                    <li class="breadcrumb-item active" aria-current="page">Home</li>
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
                <div class="modal fade" id="dasar" tabindex="-1" role="dialog" aria-labelledby="titleDasar" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="titleDasar">Tambah Dasar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(['route' => 'pen.regis', 'method' => 'POST']) !!}
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                <div class='form-group'>
                                    {{ Form::text('jenis','dasar',['class'=>'form-control','hidden']) }}
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('dasar','Dasar') }}
                                    {{ Form::textarea('dasar','',['class'=>'form-control form-control-lg','placeholder'=>'Dasar']) }}
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
                <div class="modal fade" id="maksuddantujuan" tabindex="-1" role="dialog" aria-labelledby="titleMaksud" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="titleMaksud">Tambah Maksud dan Tujuan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(['route' => 'pen.regis', 'method' => 'POST']) !!}
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                <div class='form-group'>
                                    {{ Form::text('jenis','maksudtujuan',['class'=>'form-control','hidden']) }}
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('maksudtujuan','Maksud dan Tujuan') }}
                                    {{ Form::textarea('maksudtujuan','',['class'=>'form-control form-control-lg','placeholder'=>'Maksud dan Tujuan']) }}
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

                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Jumlah Polres</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">
                                        @foreach ($users as $polres)
                                        @php
                                            $i++;
                                        @endphp
                                        @if ($loop->remaining===1)
                                            {{$i}}
                                        @endif
                                        @endforeach</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Jumlah Personil</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">@foreach ($personil as $person)
                                        @php
                                            $a++;
                                        @endphp
                                        @if ($loop->remaining===0)
                                        {{$a}}
                                        @endif
                                        @endforeach/ {{$users->sum('dspp')}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Jumlah Inventaris</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">@foreach ($invent as $invents)
                                        @php
                                            $c++;
                                        @endphp
                                        @if ($loop->remaining===0)
                                        {{$c}}
                                        @endif
                                        @endforeach</h1>
                                </div>
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
                                <h5 class="m-0">Dasar</h5>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dasar">
                                    Tambah Data
                                </button>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                <table class="table" id="mauexport">
                                        <thead class="bg-light">
                                            <tr>
                                                <th class="td-no">No</th>
                                                <th>Dasar</th>
                                                <th class="td-is">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i=1;
                                            @endphp
                                            @foreach ($dasar as $item)
                                            <tr>
                                                <td class="td-no">{{$i++}}</td>
                                                <td>{{$item->dasar}}</td>
                                                <td class="d-flex td-is align-items-center">
                                                    <form class="mb-0 mr-2" method="POST" action="{{ route('pen.delete', [$item->id]) }}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-rounded btn-danger">Delete</button>
                                                    </form>
                                                    <button data-toggle="modal" data-target="#editDasar{{$item->id}}" class="btn btn-rounded btn-brand">Edit</button>
                                                </td>
                                                <div class="modal fade" id="editDasar{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="titlePersonil" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="titlePersonil">Edit Dasar</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                {!! Form::open(['route' => ['pen.edit',$item->id], 'method' => 'PUT']) !!}
                                                                {{ csrf_field() }}
                                                                {{ method_field('PUT') }}
                                                                <div class='form-group'>
                                                                    {{ Form::text('jenis',$item->jenis,['class'=>'form-control','hidden']) }}
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('dasar','Dasar') }}
                                                                    {{ Form::textarea('dasar',$item->dasar,['class'=>'form-control form-control-lg']) }}
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
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="m-0">Maksud dan tujuan</h5>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#maksuddantujuan">
                                    Tambah Data
                                </button>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                <table class="table" id="mauexport">
                                        <thead class="bg-light">
                                            <tr>
                                                <th class="td-no">No</th>
                                                <th>Maksud dan Tujuan</th>
                                                <th class="td-is">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $a=1;
                                            @endphp
                                            @foreach ($maksud as $item)
                                            <tr>
                                                <td class="td-no">{{$a++}}</td>
                                                <td>{{$item->maksudtujuan}}</td>
                                                <td class="d-flex td-is align-items-center">
                                                    <form class="mb-0 mr-2" method="POST" action="{{ route('pen.delete', [$item->id]) }}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-rounded btn-danger">Delete</button>
                                                    </form>
                                                    <button data-toggle="modal" data-target="#editMaksud{{$item->id}}" class="btn btn-rounded btn-brand">Edit</button>
                                                </td>
                                                <div class="modal fade" id="editMaksud{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="titlePersonil" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="titlePersonil">Edit Maksud dan Tujuan</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                {!! Form::open(['route' => ['pen.edit',$item->id], 'method' => 'PUT']) !!}
                                                                {{ csrf_field() }}
                                                                {{ method_field('PUT') }}
                                                                <div class='form-group'>
                                                                    {{ Form::text('jenis',$item->jenis,['class'=>'form-control','hidden']) }}
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('maksudtujuan','Maksud dan Tujuan') }}
                                                                    {{ Form::textarea('maksudtujuan',$item->maksudtujuan,['class'=>'form-control form-control-lg']) }}
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
