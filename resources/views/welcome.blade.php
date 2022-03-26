@extends('layouts.layout')
@section('content')

<!-- nav -->
	<div class="movies_nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right justify-content-around" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="active"><a href="{{ route('series.index') }}">Home</a></li>

							<li><a href="{{ route('serie') }}">tv - series</a></li>

                            <li><a href="{{ route('contact.index') }}">Contact</a></li>
                            @auth
                                <li><a href="{{ route('user.series') }}">My Series</a></li>
                                <li class=""><a href="{{ route('acteur.index') }}">Acteurs</a></li>
                            @endauth
                            @can('isAdmin')
                                <li><a href="{{ route('user.index') }}">User</a></li>
                            @endcan
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
<!-- //nav -->
<!-- banner -->
	<div id="slidey" style="display:none;">
		<ul>
            @foreach ($lestestseries as  $serie)
			    <li><img src="{{ $serie->url }}" alt=" "><p class='title'>{{ $serie->title }}</p><p class='description'> {{ $serie->content }}</p></li>
            @endforeach

		</ul>
    </div>

	   <script type="text/javascript">
			$("#slidey").slidey({
				interval: 8000,
				listCount: 5,
				autoplay: false,
				showList: true
			});
			$(".slidey-list-description").dotdotdot();
		</script>
<!-- //banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="w3_agile_banner_bottom_grid">
				<div id="owl-demo" class="owl-carousel owl-theme">
                    @foreach ($series as $serie)
                        <div class="item">
                            <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                <a href="{{ route('series.show',$serie->id) }}" class="hvr-shutter-out-horizontal"><img src="{{ $serie->url }}" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="{{ route('series.show',$serie->id) }}">{{ $serie->title }}</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>{{ $serie->created_at->year }}</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

				</div>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<div class="general_social_icons">
	<nav class="social">
		<ul>
			<li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
			<li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
			<li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
			<li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>
		</ul>
  </nav>
</div>
<!-- general -->
	<div class="general">
		<h4 class="latest-text w3_latest_text">Featured Movies</h4>
		<div class="container">
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Featured</a></li>
					<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Top viewed</a></li>
					<li role="presentation"><a href="#rating" id="rating-tab" role="tab" data-toggle="tab" aria-controls="rating" aria-expanded="true">Top Rating</a></li>
					<li role="presentation"><a href="#imdb" role="tab" id="imdb-tab" data-toggle="tab" aria-controls="imdb" aria-expanded="false">Recently Added</a></li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
						<div class="w3_agile_featured_movies">
                            @foreach ($series as $serie)
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="{{ route('series.show',$serie->id) }}" class="hvr-shutter-out-horizontal"><img src="{{ $serie->url }}" title="album-name" class="img-responsive" alt=" " />
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6 style=" white-space: nowrap;
                                                overflow: hidden;
                                                text-overflow: ellipsis;"><a href="{{ route('series.show',$serie->id) }}">{{ $serie->title }}</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>{{ $serie->created_at->year }}</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                            @endforeach
							<div class="clearfix"> </div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                        @foreach ($topSeries as  $serie)
                            <div class="col-md-2 w3l-movie-gride-agile">
                                <a href="{{ route('series.show',$serie->id) }}" class="hvr-shutter-out-horizontal"><img src="{{ $serie->url }}" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6 style=" white-space: nowrap;
                                        overflow: hidden;
                                        text-overflow: ellipsis;"><a href="{{ route('series.show',$serie->id) }}">{{$serie->title  }}</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>{{ $serie->created_at->year }}</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                        @endforeach
						<div class="clearfix"> </div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="rating" aria-labelledby="rating-tab">
						@foreach ($topRated as  $serie)
                            <div class="col-md-2 w3l-movie-gride-agile">
                                <a href="{{ route('series.show',$serie->id) }} class="hvr-shutter-out-horizontal"><img src="{{ $serie->url }}" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6 style=" white-space: nowrap;
                                        overflow: hidden;
                                        text-overflow: ellipsis;"><a href="{{ route('series.show',$serie->id) }}">{{ $serie->title }}</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>{{ $serie->created_at->year }}</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>{{ $serie->acteur->name }}</p>
                                </div>
                            </div>
                        @endforeach

						<div class="clearfix"> </div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="imdb" aria-labelledby="imdb-tab">
                        @foreach ($lestestseries as $serie )
                            <div class="col-md-2 w3l-movie-gride-agile">
                                <a href="{{ route('series.show',$serie->id) }}" class="hvr-shutter-out-horizontal"><img src="{{ $serie->url }}" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6 style=" white-space: nowrap;
                                        overflow: hidden;
                                        text-overflow: ellipsis;"><a href="{{ route('series.show',$serie->id) }}">{{ $serie->title }}</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>{{ $serie->created_at->year }}</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                            </div>
                        @endforeach
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //general -->
<!-- Latest-tv-series -->
	<div class="Latest-tv-series">
		<h4 class="latest-text w3_latest_text w3_home_popular">Most Popular Movies</h4>
		<div class="container">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">

                            <li>
                                <div class="agile_tv_series_grid">
                                    <div class="col-md-6 agile_tv_series_grid_left">
                                        <div class="w3ls_market_video_grid1">
                                            <img src="{{ $populairs[0]->url }}" alt=" " class="img-responsive" />
                                            <a class="w3_play_icon" href="#small-dialog">
                                                <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 agile_tv_series_grid_right" style="height: 427px">
                                        <p class="fexi_header">{{ $populairs[0]->title }}</p>
                                        <br>
                                        <p class="fexi_header_para"><span class="conjuring_w3">Story Line<label>:</label></span>{{ $populairs[0]->content }}</p>
                                        <br>

                                        <p class="fexi_header_para"><span>Acteur<label>:</label></span> {{ $populairs[0]->acteur->name }} </p>
                                        <br>

                                        <p class="fexi_header_para">
                                            <span>{{ $populairs[0]->created_at->year }} </span>
                                        </p>
                                        <br>

                                        <p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                        </p>
                                    </div>
                                    <div class="clearfix"> </div>
                                    <div class="agileinfo_flexislider_grids">
                                        @foreach($populairs as $serie)
                                            <div class="col-md-2 w3l-movie-gride-agile">
                                                <a href="{{ route('series.show',$serie->id) }}" class="hvr-shutter-out-horizontal"><img src="{{ $serie->url }}" title="album-name" class="img-responsive" alt=" " />
                                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                                </a>
                                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                    <div class="w3l-movie-text">
                                                        <h6><a href="{{ route('series.show',$serie->id) }}">{{ $serie->title }}</a></h6>
                                                    </div>
                                                    <div class="mid-2 agile_mid_2_home">
                                                        <p>{{ $serie->created_at->year }}</p>
                                                        <div class="block-stars">
                                                            <ul class="w3l-ratings">
                                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="ribben">
                                                    <p>NEW</p>
                                                </div>
                                            </div>
                                        @endforeach

                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </li>

					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
	</div>
	<!-- pop-up-box -->
	<!--//pop-up-box -->
	<div id="small-dialog" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/164819130?title=0&byline=0"></iframe>
	</div>
	<div id="small-dialog1" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/148284736"></iframe>
	</div>
	<div id="small-dialog2" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
	</div>
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		});
	</script>
<!-- //Latest-tv-series -->

@endsection
