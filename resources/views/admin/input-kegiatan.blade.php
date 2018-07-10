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
            <h3 class="page-header"><i class="fa fa-file-text"></i> Input - Kegiatan</h3>
          </div>
          <div class="col-lg-10">
              <div class="panel panel-default">
                  <div class="panel-heading">Kegiatan</div>
                  <div class="panel-body">
                      <div class="row">
                        <form>
                          <div class="col-md-8">
                            <div class="panel panel-default">
                              <div class="panel-heading">Title</div>
                              <div class="panel-body">
                                <div class="form-group">
                                  <input class="form-control" type="text" name="title">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="panel panel-default">
                              <div class="panel-heading">Text</div>
                              <div class="panel-body">
                                <div class="form-group">
                                  <textarea class="form-control" rows="10" name="text"></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="panel panel-default">
                              <div class="panel-heading">Image</div>
                              <div class="panel-body">
                                <div class="form-group">
                                  <input class="form-control" type="file" name="img">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-8">
                            <button class="btn btn-info btn-block" type="submit">Submit</button>
                          </div>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </section>
    </section>
@endsection