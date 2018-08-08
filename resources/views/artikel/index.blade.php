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
                    <?php $count = 0; ?>
                    @foreach ($d as $blog)
                    <?php if($count == 3) break; ?>
                    <div class="Kegiatan_news">
                        <div class="Kegiatan_single_item fix">
                            <div class="Kegiatan_news_img floatleft">
                                <img src="{{asset('uploads/images')}}/{{$blog->photo_path}}" alt="">
                            </div>
                            <div class="Kegiatan_news_text">
                                <a href="{{ url('blog',['id' => $blog->id] )}}"><h4>{{$blog->title}}</h4></a>
                                <p>{{ strip_tags(str_limit($blog->text, 30)) }}</p>
                            </div>
                        </div>
                    </div>
                    <?php $count++; ?>
                    @endforeach
                </div>
            </div>
            <!--End of newest-->            
            <div class="col-md-4">
                <div class="Kegiatan_news_text">
                    <h4>Artikel Terpopuler</h4>
                    <br>
                    <?php $count = 0; ?>
                    @foreach ($populer as $pop)
                    <?php if($count == 3) break; ?>
                    <div class="Kegiatan_news">
                        <div class="Kegiatan_single_item fix">
                            <div class="Kegiatan_news_img floatleft">
                                <img src="{{asset('uploads/images')}}/{{$pop->photo_path}}" alt="">
                            </div>
                            <div class="Kegiatan_news_text">
                                <a href="{{ url('blog',['id' => $pop->id] )}}"><h4>{{$pop->title}}</h4></a>
                                <p>{{ strip_tags(str_limit($pop->text, 30)) }}</p>
                            </div>
                        </div>
                    </div>
                    <?php $count++; ?>
                    @endforeach
                </div>
            </div>
            <!--End of popular-->
        </div>
        <!--End of row-->
    </div>
    <!--End of container-->
</section>
<!--end of Kegiatan-->

@endsection