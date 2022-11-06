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
              <h6 class="profile-username text-center mt-2">REGISTER</h6>

              <div class="row justify-content-center">
                <div class="col-md-8 mt-2">
                  <div class="card card-primary card-outline">
                    <form action="/registerProses64" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama lengkap</label>
                          <input type="text" class="form-control" name="name" placeholder="Nama" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email</label>
                          <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Password</label>
                          <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">Foto profil</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile" name="foto" required>
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                          </div>
                        </div>

                      <div class="card-footer">
                        <button type="submit" class="btn btn-info btn-sm">Register</button>
                        <a href="/login64" class="btn btn-light btn-sm">Login</a>
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
