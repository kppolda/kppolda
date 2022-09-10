@extends('layout/sidebar-admin')

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

                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Jumlah Polres</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1">@foreach ($users as $polres)
                                        @if ($loop->remaining===0)
                                        {{$loop->count}}
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
                                        @if ($loop->remaining===0)
                                        {{$loop->count}}
                                        @endif
                                        @endforeach</h1>
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
                                        @if ($loop->remaining===0)
                                        {{$loop->count}}
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
                    {{-- <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Polres</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                <table class="table" id="mauexport">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">id</th>
                                                <th class="border-0">nama polres</th>
                                                <th class="border-0">username</th>
                                                <th class="border-0">email</th>
                                                <th class="border-0">password</th>
                                                <th class="border-0">action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Polres Kediri Kota</td>
                                                <td>Kediri_Kota</td>
                                                <td>kedirikota@gmail.com</td>
                                                <td>k3D1r1_k0T4</td>
                                                <td class="d-flex">
                                                    <form method="POST" action="" style="margin:0;">
                                                        <a href="/home/id" class="btn btn-rounded btn-info">Info</a>
                                                        <button type="submit" class="btn btn-rounded btn-warning">Edit</button>
                                                        <button type="submit" class="btn btn-rounded btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
