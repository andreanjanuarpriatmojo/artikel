@extends('layouts.artikel')

@section('content')

<!--start of Kegiatan-->
        <section id="Kegiatan">
            <div class="container">
                <div class="row">
                	@foreach ($c as $cb)
                    <div class="col-md-8">
                		<div class="Kegiatan_news_text">
                			<div class="card" style="border: 1px solid #d1d3d1;margin-top: 1em">
							<div class="card-body">
								<div class="row">
									<div class="col-md-4">
									<img src="{{asset('uploads/images')}}/{{$cb->photo_path}}" alt="" style="height: 150px;width: 350px">
									</div>
									<div class="col" style="margin-top: 1em">
										<h4>{{$cb->title}}</h4>
										<p>
											<span class="clock"><i class="fa fa-clock-o"></i></span>
											<span class="time">{{date('d-m-Y', strtotime($cb->updated_at))}}</span>
										</p>
										<br>
										<p>{{ strip_tags(str_limit($cb->text, 50)) }}</p>
										<a href="{{ url('blog',['id' => $cb->id] )}}" style="margin-top: 1em">read more</a>
									</div>
								</div>
							</div>
						</div>
                		</div>
            		</div>
            		@endforeach
                    <!--End of col-md-8-->
                    <div class="col-md-4">
                    	<div class="Kegiatan_news_text">
                    		<h4>Artikel Terbaru</h4>
                    		<br>
                        	<div class="Kegiatan_news">
                            	<div class="Kegiatan_single_item fix">
                                	<div class="Kegiatan_news_img floatleft">
                                    	<img src="{{asset('uploads/images')}}/{{$c[0]->photo_path}}" alt="">
                                	</div>
                                	<div class="Kegiatan_news_text">
                                    	<a href="{{ url('blog',['id' => $c[0]->id] )}}"><h4>{{$c[0]->title}}</h4></a>
                                    	<p>{{ strip_tags(str_limit($c[0]->text, 50)) }}</p>
                                	</div>
                            	</div>
                        	</div>
		                        <div class="Kegiatan_news">
        		                    <div class="Kegiatan_single_item fix">
                		                <div class="Kegiatan_news_img floatleft">
            		                        <img src="{{asset('uploads/images')}}/{{$c[1]->photo_path}}" alt="">
                		                </div>
 		                                <div class="Kegiatan_news_text">
         		                           <a href="{{ url('blog',['id' => $c[1]->id] )}}"><h4>{{$c[1]->title}}</h4></a>
                		                    <p>{{ strip_tags(str_limit($c[1]->text, 50)) }}</p>
       			                        </div>
                            	</div>
                        	</div>
                        	<div class="Kegiatan_news">
                            	<div class="Kegiatan_single_item fix">
                                    <div class="Kegiatan_news_img floatleft">
                                        <img src="{{asset('uploads/images')}}/{{$c[2]->photo_path}}" alt="">
                                    </div>
                                    <div class="Kegiatan_news_text">
                                       <a href="{{ url('blog',['id' => $c[2]->id] )}}"><h4>{{$c[2]->title}}</h4></a>
                                        <p>{{ strip_tags(str_limit($c[2]->text, 50)) }}</p>
                                    </div>
                            	</div>
                        	</div>
                        	<div class="Kegiatan_news">
                            	<div class="Kegiatan_single_item fix">
                                    <div class="Kegiatan_news_img floatleft">
                                        <img src="{{asset('uploads/images')}}/{{$c[3]->photo_path}}" alt="">
                                    </div>
                                    <div class="Kegiatan_news_text">
                                       <a href="{{ url('blog',['id' => $c[3]->id] )}}"><h4>{{$c[3]->title}}</h4></a>
                                        <p>{{ strip_tags(str_limit($c[3]->text, 50)) }}</p>
                                    </div>
                            	</div>
                        	</div>
                        	<div class="Kegiatan_news">
                            	<div class="Kegiatan_single_item fix">
                                    <div class="Kegiatan_news_img floatleft">
                                        <img src="{{asset('uploads/images')}}/{{$c[4]->photo_path}}" alt="">
                                    </div>
                                    <div class="Kegiatan_news_text">
                                       <a href="{{ url('blog',['id' => $c[4]->id] )}}"><h4>{{$c[4]->title}}</h4></a>
                                        <p>{{ strip_tags(str_limit($c[4]->text, 50))    }}</p>
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