@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Berita Acara</h1>
</div>

<div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Nomor Arsip</th>
          <th scope="col">Perusahaan</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($beritaacaras as $beritaAcara)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $beritaAcara->tanggal_kesepakatan }}</td>
          <td>{{ $beritaAcara->nomor_surat }}</td>
          <td>{{ $beritaAcara->perusahaan->name }}</td>
          <td>
            <a href="/dashboard/buatberitaacaras/{{ $beritaAcara->id }}" class="badge bg-primary" ><span data-feather="eye"></span></a>
            <a href="/dashboard/buatberitaacaras/{{ $beritaAcara->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>
  
@endsection