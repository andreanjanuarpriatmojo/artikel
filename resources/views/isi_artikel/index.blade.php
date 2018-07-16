@extends('layouts.artikel')

@section('content')

<!--start of Kegiatan-->
        <section id="Kegiatan">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                		<div class="Kegiatan_news_text">
                    		<h3>Become a Volunteer</h3>
                    			<p class="left_side">
                                                <span class="clock"><i class="fa fa-clock-o"></i></span>
                                                <span class="time">Aug 19, 2016</span>
                                </p>
                                <br> <br>
                    				<div class="event_img">
                    					<img src="{{url('artikel/img/tree_cut_1.jpg')}}" alt="">
                    					<br> <br>
                    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In facilisis felis a odio facilisis tristique. Donec efficitur vitae elit sit amet finibus. In auctor mauris sit amet feugiat pulvinar. Sed nunc nisi, sagittis et consectetur sed, placerat a ex. Sed rutrum libero et dignissim efficitur. Donec varius porttitor tincidunt. Morbi vitae tincidunt diam. Mauris dictum sit amet orci at tristique. Pellentesque condimentum sit amet orci vitae tempus. Aenean ullamcorper posuere tellus, et pretium magna pharetra et. Maecenas semper sed eros quis lobortis. Proin laoreet tincidunt porta. Donec placerat ante a consequat efficitur. Nam ut erat eget nisi bibendum tristique vel non diam. Aliquam vel vestibulum urna. Morbi eget cursus lectus. <br> <br>

										Aliquam erat volutpat. Maecenas id eros lorem. Aenean nec massa ut purus laoreet pellentesque. Ut eu augue a metus dictum lobortis. Nam a dictum nisi. Fusce sed felis bibendum, consequat dolor eu, pellentesque elit. Nulla eu tempus turpis. Donec dui arcu, tristique sed felis ut, feugiat consequat lacus. Pellentesque imperdiet orci nec elementum auctor. Donec lobortis tortor sit amet ipsum euismod commodo. Proin eget massa tincidunt nisl consequat tempor. <br> <br>

										Duis feugiat nisl at pretium feugiat. Vivamus sit amet ullamcorper risus. Praesent pulvinar vulputate dolor nec placerat. Donec euismod vitae nulla a varius. Curabitur gravida magna ac pretium vehicula. Praesent imperdiet nisl ac nulla varius sagittis. Mauris eu porta felis, sed consectetur ligula. Integer in massa arcu. Nullam vehicula dolor viverra turpis aliquet consectetur. Integer vitae tempus dui. Sed suscipit, ante nec faucibus laoreet, erat massa rutrum massa, a viverra eros metus nec diam. Fusce tristique at nulla et rutrum. Vivamus pretium erat sed nulla maximus, eget ultricies orci posuere. Morbi pretium libero eget nulla vehicula, non tincidunt tortor hendrerit. Curabitur libero ex, sagittis eget massa sed, accumsan iaculis diam. <br> <br>

										Morbi nisi lectus, tincidunt nec leo nec, egestas pulvinar sem. Nullam imperdiet blandit justo, lobortis aliquet sem lobortis sed. Cras pulvinar tincidunt dignissim. Aenean aliquet magna libero, in varius arcu vestibulum et. Vivamus vehicula feugiat mauris, ac sagittis est faucibus placerat. Donec vel facilisis diam, vitae cursus metus. Nullam volutpat, odio ac bibendum dapibus, nunc diam commodo lorem, id vehicula sem nisi at neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consequat nibh sed ex pharetra venenatis nec vel lectus. Vivamus quis erat vitae nunc suscipit rutrum ac vel nunc. Vestibulum aliquet, libero in posuere tempus, justo erat cursus sem, sit amet posuere dui diam facilisis massa. Nullam pretium lacus sed est placerat rhoncus. Donec finibus malesuada sollicitudin. Fusce arcu quam, blandit sed neque vel, consectetur sagittis ex. Phasellus dapibus pretium consectetur. Aenean augue velit, porta quis euismod quis, dictum nec ipsum. <br> <br>

										Etiam pharetra euismod enim eu tempor. Curabitur egestas lorem et magna dapibus sollicitudin. Aenean mattis interdum consectetur. Phasellus aliquam nisl eu commodo porta. Aenean euismod nunc in libero hendrerit suscipit. Duis tempus ligula nisi, nec finibus ligula iaculis a. Curabitur id enim felis. Sed ligula enim, accumsan ac velit ac, condimentum rhoncus tortor.</p>
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