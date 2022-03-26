@extends("layouts.layout")
@section('content')

<script>
    $('.toggle').click(function(){
      // Switches the Icon
      $(this).children('i').toggleClass('fa-pencil');
      // Switches the forms
      $('.form').animate({
        height: "toggle",
        'padding-top': 'toggle',
        'padding-bottom': 'toggle',
        opacity: "toggle"
      }, "slow");
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
<div class="faq">
    <!-- general -->
        <div class="general_agileits_genres">
            <h4 class="latest-text w3_latest_text">Featured Movies</h4>
            <div class="container">
                <div class="agileits-single-top">
                    <ol class="breadcrumb">
                      <li><a href="{{ route('series.index') }}">Home</a></li>
                      <li class="active">TV - Series</li>
                    </ol>
                </div>
            </div>
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
                                        <p>{{ $serie->acteur }}</p>
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
    <!--body wrapper start-->
        <div class="review-slider">
             <h4 class="latest-text">TV - Series Reviews</h4>
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
            <!--body wrapper end-->
        </div>
    <!-- //general -->
        </div>
        </div>
@endsection
