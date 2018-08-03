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
            <h3 class="page-header"><i class="fa fa-file-text"></i> Input - Artikel</h3>
          </div>
          <div class="col-lg-10">
              <div class="panel panel-default">
                  <div class="panel-heading">Artikel</div>
                  <div class="panel-body">
                      <div class="row">
                        <form class="" action="{{route('artikel.update', $b->id)}}" method="POST" enctype="multipart/form-data">            
                          {{ csrf_field() }}
                          {{ method_field('PUT') }}
                          <div class="col-md-8">
                            <div class="panel panel-default">
                              <div class="panel-heading">Title</div>
                              <div class="panel-body">
                                <div class="form-group">
                                    <input type="text" id="title" name="title" class="form-control" value="{{$b->title}}">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="panel panel-default">
                              <div class="panel-heading">Text</div>
                              <div class="panel-body">
                                <div class="form-group">
                                  <textarea id="froala-editor" class="form-control" name="text">{{$b->text}}</textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="panel panel-default">
                              <div class="panel-heading">Image</div>
                              <div class="panel-body">
                                <div class="form-group">
                                    <img src="{{asset('uploads/images')}}/{{$b->photo_path}}" alt="{{$b->photo_path}}" style="height: 400px" class="img-responsive">
                                  <input class="form-control" type="file" name="img">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-8">
                            <button  type="submit" name="button" class="btn btn-info btn-block" type="submit">Submit</button>
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