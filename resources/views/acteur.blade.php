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
                        <li ><a href="{{ route('series.index') }}">Home</a></li>

                        <li class=""><a href="{{ route('serie') }}">tv - series</a></li>

                        <li><a href="{{ route('contact.index') }}">Contact</a></li>
                        @auth
                                <li><a href="{{ route('user.series') }}">My Series</a></li>
                            <li class="active"><a href="{{ route('acteur.index') }}">Acteurs</a></li>

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
                                <h3>{{ $acteur->name }}</h3>
                        </div>
                            <div class="video-grid-single-page-agileits">
                                <div  id="video"> <img src="{{$acteur->image}}" alt="" class="img-responsive" /> </div>
                            </div>
                        </div>

                        <div class="clearfix"> </div>

                        <div class="all-comments">
                            <div class="media-grids">
                                <div class="media">
                                    <h3>Biographie : </h3>
                                    <div class="media-body pt-2">
                                        <p>{{ $acteur->biographie }}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 single-right">
                        <h3>Other Series </h3>
                        <div class="single-grid-right">
                            @foreach ($series as $serie)
                                <div class="single-right-grids">
                                    <div class="col-md-4 single-right-grid-left">
                                        <a href="{{ route('series.show',$serie) }}"><img src="{{ $serie->url }}" alt="" /></a>
                                    </div>
                                    <div class="col-md-8 single-right-grid-right">
                                        <a href="single.html" class="title"> {{ $serie->title }}</a>
                                        <p class="author"><a href="{{ route('acteur.show',$serie->acteur->id) }}" class="author">{{ $serie->acteur->name }}</a></p>
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
                        @foreach ($topSeries as $serie )
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

@endsection
