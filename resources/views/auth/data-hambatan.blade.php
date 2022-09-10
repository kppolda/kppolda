@extends('layout/sidebar-admin')

@section('title', 'Data Hambatan')

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
                                    <li class="breadcrumb-item active" aria-current="page">Data Hambatan</li>
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
                <div class="modal fade" id="dataHambatan" tabindex="-1" role="dialog" aria-labelledby="titleHambatan" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="titleHambatan">Tambah Data Hambatan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(['route' => 'hambatan.regis', 'method' => 'POST']) !!}
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                <div class='form-group'>
                                    {{ Form::text('jenis','hambatan',['class'=>'form-control','hidden']) }}
                                </div>
                                <div class="form-group">
                                    <input id="id_polres" value='{{Auth::user()->username}}' type="text" name="id_polres" data-parsley-trigger="change" autocomplete="off" class="form-control form-control-lg" hidden>
                                </div>
                                <div class='form-group'>
                                    {{ Form::label('hambatan','Hambatan') }}
                                    {{ Form::textarea('hambatan','',['class'=>'form-control form-control-lg','placeholder'=>'Hambatan yang dihadapi']) }}
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
                </div>

                <div class="row">
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->

                    <!-- recent orders  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="m-0">Data Hambatan</h5>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataHambatan">
                                    Tambah Data
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="hambatan" class="table table-striped table-bordered" style="width:100%">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">No</th>
                                                <th class="border-0">Hambatan</th>
                                                <th class="border-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($hambatan as $item)
                                            @if (Auth::user()->username === $item->id_polres)
                                            <tr>
                                                <td>{{ $count++ }}</td>
                                                <td>{{$item->hambatan}}</td>
                                                <td class="d-flex">
                                                    <form class="mb-0 mr-2" method="POST" action="{{ route('hambatan.delete', [$item->id]) }}">
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
                                                                {!! Form::open(['route' => ['hambatan.edit',$item->id], 'method' => 'PUT']) !!}
                                                                {{ csrf_field() }}
                                                                {{ method_field('PUT') }}
                                                                <div class='form-group'>
                                                                    {{ Form::text('jenis',$item->jenis,['class'=>'form-control','hidden']) }}
                                                                </div>
                                                                <div class='form-group'>
                                                                    {{ Form::label('hambatan','Hambatan') }}
                                                                    {{ Form::textarea('hambatan',$item->hambatan,['class'=>'form-control form-control-lg']) }}
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

{{-- <script>
    $(document).ready(function() {
        $('#hambatan').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script> --}}
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
