@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Arsip Berita Acara Client {{ $perusahaan->name }}</h1>
</div>

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nomor Surat</th>
        <th scope="col">Divisi</th>
        <th scope="col">Waktu</th>
        <th scope="col">File</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($beritaAcaras as $beritaAcara)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $beritaAcara->nomor_surat }}</td>
        <td>{{ $beritaAcara->divisi->name }}</td>
        <td>{{ $beritaAcara->created_at }}</td>
        <td>
          <a href="/dashboard/byClients/{{ $beritaAcara->id }}" class="badge bg-primary" ><span data-feather="file"></span></a>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
  
  <a href="/dashboard/byClients" class="btn btn-warning"><span data-feather="chevrons-left"></span> Kembali</a>
</div>

@endsection