@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Arsip Berita Acara by Clients</h1>
</div>

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">No. Telepon</th>
        <th scope="col">Folder</th>
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
          <a href="/dashboard/byClients/{{ $perusahaan["id"]}}" class="badge bg-success" ><span data-feather="folder"></span></a>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>

@endsection