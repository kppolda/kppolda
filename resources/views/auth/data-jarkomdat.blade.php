@extends('layout/sidebar')

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
                    <form action="#" id="basicform" data-parsley-validate="">
                            <div class="form-group ">
                                <label for="namaBarangIndihome">Nama Barang</label>
                                <input id="namaBarangIndihome" type="text" name="namaBarangIndihome" data-parsley-trigger="change" required placeholder="Nama Barang" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="jenisBarangIndihome">Jenis Barang</label>
                                <input id="jenisBarangIndihome" type="text" name="jenisBarangIndihome" data-parsley-trigger="change" required placeholder="Indihome" disabled autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="sumberIndihome">Sumber</label>
                                <input id="sumberIndihome" type="text" name="sumberIndihome" data-parsley-trigger="change" required placeholder="Sumber" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="jumlahBarangIndihome">Jumlah Barang</label>
                                <input id="jumlahBarangIndihome" type="text" name="jumlahBarangIndihome" data-parsley-trigger="change" required placeholder="Total Barang" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <label>Kondisi</label>
                            <div class="row form-group pt-0">
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiBBIndihome" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiRRIndihome" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiRBIndihome" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">RB</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="keteranganIndihome">Keterangan</label>
                                <input id="keteranganIndihome" type="text" name="keteranganIndihome" data-parsley-trigger="change" required placeholder="Keterangan" autocomplete="off" class="form-control form-control-lg">
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
                    <form action="#" id="basicform" data-parsley-validate="">
                            <div class="form-group ">
                                <label for="namaBarangTelepon">Nama Barang</label>
                                <input id="namaBarangTelepon" type="text" name="namaBarangTelepon" data-parsley-trigger="change" required placeholder="Nama Barang" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="jenisBarangTelepon">Jenis Barang</label>
                                <input id="jenisBarangTelepon" type="text" name="jenisBarangTelepon" data-parsley-trigger="change" required placeholder="Telepon" disabled autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="sumberTelepon">Sumber</label>
                                <input id="sumberTelepon" type="text" name="sumberTelepon" data-parsley-trigger="change" required placeholder="Sumber" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="jumlahBarangTelepon">Jumlah Barang</label>
                                <input id="jumlahBarangTelepon" type="text" name="jumlahBarangTelepon" data-parsley-trigger="change" required placeholder="Total Barang" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <label>Kondisi</label>
                            <div class="row form-group pt-0">
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiBBTelepon" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiRRTelepon" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiRBTelepon" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">RB</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="keteranganTelepon">Keterangan</label>
                                <input id="keteranganTelepon" type="text" name="keteranganTelepon" data-parsley-trigger="change" required placeholder="Keterangan" autocomplete="off" class="form-control form-control-lg">
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
                    <form action="#" id="basicform" data-parsley-validate="">
                            <div class="form-group ">
                                <label for="namaBarangIntranet">Nama Barang</label>
                                <input id="namaBarangIntranet" type="text" name="namaBarangIntranet" data-parsley-trigger="change" required placeholder="Nama Barang" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="jenisBarangIntranet">Jenis Barang</label>
                                <input id="jenisBarangIntranet" type="text" name="jenisBarangIntranet" data-parsley-trigger="change" required placeholder="Intranet" disabled autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="sumberIntranet">Sumber</label>
                                <input id="sumberIntranet" type="text" name="sumberIntranet" data-parsley-trigger="change" required placeholder="Sumber" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="jumlahBarangIntranet">Jumlah Barang</label>
                                <input id="jumlahBarangIntranet" type="text" name="jumlahBarangIntranet" data-parsley-trigger="change" required placeholder="Total Barang" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <label>Kondisi</label>
                            <div class="row form-group pt-0">
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiBBIntranet" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiRRIntranet" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiRBIntranet" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">RB</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="keteranganIntranet">Keterangan</label>
                                <input id="keteranganIntranet" type="text" name="keteranganIntranet" data-parsley-trigger="change" required placeholder="Keterangan" autocomplete="off" class="form-control form-control-lg">
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
                    <form action="#" id="basicform" data-parsley-validate="">
                            <div class="form-group ">
                                <label for="namaBarangWifiId">Nama Barang</label>
                                <input id="namaBarangWifiId" type="text" name="namaBarangWifiId" data-parsley-trigger="change" required placeholder="Nama Barang" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="jenisBarangWifiId">Jenis Barang</label>
                                <input id="jenisBarangWifiId" type="text" name="jenisBarangWifiId" data-parsley-trigger="change" required placeholder="Wifi Id" disabled autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="sumberWifiId">Sumber</label>
                                <input id="sumberWifiId" type="text" name="sumberWifiId" data-parsley-trigger="change" required placeholder="Sumber" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="jumlahBarangWifiId">Jumlah Barang</label>
                                <input id="jumlahBarangWifiId" type="text" name="jumlahBarangWifiId" data-parsley-trigger="change" required placeholder="Total Barang" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <label>Kondisi</label>
                            <div class="row form-group pt-0">
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiBBWifiId" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiRRWifiId" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiRBWifiId" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">RB</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="keteranganWifiId">Keterangan</label>
                                <input id="keteranganWifiId" type="text" name="keteranganWifiId" data-parsley-trigger="change" required placeholder="Keterangan" autocomplete="off" class="form-control form-control-lg">
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
                    <form action="#" id="basicform" data-parsley-validate="">
                            <div class="form-group ">
                                <label for="namaBarangAstinet">Nama Barang</label>
                                <input id="namaBarangAstinet" type="text" name="namaBarangAstinet" data-parsley-trigger="change" required placeholder="Nama Barang" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="jenisBarangAstinet">Jenis Barang</label>
                                <input id="jenisBarangAstinet" type="text" name="jenisBarangAstinet" data-parsley-trigger="change" required placeholder="Astinet" disabled autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="sumberAstinet">Sumber</label>
                                <input id="sumberAstinet" type="text" name="sumberAstinet" data-parsley-trigger="change" required placeholder="Sumber" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <div class="form-group ">
                                <label for="jumlahBarangAstinet">Jumlah Barang</label>
                                <input id="jumlahBarangAstinet" type="text" name="jumlahBarangAstinet" data-parsley-trigger="change" required placeholder="Total Barang" autocomplete="off" class="form-control form-control-lg">
                            </div>
                            <label>Kondisi</label>
                            <div class="row form-group pt-0">
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiBBAstinet" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">BB</span></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiRRAstinet" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">RR</span></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="kondisiRBAstinet" data-parsley-trigger="change" required placeholder="Masukkan Jumlah" autocomplete="off" class="form-control form-control-lg">
                                        <div class="input-group-append"><span class="input-group-text">RB</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="keteranganAstinet">Keterangan</label>
                                <input id="keteranganAstinet" type="text" name="keteranganAstinet" data-parsley-trigger="change" required placeholder="Keterangan" autocomplete="off" class="form-control form-control-lg">
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
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="m-0">Data Indihome</h5>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataIndihome">
                                    Tambah Data
                                </button>
                            </div>
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
                                                <th class="border-0 align-middle" rowspan="2">action</th>
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
                                                <td>
                                                    <form method="POST" action="" style="margin:0;">
                                                        <button type="submit" class="btn btn-rounded btn-brand">Edit</button>
                                                        <button type="submit" class="btn btn-rounded btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
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
                                                <th class="border-0 align-middle" rowspan="2">action</th>
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
                                                <td>
                                                    <form method="POST" action="" style="margin:0;">
                                                        <button type="submit" class="btn btn-rounded btn-brand">Edit</button>
                                                        <button type="submit" class="btn btn-rounded btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
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
                                                <th class="border-0 align-middle" rowspan="2">action</th>
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
                                                <td>
                                                    <form method="POST" action="" style="margin:0;">
                                                        <button type="submit" class="btn btn-rounded btn-brand">Edit</button>
                                                        <button type="submit" class="btn btn-rounded btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
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
                                                <th class="border-0 align-middle" rowspan="2">action</th>
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
                                                <td>
                                                    <form method="POST" action="" style="margin:0;">
                                                        <button type="submit" class="btn btn-rounded btn-brand">Edit</button>
                                                        <button type="submit" class="btn btn-rounded btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
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
                                                <th class="border-0 align-middle" rowspan="2">action</th>
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
                                                <td>
                                                    <form method="POST" action="" style="margin:0;">
                                                        <button type="submit" class="btn btn-rounded btn-brand">Edit</button>
                                                        <button type="submit" class="btn btn-rounded btn-danger">Delete</button>
                                                    </form>
                                                </td>
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

@endsection