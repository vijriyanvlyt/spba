@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Arsip Berita Acara by Divisi</h1>
</div>

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Divisi</th>
        <th scope="col">Folder</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($divisis as $divisi)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $divisi->name }}</td>
        <td>
          <a href="/dashboard/byDivisis/{{ $divisi["id"]}}" class="badge bg-success" ><span data-feather="folder"></span></a>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>

@endsection