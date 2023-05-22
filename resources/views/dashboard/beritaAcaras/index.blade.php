@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Halaman Kelola Berita Acara</h1>
</div>

@if(session('status'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('status') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nomor Surat</th>
        <th scope="col">Perusahaan</th>
        <th scope="col">Waktu</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($beritaAcaras as $beritaAcara)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $beritaAcara->nomor_surat }}</td>
        <td>{{ $beritaAcara->perusahaan->name }}</td>
        <td>{{ $beritaAcara->created_at }}</td>
        <td>
          <a href="/dashboard/beritaAcaras/{{ $beritaAcara->id }}" class="badge bg-primary" ><span data-feather="eye"></span></a>
          <a href="#" class="badge bg-success"><span data-feather="upload"></span></a>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>

@endsection