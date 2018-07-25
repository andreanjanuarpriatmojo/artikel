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
            <h3 class="page-header"><i class="fa fa-home"></i> Dashboard</h3>
          </div>
          <div class="col-lg-12">
              <div class="panel panel-default">
                  <div class="panel-heading"></div>
                  <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      <h1>Selamat Datang {{ Auth::user()->name }}!</h1>
                  </div>
              </div>
          </div>
        </div>
      </section>
    </section>
@endsection