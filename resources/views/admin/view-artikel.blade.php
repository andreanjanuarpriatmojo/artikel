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
            <h3 class="page-header"><i class="fa fa-eye"></i> View</h3>
          </div>
          <div class="col-lg-8">
              <div class="panel panel-default">
                  <div class="panel-heading">View</div>
                  <div class="panel-body">
                      <div class="container">
                        <div style="text-align: justify;">
                          <h2 >{{$b->title}}</h2>
                          <br>
                          <img src="{{asset('storage/app/images')}}/{{$blogs->photo_path}}" alt="{{$blogs->photo_path}}" style="height: 400px" class="img-responsive">
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

<script type="text/javascript">
  


</script>