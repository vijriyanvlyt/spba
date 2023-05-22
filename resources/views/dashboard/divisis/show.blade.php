@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">{{ $divisi->name }}</h1>
</div>

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Nomor Telepon</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->no_telp }}</td>
        <td>{{ $user->email }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="col-4">
    <a href="/dashboard/divisis" class="btn btn-success"><span data-feather="chevrons-left"></span> Kembali</a>
</div>
</div>

@endsection