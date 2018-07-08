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
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
          <div class="col-lg-12">
              <div class="panel panel-default">
                  <div class="panel-heading"></div>
                  <div class="panel-body">
                      <h1>Selamat Datang!</h1>
                  </div>
              </div>
          </div>
        </div>
      </section>
    </section>
@endsection