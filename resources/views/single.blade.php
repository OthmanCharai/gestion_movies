@extends('layouts.layout')
@section('content')
<script>
	$("document").ready(function() {
		$("#video").simplePlayer();
	});
</script>

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
                        <li ><a href="{{ route('series.index') }}">Home</a></li>

                        <li class="active"><a href="{{ route('serie') }}">tv - series</a></li>

                        <li><a href="{{ route('contact') }}">Contact</a></li>

                    </ul>
                </nav>
            </div>
        </nav>
    </div>
</div>
<!-- //nav -->

<!-- single -->
<div class="single-page-agile-main">
    <div class="container">
            <!-- /w3l-medile-movies-grids -->
                <div class="agileits-single-top">
                    <ol class="breadcrumb">
                      <li><a href="{{ route('series.index') }}">Home</a></li>
                      <li class="active">Single</li>
                    </ol>
                </div>
                <div class="single-page-agile-info">
                    @if(session()->has('status'))
                    <div class="div alert alert-success agileits-single-top">
                        {{ session()->get('status') }}
                    </div>
                    @endif
                       <!-- /movie-browse-agile -->
                   <div class="show-top-grids-w3lagile">
                    <div class="col-sm-8 single-left">
                        <div class="song">
                            <div class="song-info">
                                <h3>{{ $serie->title }}</h3>
                                <form method="post" action="{{ route('favorite') }}">
                                    @csrf
                                    <input type="hidden" name="serie_id" value="{{ $serie->id }}">
                                    <button class="btn btn-success">Favorite</button>
                                </form>
                        </div>
                            <div class="video-grid-single-page-agileits">
                                <div data-video="{{ $serie->trailler_url }}" id="video"> <img src="{{$serie->url}}" alt="" class="img-responsive" /> </div>
                            </div>
                        </div>

                        <div class="clearfix"> </div>

                        <div class="all-comments">
                            <div class="all-comments-info">
                                <a href="#">Comments</a>
                                <div class="agile-info-wthree-box">
                                    <form action={{ route('comment.store') }} method="post">
                                        @csrf
                                        <input type="hidden" value="{{ $serie->id }}" name="serie_id">
                                        <textarea placeholder="Message" name="content" required=""></textarea>
                                        <div class="clearfix"> </div>
                                        <button class="btn btn-primary">Comment</button>
                                    </form>
                                </div>
                            </div>
                            <div class="media-grids">
                                @foreach ($serie->comments as $comment)
                                    <div class="media">
                                        <h5>{{ $comment->user->name }}</h5>
                                        <div class="media-left">
                                            <a href="#">
                                                <img src="{{ asset('images/user.jpg') }}" title="One movies" alt=" " />
                                            </a>
                                        </div>
                                        <div class="media-body ">
                                            <p>{{ $comment->content }}</p>
                                            @can('update',$comment)
                                                <div class="d-flex"style="float: right;">
                                                    <span style="mrgin-right:5px" >  <button id="formButton" class="btn btn-info"> Edit </span>

                                                    <span>
                                                    <form action="{{ route('comment.destroy',$comment) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger">Delte</button>
                                                    </form>
                                                    </span>

                                                </div>
                                            @endcan
                                        </div>
                                        <div class="agile-info-wthree-box" style="display:none" id="editComment">
                                            <form action={{ route('comment.update',$comment) }} method="post" >
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" value="{{ $serie->id }}" name="serie_id">
                                                <textarea placeholder="Message" name="content" value="{{ $comment->content }}" required=""></textarea>
                                                <div class="clearfix"> </div>
                                                <button class="btn btn-primary">Save Changes</button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 single-right">
                        <h3>Up Next</h3>
                        <div class="single-grid-right">
                            @foreach ($series as $series)
                                <div class="single-right-grids">
                                    <div class="col-md-4 single-right-grid-left">
                                        <a href="{{ route('series.show',$serie) }}"><img src="{{ $serie->url }}" alt="" /></a>
                                    </div>
                                    <div class="col-md-8 single-right-grid-right">
                                        <a href="single.html" class="title"> {{ $serie->title }}</a>
                                        <p class="author"><a href="#" class="author">{{ $serie->acteur }}</a></p>
                                        <p class="views">{{ $serie->number_of_view }} views</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                    <!-- //movie-browse-agile -->
                    <!--body wrapper start-->
                <div class="w3_agile_banner_bottom_grid">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        @foreach ($topSeries as $series )
                            <div class="item">
                                <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                    <a href="{{ route('series.show',$serie) }}" class="hvr-shutter-out-horizontal"><img src="{{ $serie->url }}" title="album-name" class="img-responsive" alt=" " />
                                        <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                        <div class="w3l-movie-text">
                                            <h6><a href="{{ route('series.show',$serie) }}">{{ $serie->title }}</a></h6>
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
            <!--body wrapper end-->
                    </div>
                    <!-- //w3l-latest-movies-grids -->
                </div>
            </div>
        <!-- //w3l-medile-movies-grids -->
        <script>
            $(document).ready(function() {
                $("#formButton").click(function() {
                $("#editComment").toggle();
                });
            });
        </script>
@endsection
