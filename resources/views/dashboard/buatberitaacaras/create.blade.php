@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Buat Berita Acara</h1>
</div>


    <form class="row g-3" method="post" action="/dashboard/uploadarsip">
    @csrf
    <div class="col-md-6">
      <label for="tanggal_kesepakatan" class="form-label">Tanggal</label>
      <input type="date" class="form-control @error('tanggal_kesepakatan')is-invalid @enderror" id="tanggal_kesepakatan" name="tanggal_kesepakatan" required autofocus value="{{ old('tanggal_kesepakatan') }}">
      @error('tanggal_kesepakatan')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="col-md-6">
      <label for="nomor_surat" class="form-label">Nomor Arsip</label>
      <input type="text" class="form-control @error('nomor_surat')is-invalid @enderror" id="nomor_surat" name="nomor_surat" required value="{{ old('nomor_surat') }}">
      @error('nomor_surat')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="col-md-6">
        <label for="divisi" class="form-label">Divisi</label>
        <select class="form-select" name="divisi_id">
        @foreach ($divisis as $divisi)
                <option value="{{ $divisi->id }}">{{ $divisi->name }}</option>    
        @endforeach
        </select>
    </div>
    <div class="col-md-6">
        <label for="perusahaan" class="form-label">Nama Perusahaan / Client</label>
        <select class="form-select" name="perusahaan_id">
        @foreach ($perusahaans as $perusahaan)
            @if (old('perusahaan_id') == $perusahaan->id)
                <option value="{{ $perusahaan->id }}" selected>{{ $perusahaan->name }}</option>    
            @else
                <option value="{{ $perusahaan->id }}">{{ $perusahaan->name }}</option> 
            @endif
        @endforeach
        </select>
    </div>
    <div class="col-12">
        <label for="hasil" class="form-label">Hasil Kesepakatan</label>
        <textarea class="form-control @error('hasil')is-invalid @enderror" id="hasil" name="hasil" required value="{{ old('hasil') }}"></textarea>
        @error('hasil')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Buat Berita Acara</button>
    </div>
    </form>

    
@endsection