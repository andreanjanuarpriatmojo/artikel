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
                <div class="row">
                    <div class="col-md-4">
                        <div class="blog_news">
                            <div class="single_blog_item">
                                <div class="blog_img">
                                    <img src="{{asset('uploads/images')}}/{{$b[0]->photo_path}}" alt="">
                                </div>
                                <div class="blog_content">
                                    <h3>{{$b[0]->title}}</h3>
                                    <div class="expert">
                                        <div class="left-side text-left">
                                            <p class="left_side">
                                                <span class="clock"><i class="fa fa-clock-o"></i></span>
                                                <span class="time">{{date('d-m-Y', strtotime($b[0]->updated_at))}}</span>
                                            </p>
                                        </div>  
                                    </div>

                                    <p class="blog_news_content">{{ strip_tags(str_limit($b[0]->text, 150)) }}</p>
                                    <a href="{{ url('blog',['id' => $b[0]->id] )}}" class="blog_link">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-4-->
                    <div class="col-md-4">
                        <div class="blog_news">
                            <div class="single_blog_item">
                                <div class="blog_img">
                                    <img src="{{asset('uploads/images')}}/{{$b[1]->photo_path}}" alt="">
                                </div>
                                <div class="blog_content">
                                    <h3>{{$b[1]->title}}</h3>
                                    <div class="expert">
                                        <div class="left-side text-left">
                                            <p class="left_side">
                                                <span class="clock"><i class="fa fa-clock-o"></i></span>
                                                <span class="time">{{date('d-m-Y', strtotime($b[1]->updated_at))}}</span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="blog_news_content">{{ strip_tags(str_limit($b[1]->text, 150)) }}</p>
                                    <a href="{{ url('blog',['id' => $b[1]->id] )}}" class="blog_link">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-4-->
                    <div class="col-md-4">
                        <div class="blog_news">
                            <div class="single_blog_item">
                                <div class="blog_img">
                                    <img src="{{asset('uploads/images')}}/{{$b[2]->photo_path}}" alt="">
                                </div>
                                <div class="blog_content">
                                    <h3>{{$b[2]->title}}</h3>
                                    <div class="expert">
                                        <div class="left-side text-left">
                                            <p class="left_side">
                                                <span class="clock"><i class="fa fa-clock-o"></i></span>
                                                <span class="time">{{date('d-m-Y', strtotime($b[2]->updated_at))}}</span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="blog_news_content">{{ strip_tags(str_limit($b[2]->text, 150)) }}</p>
                                    <a href="{{ url('blog',['id' => $b[2]->id] )}}" class="blog_link">read more</a>
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
        <!-- end of blog-->

@endsection