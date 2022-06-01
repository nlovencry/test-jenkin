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
        <h3 class="page-title mb-0 p-0">Kerusakan</h3>
        <div class="d-flex align-items-center">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Kerusakan</li>
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
                      <h4 class="card-title">Tabel Karusakan</h4>
                      <div class="panel-body">
                        @if ($message = Session::get('success'))
                          <div class="alert alert-success">
                            <p>{{ $message }}</p>
                          </div>
                        @endif
                        <a href="{{ route('admin.kerusakan.create') }}">
                          <button class="btn btn-primary" type="button"><i class="fa fa-plus"> Tambah</i></button>
                        </a><br><br>
                      <div class="table-responsive">
                        <table class="table table-striped table-advance table-hover">
                          <tbody>
                            <tr>
                              <th><i class="icon_briefcase"></i> Jenis Kerusakan</th>
                              <th><i class="icon_briefcase"></i> Kategori</th>
                              <th><i class="icon_briefcase"></i> Harga</th>
                              <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                            @foreach ($kerusakan as $row)
                              <tr>
                                <td>{{$row->jenis_kerusakan}}</td>
                                <td>{{$row->category->name}}</td>
                                <td>{{$row->harga}}</td>
                                <td>
                                  <div class="btn-group">
                                    <form action="{{ route('admin.kerusakan.destroy', $row->id)}}" method="POST">
                                      <a href=" {{ route('admin.kerusakan.edit' ,$row->id) }} " class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger" name="button"
                                      onclick="return confirm('Apakah anda yakin menghapus data ini ?')">
                                        <i class="fa fa-trash"></i>
                                      </button>
                                    </form>
                                  </div>
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- ============================================================== -->
      <!-- End PAge Content -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right sidebar -->
      <!-- ============================================================== -->
      <!-- .right-sidebar -->
      <!-- ============================================================== -->
      <!-- End Right sidebar -->
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
