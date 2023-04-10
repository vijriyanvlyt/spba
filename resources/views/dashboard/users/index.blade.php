@extends('dashboard.layouts.main')

@section('container')

@if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               {{ session('status') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
@endif

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Halaman Kelola User</h1>
</div>
@endsection