@extends('layouts.artikel')

@section('content')

        <!--start of Kegiatan-->
        <section id="Kegiatan">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="Kegiatan_header text-center">
							<h2>Kegiatan Terakhir</h2>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6 zero_mp">
                                <div class="Kegiatan_item">
                                    <div class="Kegiatan_img">
                                        <img src="{{asset('uploads/images')}}/{{$b[0]->photo_path}}" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 zero_mp">
                                <div class="Kegiatan_item">
                                    <div class="Kegiatan_text text-center">
                                        <a href=""><h4>{{$b[0]->title}}</h4></a>
                                        <h6>{{date('d-m-Y', strtotime($b[0]->updated_at))}}</h6>
                                        <p>{{ strip_tags(str_limit($b[0]->text, 150)) }}</p>
                                        <a href="{{ url('pengumuman-more',['id' => $b[0]->id] )}}" class="Kegiatan_btn">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End of row-->
                        <div class="row">
                            <div class="col-md-6 zero_mp">
                                <div class="Kegiatan_item">
                                    <div class="Kegiatan_text text-center">
                                        <a href=""><h4>{{$b[1]->title}}</h4></a>
                                        <h6>{{date('d-m-Y', strtotime($b[1]->updated_at))}}</h6>
                                        <p>{{ strip_tags(str_limit($b[1]->text, 150)) }}</p>
                                        <a href="{{ url('pengumuman-more',['id' => $b[1]->id] )}}" class="Kegiatan_btn">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 zero_mp">
                                <div class="Kegiatan_item">
                                    <div class="Kegiatan_img">
                                        <img src="{{asset('uploads/images')}}/{{$b[1]->photo_path}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End of row-->
                    </div>

                    <!--End of col-md-8-->
                    <div class="col-md-4">
                        <div class="Kegiatan_news">
                            <div class="Kegiatan_single_item fix">
                                <div class="Kegiatan_news_img floatleft">
                                    <img src="{{url('artikel/img/tree_cut_3.jpg')}}" alt="">
                                </div>
                                <div class="Kegiatan_news_text">
                                    <a href="#"><h4>Let’s plant 200 tree each...</h4></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="Kegiatan_news">
                            <div class="Kegiatan_single_item fix">
                                <div class="Kegiatan_news_img floatleft">
                                    <img src="{{url('artikel/img/tree_cut_4.jpg')}}" alt="">
                                </div>
                                <div class="Kegiatan_news_text">
                                    <a href="#"><h4>Keep your house envirome..</h4></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="Kegiatan_news">
                            <div class="Kegiatan_single_item fix">
                                <div class="Kegiatan_news_img floatleft">
                                    <img src="{{url('artikel/img/tree_cut_3.jpg')}}" alt="">
                                </div>
                                <div class="Kegiatan_news_text">
                                    <a href="#"><h4>Urgent Clothe Needed Needed</h4></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="Kegiatan_news">
                            <div class="Kegiatan_single_item fix">
                                <div class="Kegiatan_news_img floatleft">
                                    <img src="{{url('artikel/img/tree_cut_4.jpg')}}" alt="">
                                </div>
                                <div class="Kegiatan_news_text">
                                    <a href="#"><h4>One Tree Thousand Hope</h4></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="Kegiatan_news">
                            <div class="Kegiatan_single_item fix">
                                <div class="Kegiatan_news_img floatleft">
                                    <img src="{{url('artikel/img/tree_cut_3.jpg')}}" alt="">
                                </div>
                                <div class="Kegiatan_news_text">
                                    <a href="#"><h4>One Tree Thousand Hope</h4></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</p>
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
                                    <img src="{{url('artikel/img/climate_effect.jpg')}}" alt="">
                                </div>
                                <div class="blog_content">
                                    <a href=""><h3>Climate change is affecting bird migration</h3></a>
                                    <div class="expert">
                                        <div class="left-side text-left">
                                            <p class="left_side">
                                                <span class="clock"><i class="fa fa-clock-o"></i></span>
                                                <span class="time">Aug 19, 2016</span>
                                                <a href=""><span class="admin"><i class="fa fa-user"></i> Admin</span></a>
                                            </p>
                                            <p class="right_side text-right">
                                                <a href=""><span class="right_msg text-right"><i class="fa fa-comments-o"></i></span>
                                                    <span class="count">0</span></a>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="blog_news_content">Lorem ipsum dolor sit amet, consectetur adipscing elit. Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. consectetur Lorem ipsum dolor sitamet, conse ctetur adipiscing elit. </p>
                                    <a href="" class="blog_link">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-4-->
                    <div class="col-md-4">
                        <div class="blog_news">
                            <div class="single_blog_item">
                                <div class="blog_img">
                                    <img src="{{url('artikel/img/air_pollutuon.jpg')}}" alt="">
                                </div>
                                <div class="blog_content">
                                    <a href=""><h3>How to avoid indoor air pollution?</h3></a>
                                    <div class="expert">
                                        <div class="left-side text-left">
                                            <p class="left_side">
                                                <span class="clock"><i class="fa fa-clock-o"></i></span>
                                                <span class="time">Aug 19, 2016</span>
                                                <a href=""><span class="admin"><i class="fa fa-user"></i> Admin</span></a>
                                            </p>
                                            <p class="right_side text-right">
                                                <a href=""><span class="right_msg text-right"><i class="fa fa-comments-o"></i></span>
                                                    <span class="count">0</span></a>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="blog_news_content">Lorem ipsum dolor sit amet, consectetur adipscing elit. Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. consectetur Lorem ipsum dolor sitamet, conse ctetur adipiscing elit. </p>
                                    <a href="" class="blog_link">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-4-->
                    <div class="col-md-4">
                        <div class="blog_news">
                            <div class="single_blog_item">
                                <div class="blog_img">
                                    <img src="{{url('artikel/img/threat_bear.jpg')}}" alt="">
                                </div>
                                <div class="blog_content">
                                    <a href=""><h3>Threat to Yellowstone’s grizzly bears.</h3></a>
                                    <div class="expert">
                                        <div class="left-side text-left">
                                            <p class="left_side">
                                                <span class="clock"><i class="fa fa-clock-o"></i></span>
                                                <span class="time">Aug 19, 2016</span>
                                                <a href=""><span class="admin"><i class="fa fa-user"></i> Admin</span></a>
                                            </p>
                                            <p class="right_side text-right">
                                                <a href=""><span class="right_msg text-right"><i class="fa fa-comments-o"></i></span>
                                                    <span class="count">0</span></a>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="blog_news_content">Lorem ipsum dolor sit amet, consectetur adipscing elit. Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. consectetur Lorem ipsum dolor sitamet, conse ctetur adipiscing elit. </p>
                                    <a href="" class="blog_link">read more</a>
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