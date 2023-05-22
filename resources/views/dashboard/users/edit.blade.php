@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Akun</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/users/{{ $user->id }}">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nama</label>
      <input type="text" class="form-control @error('name')is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $user->name) }}">
      @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="no_telp" class="form-label">Nomor Telepon</label>
      <input type="text" class="form-control @error('no_telp')is-invalid @enderror" id="no_telp" name="no_telp" required value="{{ old('no_telp', $user->no_telp) }}">
      @error('no_telp')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="divisi" class="form-label">Divisi</label>
      <select class="form-select" name="divisi_id">
        @foreach ($divisis as $divisi)
            @if (old('divisi_id', $user->divisi_id) == $divisi->id)
                <option value="{{ $divisi->id }}" selected>{{ $divisi->name }}</option>    
            @else
                <option value="{{ $divisi->id }}">{{ $divisi->name }}</option> 
            @endif
        @endforeach
      </select>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control @error('email')is-invalid @enderror" id="email" name="email" required value="{{ old('email', $user->email) }}">
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control @error('password')is-invalid @enderror" id="password" name="password" required value="{{ old('email', $user->password) }}">
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="row justify-content-between">
      <div class="col-4">
          <a href="/dashboard/users" class="btn btn-success"><span data-feather="chevrons-left"></span> Kembali</a>
      </div>
      <div class="col-4">
          <button type="submit" class="btn btn-primary">Update</button>
      </div>
  </div>
    </form>
</div>
    
@endsection