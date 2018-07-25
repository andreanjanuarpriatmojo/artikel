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
                    				<div class="event_img">
                    					<img src="{{asset('uploads/images')}}/{{$blog->photo_path}}" alt="">
                    					<br> <br>
                    					<p>{!! $blog->text !!}</p>
                					</div>
                		</div>
                        <br>
                        <div class="col-md-6 zero_mp">
                            <div class="Kegiatan_item">
                                <div class="Kegiatan_text text-left">
                                    <a href=""><h6>Oldest Post</h6></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 zero_mp">
                            <div class="Kegiatan_item">
                                <div class="Kegiatan_text text-right">
                                    <a href=""><h6>Newest Post</h6></a>
                                </div>
                            </div>
                        </div>
            		</div>

                    <!--End of col-md-8-->
                    <div class="col-md-4">
                    	<div class="Kegiatan_news_text">
                    		<h4>Artikel Terbaru</h4>
                    		<br>
                        	<div class="Kegiatan_news">
                            	<div class="Kegiatan_single_item fix">
                                	<div class="Kegiatan_news_img floatleft">
                                    	<img src="{{asset('uploads/images')}}/{{$bg[0]->photo_path}}" alt="">
                                	</div>
                                	<div class="Kegiatan_news_text">
                                    	<a href="{{ url('blog',['id' => $bg[0]->id] )}}"><h4>{{$bg[0]->title}}</h4></a>
                                    	<p>{{ strip_tags(str_limit($bg[0]->text, 50)) }}</p>
                                	</div>
                            	</div>
                        	</div>
		                        <div class="Kegiatan_news">
        		                    <div class="Kegiatan_single_item fix">
                		                <div class="Kegiatan_news_img floatleft">
            		                        <img src="{{asset('uploads/images')}}/{{$bg[1]->photo_path}}" alt="">
                		                </div>
 		                                <div class="Kegiatan_news_text">
         		                           <a href="{{ url('blog',['id' => $bg[1]->id] )}}"><h4>{{$bg[1]->title}}</h4></a>
                		                    <p>{{ strip_tags(str_limit($bg[1]->text, 50)) }}</p>
       			                        </div>
                            	</div>
                        	</div>
                        	<div class="Kegiatan_news">
                            	<div class="Kegiatan_single_item fix">
                                    <div class="Kegiatan_news_img floatleft">
                                        <img src="{{asset('uploads/images')}}/{{$bg[2]->photo_path}}" alt="">
                                    </div>
                                    <div class="Kegiatan_news_text">
                                       <a href="{{ url('blog',['id' => $bg[2]->id] )}}"><h4>{{$bg[2]->title}}</h4></a>
                                        <p>{{ strip_tags(str_limit($bg[2]->text, 50)) }}</p>
                                    </div>
                            	</div>
                        	</div>
                        	<div class="Kegiatan_news">
                            	<div class="Kegiatan_single_item fix">
                                    <div class="Kegiatan_news_img floatleft">
                                        <img src="{{asset('uploads/images')}}/{{$bg[3]->photo_path}}" alt="">
                                    </div>
                                    <div class="Kegiatan_news_text">
                                       <a href="{{ url('bg',['id' => $bg[3]->id] )}}"><h4>{{$bg[3]->title}}</h4></a>
                                        <p>{{ strip_tags(str_limit($bg[3]->text, 50)) }}</p>
                                    </div>
                            	</div>
                        	</div>
                        	<div class="Kegiatan_news">
                            	<div class="Kegiatan_single_item fix">
                                    <div class="Kegiatan_news_img floatleft">
                                        <img src="{{asset('uploads/images')}}/{{$bg[4]->photo_path}}" alt="">
                                    </div>
                                    <div class="Kegiatan_news_text">
                                       <a href="{{ url('bg',['id' => $bg[4]->id] )}}"><h4>{{$bg[4]->title}}</h4></a>
                                        <p>{{ strip_tags(str_limit($bg[4]->text, 50))    }}</p>
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