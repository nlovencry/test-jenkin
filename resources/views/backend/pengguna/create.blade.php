@extends('backend/layouts.template')
@section('content')
<!--main content start-->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">User</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form User</h4>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There where some problems with your input.<br><br>
                                    <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form">
                                <form class="form-validate form-horizontal" id="pendidikan"
                                action="{{ route('admin.pengguna.update', $user->id)}}" method="post">
                                {!! csrf_field() !!}
                                {!! method_field('PUT')!!}
                                <input type="hidden" name="id" value="{{ $user->id}}" disabled>
                                <div class="form-group">
                                    <label for="cname" class="control-label col-lg-2">Name <span class="require">*</span></label>
                                    <div class="col-lg-10">
                                    <input class="form-control" type="text" name="nama" id="nama" minlenght="5" value="{{ isset($user) ? $user->name : ''}}" disabled />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="curl" class="control-label col-lg-2">Username <span class="require">*</span></label>
                                    <div class="col-lg-10">
                                    <input class="form-control" type="text" name="username" id="tahun_masuk" value="{{ $user->username}}" disabled />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="curl" class="control-label col-lg-2">Email <span class="require">*</span></label>
                                    <div class="col-lg-10">
                                    <input class="form-control" type="text" name="email" id="tahun_masuk" value="{{ $user->email}}" disabled />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="curl" class="control-label col-lg-2">Role <span class="require">*</span></label>
                                    <div class="col-lg-10">
                                    <input class="form-control" type="text" name="role" id="tahun_lulus" value="{{$user->role}}" require />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    <a href="{{ route('admin.pengguna.index') }}"><button class="btn btn-default" type="button">Cancel</button></a>
                                    </div>
                                </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
@endsection
