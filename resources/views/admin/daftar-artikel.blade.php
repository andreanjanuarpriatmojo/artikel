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
                                <th>No</th>
                                <th>Title</th>
                                <th>Admin</th>
                                <th>Create Date</th>
                                <th>Update Date</th>
                                <th></th>
                                <th></th>
                                <th><a type="button" class="btn btn-success btn-block" href="{{url('admin/artikel/create')}}">Tambah</a></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $no = $b->firstItem() - 1; ?>
                              @foreach ($b as $data)
                              <?php $no++; ?>
                              <tr>
                                <td>{{$no}}</td>
                                <td>{{$data->title}}</td>
                                <td>{{$data->username}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>{{$data->updated_at}}</td>
                                <td>
                                  <a href="{{ url('admin/artikel',['id' => $data->id] )}}" type="button" class="btn btn-primary btn-block"> View
                                </td>
                                <td>
                                  <a href="{{ url('admin/artikel/edit',['id' => $data->id])}}" type="button" class="btn btn-warning btn-block"> Edit
                                </td>
                                <td>
                                  <form class="" action="{{route('artikel.destroy', $data->id)}}" method="post">
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
                      {!! $b->render() !!}
                  </div>
              </div>
          </div>
        </div>
      </section>
    </section>
@endsection