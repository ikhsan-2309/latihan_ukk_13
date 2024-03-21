@extends('layouts.app')

@section('content')
  <section class="section">
    <div class="card">
      <div class="card-header">
        <div class="card-title d-flex justify-content-between align-items-center">
          <h5>Pelanggan</h5>
          <div class="d-flex ">
            <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
              data-bs-target="#exampleModalCenter"><i class="bi bi-plus"></i>Pelanggan</button>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table" id="table1">
            <thead>
              <tr>
                <th>No</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th><i class="bi bi-gear"></i></th>
              </tr>
            </thead>
            <tr>
              <td>Graiden</td>
              <td>076 4820 8838</td>
              <td>Offenburg</td>
              <td>
                <span class="badge bg-success">Active</span>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Pelanggan
            </h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <i data-feather="x"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="row match-height">
              <div class="col-md-12 col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <form class="form form-horizontal">
                        <div class="form-body">
                          <div class="row">
                            <div class="col-md-4">
                              <label for="first-name-horizontal">Nama Pelanggan</label>
                            </div>
                            <div class="col-md-8 form-group">
                              <input type="text" id="first-name-horizontal" class="form-control" name="fname"
                                placeholder="Nama Pelanggan">
                            </div>
                            <div class="col-md-4">
                              <label for="email-horizontal">Email</label>
                            </div>
                            <div class="col-md-8 form-group">
                              <input type="email" id="email-horizontal" class="form-control" name="email-id"
                                placeholder="Email">
                            </div>
                            <div class="col-md-4">
                              <label for="contact-info-horizontal">Mobile</label>
                            </div>
                            <div class="col-md-8 form-group">
                              <input type="number" id="contact-info-horizontal" class="form-control" name="contact"
                                placeholder="Mobile">
                            </div>
                            <div class="col-md-4">
                              <label for="password-horizontal">Password</label>
                            </div>
                            <div class="col-md-8 form-group">
                              <input type="password" id="password-horizontal" class="form-control" name="password"
                                placeholder="Password">
                            </div>
                            <div class="col-sm-12 d-flex justify-content-end">
                              <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                  <i class="bx bx-x d-block d-sm-none"></i>
                                  <span class="d-none d-sm-block">Close</span>
                                </button>
                                <button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                                  <i class="bx bx-check d-block d-sm-none"></i>
                                  <span class="d-none d-sm-block">Accept</span>
                                </button>
                              </div>
                            </div>
                          </div>
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
    </div>
  </section>
@endsection
