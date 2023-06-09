@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Halaman Kelola Client</h1>
</div>

@if(session('status'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('status') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<div class="table-responsive">
  <a href="/dashboard/perusahaans/create" class="btn btn-primary mb-3"><span data-feather="user-plus"></span> Tambah Data</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">No. Telepon</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($perusahaans as $perusahaan)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $perusahaan->name }}</td>
        <td>{{ $perusahaan->alamat }}</td>
        <td>{{ $perusahaan->no_telp }}</td>
        <td>
          <a href="/dashboard/perusahaans/{{ $perusahaan->id }}" class="badge bg-primary" ><span data-feather="eye"></span></a>
          <a href="/dashboard/perusahaans/{{ $perusahaan->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>

@endsection