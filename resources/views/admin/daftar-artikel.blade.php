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
            <h3 class="page-header"><i class="fa fa-laptop"></i> Daftar - Artikel</h3>
          </div>
          <div class="col-lg-12">
              <div class="panel panel-default">
                  <div class="panel-heading">Artikel</div>
                  <div class="panel-body">
                      <div class="row">
                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Admin</th>
                                <th>Create Date</th>
                                <th>Update Date</th>
                                <th></th>
                                <th></th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>

                              @foreach ($b as $b)
                              <tr>
                                <td>
                                    {{$b->id}}
                                </td>
                                <td>
                                    {{$b->title}}
                                </td>
                                <td>Ana</td>
                                <td>{{date('d-m-Y', strtotime($b->created_at))}}</td>
                                <td>{{date('d-m-Y', strtotime($b->updated_at))}}</td>
                                <td>
                                  <a href="{{ url('admin/artikel',['id' => $b->id] )}}" type="button" class="btn btn-primary btn-block"> View
                                </td>
                                <td>
                                  <button type="button" class="btn btn-success btn-block">Edit</button>
                                </td>
                                <td>
                                  <form class="" action="{{route('artikel.destroy', $b->id)}}" method="post">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-block">Hapus</button>

                                  </form>
                                </td>
                              @endforeach
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