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
                        <a href="/agama64" class="btn btn-dark btn-sm">Back</a>
                    </div>
                  </div>
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="/img/25231.png"
                     alt="User profile picture">
              </div>
              <h6 class="profile-username text-center mt-2">TAMBAH AGAMA</h6>

              <div class="row justify-content-center">
                <div class="col-md-8 mt-2">
                  <div class="card card-primary card-outline">
                    <form action="/createAgama64Proses" method="post" >
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama agama</label>
                          <input type="text" class="form-control" name="nama_agama" placeholder="Nama agama" required>
                        </div>

                      <div class="card-footer">
                        <button type="submit" class="btn btn-info btn-sm">Tambah</button>
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
