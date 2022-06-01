@extends('backend/layouts.template')

@section('content')
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Dashboard</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Total Transaksi</h3>
                    </div>
                    {{-- {{$transaksi}} --}}
                    <div>
                        <hr class="mt-0 mb-0">
                    </div>
                    <div class="card-body text-center ">
                        {{-- <ul class="list-inline d-flex justify-content-center align-items-center mb-0">
                            <li class="me-4">
                                <h6 class="text-info"><i class="fa fa-circle font-10 me-2 "></i> {{$donaturs}}</h6>
                            </li>
                            <li class="me-4">
                                <h6 class=" text-primary"><i class="fa fa-circle font-10 me-2"></i>Desktop</h6>
                            </li>
                            <li class="me-4">
                                <h6 class=" text-success"><i class="fa fa-circle font-10 me-2"></i>Tablet</h6>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-center">Selamat Datang {{Auth::user()->name}}! Tetap Semangat 🔥</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
