@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Data Divisi</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/divisis/{{ $divisi->id }}">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nama</label>
      <input type="text" class="form-control @error('name')is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $divisi->name) }}">
      @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="row justify-content-between">
        <div class="col-4">
            <a href="/dashboard/divisis" class="btn btn-success"><span data-feather="chevrons-left"></span> Kembali</a>
        </div>
        <div class="col-4">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
    </form>
</div>
    
@endsection