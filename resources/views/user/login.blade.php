@extends('layouts.adminLte_login')
@section('content')

  <section class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="row">
                    <div class="col-12">
                        <a href="/" class="btn btn-dark btn-sm">Back</a>
                    </div>
                  </div>
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="/img/25231.png"
                     alt="User profile picture">
              </div>
              <h6 class="profile-username text-center mt-2">LOGIN</h6>

              <div class="row justify-content-center">
                <div class="col-md-8 mt-2">
                    @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Success</h5>
                    {{ $message }}
                </div>
                @endif
                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Error</h5>
                    {{ $message }}
                </div>
                @endif
                  <div class="card card-primary card-outline">
                    <form action="/loginProses64" method="post">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email</label>
                          <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>

                      <div class="card-footer">
                        <button type="submit" class="btn btn-info btn-sm">Login</button>
                        <a href="/register64" class="btn btn-light btn-sm">Register</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
