@extends('layouts.artikel')

@section('content')

        <!--Start of blog-->
        <section id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="latest_blog text-center">
                            <h2>Artikel</h2>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row" style="margin-top: 2em">
                        @foreach ($b as $bl)
                        <div class="col-md-4">
                            <div class="blog_news">
                                <div class="single_blog_item">
                                    <div class="blog_img">
                                        <img src="{{asset('uploads/images')}}/{{$bl->photo_path}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="blog_content">
                                        <h3>{{ strip_tags(str_limit($bl->title, 50)) }}</h3>
                                        <div class="expert">
                                            <div class="left-side text-left">
                                                <p class="left_side">
                                                    <span class="clock"><i class="fa fa-clock-o"></i></span>
                                                    <span class="time">{{date('d-m-Y', strtotime($bl->updated_at))}}</span>
                                                </p>
                                            </div>  
                                        </div>

                                        <p class="blog_news_content">{{ strip_tags(str_limit($bl->text, 150)) }}</p>
                                        <a href="{{ url('blog',['id' => $bl->id] )}}" class="blog_link" style="margin-top: 1em">read more</a>
                                    </div>
                                </div>
                            </div>
                        <br>
                        <br>
                        </div>
                        @endforeach
                </div>
                    <!--End of col-md-4-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!-- end of blog-->

@endsection