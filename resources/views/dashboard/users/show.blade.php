@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Detail Akun</h1>
</div>

    <div class="container">
        <div class="row my-3">
            <div class="col-lg-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-lg-8">
                  <h5>{{ $user->name }}</h5>
                    <div class="row g-0">
                        <div class="col-lg-4">
                            <li class="list-group-item">Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</li>
                            <li class="list-group-item">Divisi &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</li>
                            <li class="list-group-item">Email Address &nbsp;:</li>
                            <hr class="divider">
                            <a href="/dashboard/users" class="btn btn-success"><span data-feather="chevrons-left"></span> Kembali</a>
                        </div>
                        <div class="col-lg-8">
                            <li class="list-group-item">{{ $user->username }}</li>
                            <li class="list-group-item">{{ $user->divisi->name }}</li>
                            <li class="list-group-item">{{ $user->email }}</li>
                            <hr class="divider">
                            <ul>
                                <a href="/dashboard/users/{{ $user->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit Akun</a>
                                <form action="/dashboard/users/{{ $user->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')"><span data-feather="user-x"></span> Hapus Akun</button>
                                </form>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection