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
                        <form action="#" id="basicform" data-parsley-validate="">
                            <div class="form-group ">
                                <label for="namaBarang">Nama Barang</label>
                                <input id="namaBarang" type="text" name="namaBarang" data-parsley-trigger="change" required placeholder="Nama Barang" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="jenisBarang">Jenis Barang</label>
                                <input id="jenisBarang" type="text" name="jenisBarang" data-parsley-trigger="change" required placeholder="Jenis Barang" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="sumber">Sumber</label>
                                <input id="sumber" type="text" name="sumber" data-parsley-trigger="change" required placeholder="Sumber" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="jumlahBarang">Jumlah Barang</label>
                                <input id="jumlahBarang" type="text" name="jumlahBarang" data-parsley-trigger="change" required placeholder="Total Barang" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <label>Kondisi</label>
                            <div class="row form-group pt-0">
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiBB" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiRR" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiRB" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">RB</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="keterangan">Keterangan</label>
                                <input id="keterangan" type="text" name="keterangan" data-parsley-trigger="change" required placeholder="Keterangan" autocomplete="off" class="form-control form-control-lg">
                            </div>
                        </form>
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
                                <h5 class="m-0">Data Barang</h5>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataBarang">
                                    Tambah Data
                                </button>
                            </div>
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
                                            <tr>
                                                <td>1</td>
                                                <td>Motorola 420</td>
                                                <td>HT</td>
                                                <td>Pemasukan Ini</td>
                                                <td>6</td>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
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
        $('#barang').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>

@endsection