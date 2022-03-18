@extends('layouts.master')
@section('links') 
<li class="menu-header">Dashboard</li>
<li ><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
<li class="menu-header">Content</li>
@role('admin|kasir')
<li class="active"><a class="nav-link" href="{{route ('show-member')}}"><i class="fas fa-user"></i> <span>Register Member</span></a></li>
@endrole
@role('admin')
<li ><a class="nav-link" href="{{route ('show-outlet')}}"><i class="fas fa-home"></i> <span>Outlet Laundry</span></a></li>
<li ><a class="nav-link" href="{{route ('show-paket')}}"><i class="fas fa-box"></i> <span>Paket Laundry</span></a></li>
@endrole
@role('admin|kasir|owner')
<li ><a class="nav-link" href="{{ route('show-transaksi') }}"><i class="fas fa-file-invoice-dollar"></i> <span>Transaksi</span></a></li>
@endrole
@role('admin')
<li ><a class="nav-link" href="{{ route ('show-user') }}"><i class="fas fa-users-cog"></i></i> <span>User</span></a></li>
@endrole
@role('owner|admin|kasir')
<li ><a class="nav-link" href="{{route('show-laporan')}}"><i class="fas fa-clipboard-list"></i></i> <span>Laporan Excel</span></a></li>
@endrole
@endsection
@section('konten')
<div class="section-header">
    <h1>Laporan</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
      <div class="breadcrumb-item"><a href="{{route ('show-laporan')}}">Laporan</a></div>
    </div>
  </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <hr>
                <table class="table table-striped table-bordered">
                  <tr>
                    <th>Laporan</th>
                    <th>Download</th>
                  </tr>
                  
                  <tr>
                    <td>Member</td>
                    <td><i class="fas fa-file-excel"></i><a href="{{route ('export-member')}}"> member.xlsx</a></td>
                  </tr>
                  <tr>
                    <td>Outlet</td>
                    <td><i class="fas fa-file-excel"></i><a href="{{route ('export-outlet')}}">outlet.xlsx</a></td>
                  </tr>
                  <tr>
                    <td>Paket</td>
                    <td><i class="fas fa-file-excel"></i><a href="{{route ('export-paket')}}">paket.xlsx</a></td>
                  </tr>
                  <tr>
                    <td>Transaksi</td>
                    <td><i class="fas fa-file-excel"></i><a href="{{route ('export-transaksi')}}">transaksi.xlsx</a></td>
                  </tr>
                  <tr>
                    <td>User</td>
                    <td><i class="fas fa-file-excel"></i><a href="{{route ('export-user')}}">user.xlsx</a></td>
                  </tr>
                </table>
            </div>
</div>
@endsection