@extends('layouts.artikel')

@section('content')

<!--start of Kegiatan-->
<section id="Kegiatan">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @foreach ($c as $data)
                <div class="row">
                    <div class="col-md-6 zero_mp">
                        <div class="Kegiatan_item">
                            <div class="Kegiatan_img">
                                <img src="{{asset('uploads/images')}}/{{$data->photo_path}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 zero_mp">
                        <div class="Kegiatan_item">
                            <div class="Kegiatan_text text-left">
                                <h4>{{$data->title}}</h4></a>
                                <p>
                                    <span class="clock"><i class="fa fa-clock-o"></i></span>
                                    <span class="time">{{date('d-m-Y', strtotime($data->updated_at))}}</span>
                                </p>
                                <p>{{ strip_tags(str_limit($data->text, 80)) }}</p>
                                <br>
                                <a href="{{ url('blog',['id' => $data->id] )}}" class="Kegiatan_btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                @endforeach
                {!! $c->render() !!}
            </div>
            <!--End of col-md-8-->
            <div class="col-md-4">
                <div class="Kegiatan_news_text">
                    <h4>Artikel Terbaru</h4>
                    <br>
                    <div class="Kegiatan_news">
                        <div class="Kegiatan_single_item fix">
                            <div class="Kegiatan_news_img floatleft">
                                <img src="{{asset('uploads/images')}}/{{$d[0]->photo_path}}" alt="">
                            </div>
                            <div class="Kegiatan_news_text">
                                <a href="{{ url('blog',['id' => $d[0]->id] )}}"><h4>{{$d[0]->title}}</h4></a>
                                <p>{{ strip_tags(str_limit($d[0]->text, 30)) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="Kegiatan_news">
                        <div class="Kegiatan_single_item fix">
                            <div class="Kegiatan_news_img floatleft">
                                <img src="{{asset('uploads/images')}}/{{$d[1]->photo_path}}" alt="">
                            </div>
                            <div class="Kegiatan_news_text">
                                <a href="{{ url('blog',['id' => $d[1]->id] )}}"><h4>{{$d[1]->title}}</h4></a>
                                <p>{{ strip_tags(str_limit($d[1]->text, 30)) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="Kegiatan_news">
                        <div class="Kegiatan_single_item fix">
                            <div class="Kegiatan_news_img floatleft">
                                <img src="{{asset('uploads/images')}}/{{$d[2]->photo_path}}" alt="">
                            </div>
                            <div class="Kegiatan_news_text">
                                <a href="{{ url('blog',['id' => $d[2]->id] )}}"><h4>{{$d[2]->title}}</h4></a>
                                <p>{{ strip_tags(str_limit($d[2]->text, 30)) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="Kegiatan_news">
                        <div class="Kegiatan_single_item fix">
                            <div class="Kegiatan_news_img floatleft">
                                <img src="{{asset('uploads/images')}}/{{$d[3]->photo_path}}" alt="">
                            </div>
                            <div class="Kegiatan_news_text">
                                <a href="{{ url('blog',['id' => $d[3]->id] )}}"><h4>{{$d[3]->title}}</h4></a>
                                <p>{{ strip_tags(str_limit($d[3]->text, 30)) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="Kegiatan_news">
                        <div class="Kegiatan_single_item fix">
                            <div class="Kegiatan_news_img floatleft">
                                <img src="{{asset('uploads/images')}}/{{$d[4]->photo_path}}" alt="">
                            </div>
                            <div class="Kegiatan_news_text">
                                <a href="{{ url('blog',['id' => $d[4]->id] )}}"><h4>{{$d[4]->title}}</h4></a>
                                <p>{{ strip_tags(str_limit($d[4]->text, 30)) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of col-md-4-->
        </div>
        <!--End of row-->
    </div>
    <!--End of container-->
</section>
<!--end of Kegiatan-->

@endsection