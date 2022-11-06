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
              <h6 class="profile-username text-center mt-2">UPDATE DATA</h6>

              <div class="row justify-content-center">
                <div class="col-md-8 mt-2">
                  <div class="card card-primary card-outline">
                    <form action="/updateDataProses64" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Alamat</label>
                          <input type="text" class="form-control" name="alamat" placeholder="Alamat" required value="{{ Auth::user()->detail_data->alamat }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tempat lahir</label>
                          <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat lahir" required value="{{ Auth::user()->detail_data->tempat_lahir }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tanggal lahir</label>
                          <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal lahir" required value="{{ Auth::user()->detail_data->tanggal_lahir }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">Agama</label>
                          <select class="form-control" name="id_agama" required>
                            <option selected disabled>Pilih agama</option>
                            @foreach ($agamas as $agama)
                            <option value="{{ $agama->id }}">{{ $agama->nama_agama }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Umur</label>
                            <input type="text" class="form-control" name="umur" placeholder="Umur" required value="{{ Auth::user()->detail_data->umur }}">
                        </div>

                      <div class="card-footer">
                        <button type="submit" class="btn btn-info btn-sm">Update data</button>
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
