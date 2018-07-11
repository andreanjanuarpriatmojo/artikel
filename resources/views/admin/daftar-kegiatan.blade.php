@extends('layouts.admin')

@section('title')
Admin Page
@endsection

@section('content')
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Daftar - Kegiatan</h3>
          </div>
          <div class="col-lg-12">
              <div class="panel panel-default">
                  <div class="panel-heading">Kegiatan</div>
                  <div class="panel-body">
                      <div class="row">
                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Admin</th>
                                <th></th>
                                <th></th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>29</td>
                                <td>Pakan Ternak</td>
                                <td>Ana</td>
                                <td>
                                  <button type="button" class="btn btn-primary btn-block">View</button>
                                </td>
                                <td>
                                  <button type="button" class="btn btn-success btn-block">Edit</button>
                                </td>
                                <td>
                                  <button type="button" class="btn btn-danger btn-block">Delete</button>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </section>
    </section>
@endsection