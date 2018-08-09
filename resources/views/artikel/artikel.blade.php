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
                <br><br>
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
                <br><br><br>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form method="post" class="form-inline" action="{{ route('comment.add') }}">
                             @csrf
                            <textarea name="comment" class="form-control" placeholder="Write your comment here!" style="resize: none;padding: 20px;height: 100px;width: 100%;border: 2px solid #F2F2F2;margin-bottom: 1em"></textarea>
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Write your name!" style="border: 2px solid #F2F2F2;padding: 20px;">
                                <input class="form-control" type="text" name="email" placeholder="Write your email!" style="border: 2px solid #F2F2F2;padding: 20px;">
                            </div>
                            <button  type="submit" name="button" class="btn btn-info btn-block" type="submit">Comment</button>
                            <!-- <a class="Kegiatan_btn pull-right" type="submit" href="" style="padding: 10px;">Comment!</a> -->
                        </form>
                    </div>
                </div>
                <br>
                <div class="Kegiatan_news_text">
                    <h4>20 comments :</h4>
                </div>
                <br>
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>myusername</strong> <span class="text-muted">commented 5 days ago</span>
                        </div>
                        <div class="panel-body">
                            isi comment an nya!!!
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>myusername</strong> <span class="text-muted">commented 5 days ago</span>
                        </div>
                        <div class="panel-body">
                            isi comment an nya!!!
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>myusername</strong> <span class="text-muted">commented 5 days ago</span>
                        </div>
                        <div class="panel-body">
                            isi comment an nya!!!
                        </div>
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
                                <p>{!! strip_tags(str_limit($blog->text, 60)) !!}</p>
                            </div>
                        </div>
                    </div>
                    <?php $count++; ?>
                    @endforeach
                </div>
            </div>
            <!--End of col-md-4-->
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
                                <p>{!! strip_tags(str_limit($pop->text, 60)) !!}</p>
                            </div>
                        </div>
                    </div>
                    <?php $count++; ?>
                    @endforeach
                </div>
            </div>
            <!-- End of Artikel Populer -->
        </div>
        <!--End of row-->
    </div>
    <!--End of container-->
</section>
<!--end of Kegiatan-->
@endsection