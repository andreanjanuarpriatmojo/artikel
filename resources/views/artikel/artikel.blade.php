@extends('layouts.artikel')

@section('content')

<!--start of Kegiatan-->
<section id="Kegiatan">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="Kegiatan_news_text">
                    <h3>{{$blog->title}}</h3>
                    <p class="left_side">
                        <span class="clock"><i class="fa fa-clock-o"></i></span>
                        <span class="time">{{date('d-m-Y', strtotime($blog->updated_at))}}</span>
                    </p>
                    <br> <br>
                    <div class="Kegiatan_img_artikel">
                    	<img src="{{asset('uploads/images')}}/{{$blog->photo_path}}" alt="">
                    	<br> <br>
                    	<p>{!! $blog->text !!}</p>
                	</div>
                </div>
                <br> <br>
                <div class="col-md-6 zero_mp">
                    <div class="text-left">
                        <a href="{{ url('blog',['id' => $previous] )}}" class="Kegiatan_btn">Oldest Post</a>
                    </div>
                </div>
                <div class="col-md-6 zero_mp">
                    <div class="text-right">
                        <a href="{{ url('blog',['id' => $next] )}}" class="Kegiatan_btn">Newest Post</a>
                    </div>
                </div>
            </div>
            <!--End of col-md-8-->
            <div class="col-md-4">
                <div class="Kegiatan_news_text">
                    <h4>Artikel Terbaru</h4>
                    <br>
                    <?php $count = 0; ?>
                    @foreach ($bg as $blog)
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
            <!--End of col-md-4-->
        </div>
        <!--End of row-->
    </div>
    <!--End of container-->
</section>
<!--end of Kegiatan-->
@endsection