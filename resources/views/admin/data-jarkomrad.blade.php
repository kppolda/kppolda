@extends('layout/sidebar-admin')

@section('title', 'Data JarKomRad')

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
                                    <li class="breadcrumb-item active" aria-current="page">Data JarKomRad</li>
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
                <!-- Modal Site -->
                <div class="modal fade" id="dataSite" tabindex="-1" role="dialog" aria-labelledby="titleSite" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="titleSite">Tambah Data Site</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="#" id="basicform" data-parsley-validate="">
                            <div class="form-group ">
                                <label for="namaBarangSite">Nama Barang</label>
                                <input id="namaBarangSite" type="text" name="namaBarangSite" data-parsley-trigger="change" required placeholder="Nama Barang" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="jenisBarangSite">Jenis Barang</label>
                                <input id="jenisBarangSite" type="text" name="jenisBarangSite" data-parsley-trigger="change" required placeholder="Site" disabled autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="sumberSite">Sumber</label>
                                <input id="sumberSite" type="text" name="sumberSite" data-parsley-trigger="change" required placeholder="Sumber" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="jumlahBarangSite">Jumlah Barang</label>
                                <input id="jumlahBarangSite" type="text" name="jumlahBarangSite" data-parsley-trigger="change" required placeholder="Total Barang" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <label>Kondisi</label>
                            <div class="row form-group pt-0">
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiBBSite" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiRRSite" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiRBSite" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">RB</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="keteranganSite">Keterangan</label>
                                <input id="keteranganSite" type="text" name="keteranganSite" data-parsley-trigger="change" required placeholder="Keterangan" autocomplete="off" class="form-control form-control-lg">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Modal Alkom -->
                <div class="modal fade" id="dataAlkom" tabindex="-1" role="dialog" aria-labelledby="titleAlkom" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="titleAlkom">Tambah Data Alkom</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" id="basicform" data-parsley-validate="">
                            <div class="form-group ">
                                <label for="namaBarangAlkom">Nama Barang</label>
                                <input id="namaBarangAlkom" type="text" name="namaBarangAlkom" data-parsley-trigger="change" required placeholder="Nama Barang" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="jenisBarangAlkom">Jenis Barang</label>
                                <input id="jenisBarangAlkom" type="text" name="jenisBarangAlkom" data-parsley-trigger="change" required placeholder="Alkom" disabled autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="sumberAlkom">Sumber</label>
                                <input id="sumberAlkom" type="text" name="sumberAlkom" data-parsley-trigger="change" required placeholder="Sumber" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="jumlahBarangAlkom">Jumlah Barang</label>
                                <input id="jumlahBarangAlkom" type="text" name="jumlahBarangAlkom" data-parsley-trigger="change" required placeholder="Total Barang" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <label>Kondisi</label>
                            <div class="row form-group pt-0">
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiBBAlkom" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiRRAlkom" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiRBAlkom" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">RB</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="keteranganAlkom">Keterangan</label>
                                <input id="keteranganAlkom" type="text" name="keteranganAlkom" data-parsley-trigger="change" required placeholder="Keterangan" autocomplete="off" class="form-control form-control-lg">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
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
                            <h5 class="card-header">Data Site</h5>
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
                                            <tr>
                                                <td>1</td>
                                                <td>Motorola 420</td>
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
                        <div class="card">
                            <h5 class="card-header">Data Alkom</h5>
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
                                            <tr>
                                                <td>1</td>
                                                <td>Motorola 420</td>
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
        $('#site').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#alkom').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>

@endsection