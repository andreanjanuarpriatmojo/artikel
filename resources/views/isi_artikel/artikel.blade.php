@extends('layouts.artikel')

@section('content')

<!--start of Kegiatan-->
<section id="Kegiatan">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="Kegiatan_news_text">
                    <h3>{{$view->title}}</h3>
                    <p class="left_side">
                    <span class="clock"><i class="fa fa-clock-o"></i></span>
                    <span class="time">{{date('d-m-Y', strtotime($view->updated_at))}}</span>
                    </p>
                    <br> <br>
                    	<div class="event_img">
                    		<img src="{{asset('uploads/images')}}/{{$view->photo_path}}" alt="">
                    			<br> <br>  
                    			<p>{!! $view->text !!}</p>
                		</div>
                </div>
                <br>
                <a href="{{ url('blog',['id' => $cb->id] )}}" class="Kegiatan_btn">Oldest post</a>
            </div>
            <!--End of col-md-8-->
            <div class="col-md-4">
                <div class="Kegiatan_news_text">
                    <h4>Artikel Terbaru</h4>
                    <br>
                    @foreach ($c as $cb)
                    <div class="Kegiatan_news">
                        <div class="Kegiatan_single_item fix">
                            <div class="Kegiatan_news_img floatleft">
                                <img src="{{asset('uploads/images')}}/{{$cb->photo_path}}" alt="">
                            </div>
                            <div class="Kegiatan_news_text">
                                <a href="{{ url('blog',['id' => $cb->id] )}}"><h4>{{$cb->title}}</h4></a>
                                <p>{{ strip_tags(str_limit($cb->text, 50)) }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
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