@extends('layouts.adminLte')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row my-5 justify-content-center">
        <div class="col-sm-4 text-center">
          <h1>Profile user</h1>
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
                        <a href="/" class="btn btn-dark btn-sm">Back</a>
                    </div>
                  </div>
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="/img/{{ Auth::user()->foto }}"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

              <p class="text-muted text-center">{{ Auth::user()->email }}</p>

              @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Success</h5>
                    {{ $message }}
                </div>
                @endif

              <div class="row">
                <div class="col">
                    <a href="/updatePassword64" class="btn btn-warning btn-block btn-sm">Update password</a>
                </div>
                <div class="col">
                    @if (Auth::user()->detail_data == null)
                        @if (Auth::user()->is_aktif)
                        <a href="/createData64" class="btn btn-info btn-block btn-sm">Lengkapi data</a>
                        @else
                        <a href="#" class="btn btn-light btn-block btn-sm" onclick="alert('Akun anda belum di approve')">Lengkapi data</a>
                        @endif
                    @else
                    <a href="/detailData64" class="btn btn-info btn-block btn-sm">Detail data</a>
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
