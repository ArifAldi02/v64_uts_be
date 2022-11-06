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
                        <a href="/profile64" class="btn btn-dark btn-sm">Back</a>
                    </div>
                  </div>
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="/img/{{ Auth::user()->foto }}"
                     alt="User profile picture">
              </div>
              <h6 class="profile-username text-center mt-2">UPDATE PASSWORD</h6>

              <div class="row justify-content-center">
                <div class="col-md-8 mt-2">
                  <div class="card card-primary card-outline">
                    <form action="/updatePasswordProses64/{{ Auth::user()->id }}" method="post" >
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Password</label>
                          <input type="text" class="form-control" name="alamat" placeholder="Password" required>
                        </div>

                      <div class="card-footer">
                        <button type="submit" class="btn btn-info btn-sm">Update password</button>
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
