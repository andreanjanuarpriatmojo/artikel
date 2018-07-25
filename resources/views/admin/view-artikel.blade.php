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
            <h3 class="page-header"><i class="fa fa-eye"></i>View</h3>
          </div>
          <div class="col-lg-8">
              <div class="panel panel-default">
                  <div class="panel-heading">{{$b->id}}</div>
                  <div class="panel-body">
                      <div class="container">
                        <div style="text-align: justify;">
                          <h2><b>{{$b->title}}</b></h2>
                          <br>
                          <img src="{{asset('uploads/images')}}/{{$b->photo_path}}" alt="{{$b->photo_path}}" style="height: 400px" class="img-responsive">
                          <br>
                          <p>
                            {{$b->text}}
                          </p>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </section>
    </section>
@endsection