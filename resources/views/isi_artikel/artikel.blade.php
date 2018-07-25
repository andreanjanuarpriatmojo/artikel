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
                        <div class="col-md-6 zero_mp">
                            <div class="Kegiatan_item">
                                <div class="Kegiatan_text text-left">
                                    <a href="{{url('isi')}}"><h6>Oldest Post</h6></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 zero_mp">
                            <div class="Kegiatan_item">
                                <div class="Kegiatan_text text-right">
                                    <a href="{{url('isi')}}"><h6>Newest Post</h6></a>
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
                                    	<img src="{{url('artikel/img/tree_cut_3.jpg')}}" alt="">
                                	</div>
                                	<div class="Kegiatan_news_text">
                                    	<a href="{{url('isi')}}"><h4>Let’s plant 200 tree each...</h4></a>
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
         		                           <a href="{{url('isi')}}"><h4>Keep your house envirome..</h4></a>
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
                                    	<a href="{{url('isi')}}"><h4>Urgent Clothe Needed Needed</h4></a>
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
                                    	<a href="{{url('isi')}}"><h4>One Tree Thousand Hope</h4></a>
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
                                    	<a href="{{url('isi')}}"><h4>One Tree Thousand Hope</h4></a>
                                    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</p>
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