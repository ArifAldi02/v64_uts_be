@extends('layouts.adminLte')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row my-3 justify-content-center">
        <div class="col-sm-6 text-center">
          <h1>Profile user</h1>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="row">
                    <div class="col-3">
                        <a href="/profile64" class="btn btn-dark btn-sm">Back</a>
                    </div>
                  </div>
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="/img/{{ Auth::user()->foto }}"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

              <p class="text-muted text-center">{{ Auth::user()->email }}</p>

              <div class="row justify-content-end">
                <div class="col-3">
                    <a href="/updateData64" class="btn btn-warning btn-sm">Update data</a>
                </div>
              </div>

              @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible mt-3">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Success</h5>
                    {{ $message }}
                </div>
                @endif
              <strong>Alamat</strong>
                <p class="text-muted">
                  {{ Auth::user()->detail_data->alamat }}
                </p><hr>
              <strong>Tempat lahir</strong>
                <p class="text-muted">
                  {{ Auth::user()->detail_data->tempat_lahir }}
                </p><hr>
              <strong>Tanggal lahir</strong>
                <p class="text-muted">
                  {{ Auth::user()->detail_data->tanggal_lahir }}
                </p><hr>
              <strong>Agama</strong>
                <p class="text-muted">
                  {{ Auth::user()->detail_data->agama->nama_agama }}
                </p><hr>
              <strong>Umur</strong>
                <p class="text-muted">
                  {{ Auth::user()->detail_data->umur }}
                </p><hr>
                <div class="col text-center">
                    <strong>Foto KTP</strong>
                    <p class="text-muted">
                      <img src="/img/{{ Auth::user()->detail_data->foto_ktp }}" alt="foto ktp" width="400px" height="250px" class="rounded">
                    </p>
                </div>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
