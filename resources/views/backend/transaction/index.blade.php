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
        <h3 class="page-title mb-0 p-0">Transaksi</h3>
        <div class="d-flex align-items-center">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Transaksi</li>
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
                      <h4 class="card-title">Tabel Transaksi</h4>
                      <div class="panel-body">
                        @if ($message = Session::get('success'))
                          <div class="alert alert-success">
                            <p>{{ $message }}</p>
                          </div>
                        @endif
                      <div class="table-responsive">
                        <table class="table table-striped table-advance table-hover">
                          <tbody>
                            <tr>
                              <th><i class="icon_briefcase"></i>Faktur</th>
                              <th><i class="icon_briefcase"></i>Kategori</th>
                              <th><i class="icon_briefcase"></i>Merk</th>
                              <th><i class="icon_briefcase"></i> Type</th>
                              <th><i class="icon_briefcase"></i> Kerusakan</th>
                              <th><i class="icon_briefcase"></i> Tanggal</th>
                              <th><i class="icon_briefcase"></i> Waktu</th>
                              <th><i class="icon_briefcase"></i> Alamat</th>
                              <th><i class="icon_briefcase"></i> Total</th>
                              <th><i class="icon_briefcase"></i> Bukti Transaksi</th>
                              <th><i class="icon_briefcase"></i> status</th>
                              <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                            @foreach ($transaction as $row)
                              <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->category->name}}</td>
                                <td>{{$row->merk}}</td>
                                <td>{{$row->type}}</td>
                                <td>{{$row->kerusakan->jenis_kerusakan}}</td>
                                <td>{{$row->tanggal}}</td>
                                <td>{{$row->waktu}}</td>
                                <td>{{$row->alamat}}</td>
                                <td>{{$row->total}}</td>
                                <td><img src="{{asset('bukti_pembayaran/'.$row->bukti_pembayaran)}}" alt="bukti pembayaran" width="100" height="100"></td>
                                <td>{{$row->status}}</td>
                                <td>
                                  <div class="btn-group">
                                    <form action="{{ route('admin.transaction.destroy', $row->id)}}" method="POST">
                                      @csrf
                                      <button type="submit" class="btn btn-danger" name="button"
                                      onclick="return confirm('Apakah anda yakin menghapus data ini ?')">
                                        <i class="fa fa-trash"></i></td>
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
