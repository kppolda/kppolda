@extends('layout/sidebar-admin')

@section('title', 'Data Daftar Giat')

@section('style')
<style>
    #fullpage {
        display: none;
        position: absolute;
        z-index: 9999;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-size: contain;
        background-repeat: no-repeat no-repeat;
        background-position: center center;
        background-color: black;
    }
</style>
@endsection

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
                                <form action="/api/giat_id" method="POST" id="basicform" data-parsley-validate="" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group ">
                                        <label for="nama">Nama Giat</label>
                                        <input id="nama" type="text" required name="nama" data-parsley-trigger="change" required placeholder="Nama Giat" autocomplete="off" class="form-control form-control-lg">
                                    </div>
                                    <div class="form-group">
                                        <input id="id_polres" required value='{{Auth::user()->username}}' type="text" name="id_polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                    </div>
                                    <div class="form-group ">
                                        <label for="tanggal">Tanggal Giat</label>
                                        <input id="tanggal" type="date" required name="tanggal" data-parsley-trigger="change" required autocomplete="off" class="form-control form-control-lg">
                                    </div>
                                    <div class="form-group ">
                                        <label for="keterangan">Keterangan</label>
                                        <textarea id="keterangan" type="text" required name="keterangan" data-parsley-trigger="change" required placeholder="Keterangan" autocomplete="off" class="form-control form-control-lg"></textarea>
                                    </div>
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="image">Dokumentasi</label>
                                        <input accept="image/*" type="file" class="custom-file-input" name="image" id="image" onchange="readURL(this);" >
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
                                                <th class="border-0">Tanggal Giat</th>
                                                <th class="border-0">Keterangan</th>
                                                <th class="border-0">Dokumentasi</th>
                                                <th class="border-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $a=1;
                                            @endphp
                                            @foreach ($giat as $item)
                                            @if (Auth::user()->username === $item->id_polres)
                                            <tr>
                                                <td>{{$a++}}</td>
                                                <td>{{$item->nama}}</td>
                                                <td>{{$item->tanggal}}</td>
                                                <td>{{$item->keterangan}}</td>
                                                @if (isset($item->image))
                                                <td><img src="{{asset('/'.$item->image)}}" style="height: 100px; width: flex;"></td>
                                                @else
                                                <td></td>
                                                @endif
                                                <td>
                                                    <form method="POST" action="{{ route('giat.delete', [$item->id]) }}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-rounded btn-danger">Delete</button>
                                                    </form>
                                                </td>
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
<script>
    function getPics() {} //just for this demo
        const imgs = document.querySelectorAll('.gallery img');
        const fullPage = document.querySelector('#fullpage');

        imgs.forEach(img => {
        img.addEventListener('click', function() {
            fullPage.style.backgroundImage = 'url(' + img.src + ')';
            fullPage.style.display = 'block';
        });
    });
</script>

@endsection
