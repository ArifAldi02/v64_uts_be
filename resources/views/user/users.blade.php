@extends('layouts.adminLte')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Daftar User</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="card card-solid">
      <div class="card-body pb-0">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Success</h5>
            {{ $message }}
        </div>
        @endif
        <div class="row">
        @foreach ($users as $user)
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
            <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                @if ($user->is_aktif)
                    User approved
                @else
                    User not apporoved
                @endif
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-12 text-center mb-3">
                      <img src="/img/{{ $user->foto }}" alt="foto user" class="img-circle img-fluid" width="200px" height="200px">
                    </div>
                    <div class="col-12 text-center">
                      <h2 class="lead"><b>{{ $user->name }}</b></h2>
                      <p class="text-muted text-sm">{{ $user->email }}</p>
                    </div>
                  </div>
                </div>
                <div class="card-footer" style="margin-top: -30px">
                  <div class="text-right">
                    @if ($user->is_aktif)
                    <a href="/detailUser64/{{ $user->id }}" class="btn btn-sm btn-dark btn-block">Detail</a>
                    @else
                    <a href="/approveUser64/{{ $user->id }}" class="btn btn-sm btn-danger btn-block">Approve</a>
                    @endif
                  </div>
                </div>
              </div>
            </div>
        @endforeach
      </div>
    </div>

  </section>

@endsection
