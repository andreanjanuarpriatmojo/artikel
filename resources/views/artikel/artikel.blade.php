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
                    	<img src="{{asset('uploads/images')}}/{{$blog->photo_path}}" class="img-fluid" alt="">
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
                <br>
                <div class="Kegiatan_news_text">
                    <h4>Comments</h4>
                    <br>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form method="post" class="form-inline" action="{{ route('comment.add') }}">
                             @csrf
                            <textarea name="comment" class="form-control" placeholder="Write your comment here!" style="resize: none;padding: 20px;height: 100px;width: 100%;border: 2px solid #F2F2F2;margin-bottom: 1em"></textarea>
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Write your name!" style="border: 2px solid #F2F2F2;padding: 20px;">
                                <input class="form-control" type="text" name="email" placeholder="Write your email!" style="border: 2px solid #F2F2F2;padding: 20px;">
                                <input type="hidden" name="post_id" value="{{ $post->id }}" />
                                <button  type="submit" class="btn Kegiatan_btn btn-block" style="margin-left: 150px;     border: 5px padding: 5px; width: 100px; display: inline;">Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div>
                    @include('artikel.comment.replies', ['comments' => $post->comments, 'post_id' => $post->id])
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
                                <img src="{{asset('uploads/images')}}/{{$blog->photo_path}}" class="img-fluid" alt="">
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
                                <img src="{{asset('uploads/images')}}/{{$pop->photo_path}}" class="img-fluid" alt="">
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