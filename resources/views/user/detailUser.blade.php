{{-- @dd($detail) --}}

@extends('layouts.adminLte')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row my-5 justify-content-center">
        <div class="col-sm-4 text-center">
          <h1>Profile user : {{ $user->name }}</h1>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="row">
                    <div class="col-3">
                        <a href="/users64" class="btn btn-dark btn-sm">Back</a>
                    </div>
                  </div>
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="/img/{{ $user->foto }}"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">{{ $user->name }}</h3>

              <p class="text-muted text-center">{{ $user->email }}</p>

              <div class="row">
                <div class="col">
                    <a href="/deleteUser64/{{ $user->id }}" class="btn btn-danger btn-block btn-sm">Delete user</a>
                </div>
                <div class="col">
                    @if ($detail)
                    <a href="/detailDataUser64/{{ $user->id }}" class="btn btn-info btn-block btn-sm">Detail user</a>
                    @else
                    <a href="#" class="btn btn-light btn-block btn-sm" onclick="alert('User belum melengkapi data')">Detail user</a>
                    @endif
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
