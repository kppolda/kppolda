@extends('layout/sidebar-admin')

@section('title', 'Data Daftar Giat')

@section('style')
<style>
</style>
@endsection

<div class="dashboard-wrapper" onload="getPics()">
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
                                <form action="/api/giat" method="POST" id="basicform" data-parsley-validate="" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class='form-group'>
                                        {{ Form::label('id_polres','Polres') }}
                                        <select name="id_polres" class="form-control" id="id_polres" required>
                                            <option hidden>Pilih Polres</option>
                                            @foreach ($polres as $user)
                                            <option value="{{$user->username}}">{{$user->nama_polres}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group ">
                                        <label for="nama">Nama Giat</label>
                                        <input id="nama" type="text" name="nama" data-parsley-trigger="change" required placeholder="Nama Giat" autocomplete="off" class="form-control form-control-lg" required>
                                    </div>
                                    <div class="form-group ">
                                        <label for="tanggal">Tanggal Giat</label>
                                        <input id="tanggal" type="date" name="tanggal" data-parsley-trigger="change" required autocomplete="off" class="form-control form-control-lg" required>
                                    </div>
                                    <div class="form-group ">
                                        <label for="keterangan">Keterangan</label>
                                        <textarea id="keterangan" type="text" name="keterangan" data-parsley-trigger="change" required placeholder="Keterangan" autocomplete="off" required class="form-control form-control-lg"></textarea>
                                    </div>
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="image">Dokumentasi</label>
                                        <input accept="image/*" type="file" class="custom-file-input" name="image" id="image" onchange="readURL(this);" required>
                                        <p>image file dengan size maksimal 2mb.</p>
                                        <!-- <img id="blah" src="http://placehold.it/180" alt="your image" style="max-width: 180px;"/> -->
                                    </div>
                                </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
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
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="giat" class="table table-striped table-bordered" style="width:100%">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">No</th>
                                                <th class="border-0">Nama Giat</th>
                                                <th class="border-0">Polres</th>
                                                <th class="border-0">Tanggal Giat</th>
                                                <th class="border-0">Keterangan</th>
                                                <th class="border-0">Dokumentasi</th>
                                                <th class="border-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($giat as $item)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$item->nama}}</td>
                                                <td>@foreach ($polres as $user)
                                                    @if ($user->username === $item->id_polres)
                                                    {{$user->nama_polres}}
                                                    @endif
                                                    @endforeach</td>
                                                <td>{{$item->tanggal}}</td>
                                                <td>{{$item->keterangan}}</td>
                                                @if (isset($item->image))
                                                <td><img id="myImg{{$item->id}}" src="{{asset('/'.$item->image)}}" style="height: 100px; width: flex;"></td>
                                                @else
                                                @endif
                                                <td>
                                                    <form method="POST" action="{{ route('giat.delete', [$item->id]) }}">
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
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection
