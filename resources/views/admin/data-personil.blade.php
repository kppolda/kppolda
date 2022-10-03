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
                                    {{ Form::label('polres','Polres') }}
                                    <select name="polres" class="form-control" id="polres" required>
                                        <option hidden>Pilih Polres</option>
                                        @foreach ($polres as $user)
                                        <option value="{{$user->username}}">{{$user->nama_polres}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('nama_personil','Nama') }}
                                    {{ Form::text('nama_personil','',['class'=>'form-control','required','placeholder'=>'Nama', 'required']) }}
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('nrp_personil','NRP') }}
                                    {{ Form::text('nrp_personil','',['class'=>'form-control','required','placeholder'=>'NRP', 'required']) }}
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('pangkat_personil','Pangkat') }}
                                    <select name="pangkat_personil" class="form-control" id="pangkat_personil" required>
                                        <option hidden>Pilih Pangkat</option>
                                        <option value="01 KOMBES POL">KOMBES POL</option>
                                        <option value="02 AKBP">AKBP</option>
                                        <option value="03 KOMPOL">KOMPOL</option>
                                        <option value="04 AKP">AKP</option>
                                        <option value="05 IPTU">IPTU</option>
                                        <option value="06 IPDA">IPDA</option>
                                        <option value="07 AIPTU">AIPTU</option>
                                        <option value="08 AIPDA">AIPDA</option>
                                        <option value="09 BRIPKA">BRIPKA</option>
                                        <option value="10 BRIGADIR">BRIGADIR</option>
                                        <option value="11 BRIPTU">BRIPTU</option>
                                        <option value="12 BRIPDA">BRIPDA</option>
                                    </select>
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('jabatan_personil','Jabatan') }}
                                    <select name="jabatan_personil" class="form-control" id="jabatan_personil" required>
                                        <option hidden>Pilih jabatan</option>
                                        <option value="kasitik">KASI TIK</option>
                                        <option value="baurmin">BAURMIN</option>
                                        <option value="baurtekinfo">BAUR TEKINFO</option>
                                        <option value="baurtekom">BAUR TEKOM</option>
                                        <option value="bamintekinfo">BAMIN TEKINFO</option>
                                        <option value="bamintekom">BAMIN TEKOM</option>
                                        <option value="kabidteknologiinformasi">KABID TEKNOLOGI INFORMASI</option>
                                        <option value="kasubbidtekkom">KASUBBIDTEKKOM</option>
                                        <option value="kasubbidtekinfo">KASUBBIDTEKINFO</option>
                                        <option value="pengembangteknologi">PENGEMBANG TEKNOLOGI</option>
                                        <option value="informasikepolisianmuda">INFORMASI KEPOLISIAN MUDA</option>
                                        <option value="kaurpullahtasubbidtekinfo">KAUR PULLAHTA SUBBIDTEKINFO</option>
                                        <option value="kauryankomsubbidtekkom">KAUR YANKOM SUBBIDTEKKOM</option>
                                        <option value="kaujarkomsubbidtekkom">KAUR JARKOM SUBBIDTEKKOM</option>
                                        <option value="kauharkansubbid">KAUR HARKAN SUBBID</option>
                                        <option value="kaurintisubbidtekinfo">KAUR INTI SUBBIDTEKINFO</option>
                                        <option value="pamin">PAMIN</option>
                                        <option value="paur">PAUR</option>
                                        <option value="bamin">BAMIN</option>
                                    </select>
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('pendidikan_dikum','Pendidikan Dikum') }}
                                    <select name="pendidikan_dikum" class="form-control" id="pendidikan_dikum" required>
                                        <option hidden>Pilih Dikum</option>
                                        <option value="sd">SD</option>
                                        <option value="smp">SMP</option>
                                        <option value="sma">SMA</option>
                                        <option value="s1">S1</option>
                                        <option value="s2">S2</option>
                                    </select>
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('pendidikan_dikbang','Pendidikan Dikbang') }}
                                    {{ Form::text('pendidikan_dikbang','',['class'=>'form-control','placeholder'=>'Pendidikan Dikbang']) }}
                                </div>
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
                            <div class="card-body">
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
                                                <th class="border-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($datas as $item)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$item->nama_personil}}</td>
                                                <td>{{$item->nrp_personil}} </td>
                                                <td>@foreach ($polres as $user)
                                                    @if ($user->username === $item->polres)
                                                    {{$user->nama_polres}}
                                                    @endif
                                                    @endforeach</td>
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
                                                    <form class="mb-0 mr-2" method="POST" action="{{ route('personil.delete', [$item->id]) }}">
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
                                                                {!! Form::open(['route' => ['personil.edit',$item->id], 'method' => 'PUT']) !!}
                                                                {{ csrf_field() }}
                                                                {{ method_field('PUT') }}
                                                                <div class='form-group'>
                                                                    {{ Form::label('nama_personil','Nama') }}
                                                                    {{ Form::text('nama_personil',$item->nama_personil,['class'=>'form-control', 'required']) }}
                                                                </div>
                                                                <div class="form-group">
                                                                    <input id="polres" value='{{$item->polres}}' type="text" name="polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('nrp_personil','NRP') }}
                                                                    {{ Form::text('nrp_personil',$item->nrp_personil,['class'=>'form-control', 'required']) }}
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('polres','Polres') }}
                                                                    <select name="polres" class="form-control" id="polres" required>
                                                                        <option value="{{$item->polres}}" hidden>{{$item->polres}}</option>
                                                                        @foreach ($polres as $user)
                                                                        <option value="{{$user->username}}">{{$user->nama_polres}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('pangkat_personil','Pangkat') }}
                                                                    <select name="pangkat_personil" class="form-control" id="pangkat_personil" required>
                                                                        <option hidden value="{{$item->pangkat_personil}}">{{$item->pangkat_personil}}</option>
                                                                        <option value="01 KOMBES POL">KOMBES POL</option>
                                                                        <option value="02 AKBP">AKBP</option>
                                                                        <option value="03 KOMPOL">KOMPOL</option>
                                                                        <option value="04 AKP">AKP</option>
                                                                        <option value="05 IPTU">IPTU</option>
                                                                        <option value="06 IPDA">IPDA</option>
                                                                        <option value="07 AIPTU">AIPTU</option>
                                                                        <option value="08 AIPDA">AIPDA</option>
                                                                        <option value="09 BRIPKA">BRIPKA</option>
                                                                        <option value="10 BRIGADIR">BRIGADIR</option>
                                                                        <option value="11 BRIPTU">BRIPTU</option>
                                                                        <option value="12 BRIPDA">BRIPDA</option>
                                                                    </select>
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('jabatan_personil','Jabatan') }}
                                                                    <select name="jabatan_personil" class="form-control" id="jabatan_personil" required>
                                                                        <option hidden value="{{$item->jabatan_personil}}">{{$item->jabatan_personil}}</option>
                                                                        <option value="kasitik">KASI TIK</option>
                                                                        <option value="baurmin">BAURMIN</option>
                                                                        <option value="baurtekinfo">BAUR TEKINFO</option>
                                                                        <option value="baurtekom">BAUR TEKOM</option>
                                                                        <option value="bamintekinfo">BAMIN TEKINFO</option>
                                                                        <option value="bamintekom">BAMIN TEKOM</option>
                                                                        <option value="kabidteknologiinformasi">KABID TEKNOLOGI INFORMASI</option>
                                                                        <option value="kasubbidtekkom">KASUBBIDTEKKOM</option>
                                                                        <option value="kasubbidtekinfo">KASUBBIDTEKINFO</option>
                                                                        <option value="pengembangteknologi">PENGEMBANG TEKNOLOGI</option>
                                                                        <option value="informasikepolisianmuda">INFORMASI KEPOLISIAN MUDA</option>
                                                                        <option value="kaurpullahtasubbidtekinfo">KAUR PULLAHTA SUBBIDTEKINFO</option>
                                                                        <option value="kauryankomsubbidtekkom">KAUR YANKOM SUBBIDTEKKOM</option>
                                                                        <option value="kaujarkomsubbidtekkom">KAUR JARKOM SUBBIDTEKKOM</option>
                                                                        <option value="kauharkansubbid">KAUR HARKAN SUBBID</option>
                                                                        <option value="kaurintisubbidtekinfo">KAUR INTI SUBBIDTEKINFO</option>
                                                                        <option value="pamin">PAMIN</option>
                                                                        <option value="paur">PAUR</option>
                                                                        <option value="bamin">BAMIN</option>
                                                                    </select>
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('pendidikan_dikum','Pendidikan Dikum') }}
                                                                    <select name="pendidikan_dikum" class="form-control" id="pendidikan_dikum" required>
                                                                        <option value="{{$item->pendidikan_dikum}}" hidden>{{$item->pendidikan_dikum}}</option>
                                                                        <option value="sd">SD</option>
                                                                        <option value="smp">SMP</option>
                                                                        <option value="sma">SMA</option>
                                                                        <option value="s1">S1</option>
                                                                        <option value="s2">S2</option>
                                                                    </select>
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
