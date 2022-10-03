@extends('layout/sidebar-admin')

@section('title', 'Data Barang')

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
                                    <li class="breadcrumb-item active" aria-current="page">Data Barang</li>
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
                <div class="modal fade" id="dataBarang" tabindex="-1" role="dialog" aria-labelledby="titleBarang" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="titleBarang">Tambah Data Barang</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                {!! Form::open(['route' => 'barang.regis', 'method' => 'POST']) !!}
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                <div class='form-group'>
                                    {{ Form::label('nama_barang','Nama Barang') }}
                                    {{ Form::text('nama_barang','',['class'=>'form-control', 'required', 'placeholder'=>'Nama Barang']) }}
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('jenis_barang','Jenis Barang') }}
                                    {{ Form::text('jenis_barang','',['class'=>'form-control', 'required', 'placeholder'=>'Jenis Barang']) }}
                                </div>
                                <div class="form-group">
                                    <input id="id_polres" value='{{Auth::user ()->username}}' type="text" name="id_polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('sumber','Sumber') }}
                                    <select name="sumber" class="form-control" id="sumber" required>
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
                                            {{ Form::number('kondisi_bb','',['class'=>'form-control form-control-lg qty1', 'required', 'placeholder'=>'Masukkan Jumlah']) }}
                                            <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                        </div>
                                    </div>
                                    <div class='col'>
                                        <div class="input-group">
                                            {{ Form::number('kondisi_rr','',['class'=>'form-control form-control-lg qty1', 'required', 'placeholder'=>'Masukkan Jumlah']) }}
                                            <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                        </div>
                                    </div>
                                    <div class='col'>
                                        <div class="input-group">
                                            {{ Form::number('kondisi_rb','',['class'=>'form-control form-control-lg qty1', 'required', 'placeholder'=>'Masukkan Jumlah']) }}
                                            <div class="input-group-append"><span class="input-group-text">RB</span></div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class='form-group'>
                                    {{ Form::label('jml_barang','Jumlah Barang') }}
                                    {{ Form::text('jml_barang','',['class'=>'form-control total', 'required', 'placeholder'=>'Jumlah Barang']) }}
                                </div> --}}
                                <div class='form-group'>
                                    {{ Form::label('keterangan','Keterangan') }}
                                    {{ Form::text('keterangan','',['class'=>'form-control form-control-lg', 'placeholder'=>'Keterangan']) }}
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
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->

                    <!-- recent orders  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="m-0">Data Barang</h5>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataBarang">
                                    Tambah Data
                                </button>
                            </div>
                            <div class="card-body">
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
                                            @foreach ($datas as $item)
                                            @if (Auth::user()->username === $item->id_polres)
                                            <tr>
                                                <td>{{$a++}}</td>
                                                <td>{{$item->nama_barang}}</td>
                                                <td>{{$item->jenis_barang}} </td>
                                                <td>{{$item->sumber}} </td>
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
                                                                    {{ Form::text('nama_barang',$item->nama_barang,['required','class'=>'form-control']) }}
                                                                </div>
                                                                <div class="form-group">
                                                                    <input id="id_polres" value='{{Auth::user()->username}}' type="text" name="id_polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('jenis_barang','Jenis Barang') }}
                                                                    {{ Form::text('jenis_barang',$item->jenis_barang,['required','class'=>'form-control']) }}
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('sumber','Sumber') }}
                                                                    {{ Form::text('sumber',$item->sumber,['required','class'=>'form-control']) }}
                                                                </div>
                                                                <label>Kondisi</label>
                                                                <div class="row form-group pt-0">
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::text('kondisi_bb',$item->kondisi_bb,['required','class'=>'form-control form-control-lg qty1']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::text('kondisi_rr',$item->kondisi_rr,['required','class'=>'form-control form-control-lg qty1']) }}
                                                                            <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col'>
                                                                        <div class="input-group">
                                                                            {{ Form::text('kondisi_rb',$item->kondisi_rb,['required','class'=>'form-control form-control-lg qty1']) }}
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
        $('#barang').DataTable({
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
        $(".total").val(sum);
    });
</script>

@endsection
