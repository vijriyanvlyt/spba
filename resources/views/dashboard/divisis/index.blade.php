@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Halaman Kelola Divisi</h1>
</div>

@if(session('status'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('status') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<div class="table-responsive">
  <a href="/dashboard/divisis/create" class="btn btn-primary mb-3"><span data-feather="user-plus"></span> Tambah Data</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Divisi</th>
        <th scope="col">Jumlah Karyawan</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($divisis as $divisi)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $divisi->name }}</td>
        <td>{{ $divisi->user->count('pivot.divisi_id') }}</td>
        <td>
          <a href="/dashboard/divisis/{{ $divisi->id }}" class="btn btn-primary" ><span data-feather="eye"></span></a>
          <a href="/dashboard/divisis/{{ $divisi->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span></a>
          <form action="/dashboard/divisis/{{ $divisi->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"><span data-feather="trash-2"></span></button>
        </form>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>

@endsection