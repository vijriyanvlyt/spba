@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Detail Berita Acara</h1>
</div>

    <div class="container">
        <div class="row my-3">
            <div>
                  <h5>{{ $beritaAcara->nomor_surat }}</h5>
                    <div class="row g-0">
                        <div class="col-lg-4">
                            <li class="list-group-item">Tanggal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</li>
                            <li class="list-group-item">Nomor Surat &nbsp;&nbsp;:</li>
                            <li class="list-group-item">Divisi &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</li>
                            <li class="list-group-item">Perusahaan &nbsp;&nbsp;&nbsp;&nbsp;:</li>
                            <li class="list-group-item">Hasil &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</li>
                        </div>
                        <div class="col-lg-8">
                            <li class="list-group-item">{{ $beritaAcara->tanggal_kesepakatan }}</li>
                            <li class="list-group-item">{{ $beritaAcara->nomor_surat }}</li>
                            <li class="list-group-item">{{ $beritaAcara->divisi->name }}</li>
                            <li class="list-group-item">{{ $beritaAcara->perusahaan->name }}</li>
                            <li class="list-group-item">{{ $beritaAcara->hasil }}</li>
                        </div>
                    </div>
                    <hr class="divider">
                    <div class="row justify-content-between">
                        <div class="col-4">
                            <a href="/dashboard/beritaAcaras" class="btn btn-warning"><span data-feather="chevrons-left"></span> Kembali</a>
                        </div>
                        <div class="col-4">
                            <div class="row justify-content-end">
                                <div class="col-6">
                                    <a href="#" class="btn btn-success"><span data-feather="printer"></span> Print Data</a>
                                </div>
                                <div class="col-6">
                                    <form action="/dashboard/beritaAcaras/{{ $beritaAcara->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"><span data-feather="trash-2"></span> Hapus Data</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection