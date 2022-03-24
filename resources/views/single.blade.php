@extends('layouts.layout')

@section('content')
<!-- bootstrap-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                Sign In & Sign Up
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <section>
                <div class="modal-body">
                    <div class="w3_login_module">
                        <div class="module form-module">
                          <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                            <div class="tooltip">Click Me</div>
                          </div>
                          <div class="form">
                            <h3>Login to your account</h3>
                            <form action="#" method="post">
                              <input type="text" name="Username" placeholder="Username" required="">
                              <input type="password" name="Password" placeholder="Password" required="">
                              <input type="submit" value="Login">
                            </form>
                          </div>
                          <div class="form">
                            <h3>Create an account</h3>
                            <form action="#" method="post">
                              <input type="text" name="Username" placeholder="Username" required="">
                              <input type="password" name="Password" placeholder="Password" required="">
                              <input type="email" name="Email" placeholder="Email Address" required="">
                              <input type="text" name="Phone" placeholder="Phone Number" required="">
                              <input type="submit" value="Register">
                            </form>
                          </div>
                          <div class="cta"><a href="#">Forgot your password?</a></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
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
<!-- //bootstrap-pop-up -->
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
                        <li ><a href="index.html">Home</a></li>

                        <li class="active"><a href="series.html">tv - series</a></li>

                        <li><a href="short-codes.html">Contact</a></li>

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
                      <li><a href="index.html">Home</a></li>
                      <li class="active">Single</li>
                    </ol>
                </div>
                <div class="single-page-agile-info">
                       <!-- /movie-browse-agile -->
                               <div class="show-top-grids-w3lagile">
                    <div class="col-sm-8 single-left">
                        <div class="song">
                            <div class="song-info">
                                <h3>THE LEGEND OF TARZAN - Official Trailer 2</h3>
                        </div>
                            <div class="video-grid-single-page-agileits">
                                <div data-video="dLmKio67pVQ" id="video"> <img src="images/5.jpg" alt="" class="img-responsive" /> </div>
                            </div>
                        </div>
                        <div class="song-grid-right">
                            <div class="share">
                                <h5>Share this</h5>
                                <div class="single-agile-shar-buttons">
                                <ul>
                                    <li>
                                        <div class="fb-like" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                                        <script>(function(d, s, id) {
                                          var js, fjs = d.getElementsByTagName(s)[0];
                                          if (d.getElementById(id)) return;
                                          js = d.createElement(s); js.id = id;
                                          js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
                                          fjs.parentNode.insertBefore(js, fjs);
                                        }(document, 'script', 'facebook-jssdk'));</script>
                                    </li>
                                    <li>
                                        <div class="fb-share-button" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;src=sdkpreparse">Share</a></div>
                                    </li>
                                    <li class="news-twitter">
                                        <a href="https://twitter.com/w3layouts" class="twitter-follow-button" data-show-count="false">Follow @w3layouts</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/intent/tweet?screen_name=w3layouts" class="twitter-mention-button" data-show-count="false">Tweet to @w3layouts</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                    </li>
                                    <li>
                                        <!-- Place this tag where you want the +1 button to render. -->
                                        <div class="g-plusone" data-size="medium"></div>

                                        <!-- Place this tag after the last +1 button tag. -->
                                        <script type="text/javascript">
                                          (function() {
                                            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                            po.src = 'https://apis.google.com/js/platform.js';
                                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                          })();
                                        </script>
                                    </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>

                        <div class="all-comments">
                            <div class="all-comments-info">
                                <a href="#">Comments</a>
                                <div class="agile-info-wthree-box">
                                    <form>
                                        <input type="text" placeholder="Name" required="">
                                        <input type="text" placeholder="Email" required="">
                                        <input type="text" placeholder="Phone" required="">
                                        <textarea placeholder="Message" required=""></textarea>
                                        <input type="submit" value="SEND">
                                        <div class="clearfix"> </div>
                                    </form>
                                </div>
                            </div>
                            <div class="media-grids">
                                <div class="media">
                                    <h5>TOM BROWN</h5>
                                    <div class="media-left">
                                        <a href="#">
                                            <img src="images/user.jpg" title="One movies" alt=" " />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
                                        <span>View all posts by :<a href="#"> Admin </a></span>
                                    </div>
                                </div>
                                <div class="media">
                                    <h5>MARK JOHNSON</h5>
                                    <div class="media-left">
                                        <a href="#">
                                        <img src="images/user.jpg" title="One movies" alt=" " />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
                                        <span>View all posts by :<a href="#"> Admin </a></span>
                                    </div>
                                </div>
                                <div class="media">
                                    <h5>STEVEN SMITH</h5>
                                    <div class="media-left">
                                        <a href="#">
                                        <img src="images/user.jpg" title="One movies" alt=" " />
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
                                        <span>View all posts by :<a href="#"> Admin </a></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 single-right">
                        <h3>Up Next</h3>
                        <div class="single-grid-right">
                            <div class="single-right-grids">
                                <div class="col-md-4 single-right-grid-left">
                                    <a href="single.html"><img src="images/m1.jpg" alt="" /></a>
                                </div>
                                <div class="col-md-8 single-right-grid-right">
                                    <a href="single.html" class="title"> Nullam interdum metus</a>
                                    <p class="author"><a href="#" class="author">John Maniya</a></p>
                                    <p class="views">2,114,200 views</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="single-right-grids">
                                <div class="col-md-4 single-right-grid-left">
                                    <a href="single.html"><img src="images/m2.jpg" alt="" /></a>
                                </div>
                                <div class="col-md-8 single-right-grid-right">
                                    <a href="single.html" class="title"> Nullam interdum metus</a>
                                    <p class="author"><a href="#" class="author">John Maniya</a></p>
                                    <p class="views">2,114,200 views </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="single-right-grids">
                                <div class="col-md-4 single-right-grid-left">
                                    <a href="single.html"><img src="images/m3.jpg" alt="" /></a>
                                </div>
                                <div class="col-md-8 single-right-grid-right">
                                    <a href="single.html" class="title"> Nullam interdum metus</a>
                                    <p class="author"><a href="#" class="author">John Maniya</a></p>
                                    <p class="views">2,114,200 views</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="single-right-grids">
                                <div class="col-md-4 single-right-grid-left">
                                    <a href="single.html"><img src="images/m4.jpg" alt="" /></a>
                                </div>
                                <div class="col-md-8 single-right-grid-right">
                                    <a href="single.html" class="title"> Nullam interdum metus</a>
                                    <p class="author"><a href="#" class="author">John Maniya</a></p>
                                    <p class="views">2,114,200 views</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="single-right-grids">
                                <div class="col-md-4 single-right-grid-left">
                                    <a href="single.html"><img src="images/m5.jpg" alt="" /></a>
                                </div>
                                <div class="col-md-8 single-right-grid-right">
                                    <a href="single.html" class="title"> Nullam interdum metus</a>
                                    <p class="author"><a href="#" class="author">John Maniya</a></p>
                                    <p class="views">2,114,200 views</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="single-right-grids">
                                <div class="col-md-4 single-right-grid-left">
                                    <a href="single.html"><img src="images/c5.jpg" alt="" /></a>
                                </div>
                                <div class="col-md-8 single-right-grid-right">
                                    <a href="single.html" class="title"> Nullam interdum metus</a>
                                    <p class="author"><a href="#" class="author">John Maniya</a></p>
                                    <p class="views">2,114,200 views</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="single-right-grids">
                                <div class="col-md-4 single-right-grid-left">
                                    <a href="single.html"><img src="images/m6.jpg" alt="" /></a>
                                </div>
                                <div class="col-md-8 single-right-grid-right">
                                    <a href="single.html" class="title"> Nullam interdum metus</a>
                                    <p class="author">By <a href="#" class="author">John Maniya</a></p>
                                    <p class="views">2,114,200 views</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="single-right-grids">
                                <div class="col-md-4 single-right-grid-left">
                                    <a href="single.html"><img src="images/m15.jpg" alt="" /></a>
                                </div>
                                <div class="col-md-8 single-right-grid-right">
                                    <a href="single.html" class="title"> Nullam interdum metus</a>
                                    <p class="author">By <a href="#" class="author">John Maniya</a></p>
                                    <p class="views">2,114,200 views</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                        </div>
                    </div>



                    <div class="clearfix"> </div>
                </div>
                    <!-- //movie-browse-agile -->
                    <!--body wrapper start-->
                <div class="w3_agile_banner_bottom_grid">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m13.jpg" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="single.html">Citizen Soldier</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
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
                        <div class="item">
                            <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m11.jpg" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="single.html">X-Men</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
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
                        </div>
                        <div class="item">
                            <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m12.jpg" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="single.html">Greater</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
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
                                    <p>NEW</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m7.jpg" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="single.html">Light B/t Oceans</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
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
                        </div>
                        <div class="item">
                            <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m8.jpg" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="single.html">The BFG</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
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
                                    <p>NEW</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m9.jpg" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="single.html">Central Intelligence</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
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
                        <div class="item">
                            <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m10.jpg" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="single.html">Don't Think Twice</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
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
                        </div>
                        <div class="item">
                            <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m17.jpg" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="single.html">Peter</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
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
                                    <p>NEW</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
                                <a href="single.html" class="hvr-shutter-out-horizontal"><img src="images/m15.jpg" title="album-name" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="single.html">God’s Compass</a></h6>
                                    </div>
                                    <div class="mid-2 agile_mid_2_home">
                                        <p>2016</p>
                                        <div class="block-stars">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
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
                        </div>
                    </div>
                </div>
            <!--body wrapper end-->


                    </div>
                    <!-- //w3l-latest-movies-grids -->
                </div>
            </div>
        <!-- //w3l-medile-movies-grids -->
@endsection
