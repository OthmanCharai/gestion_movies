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
<!-- contact -->
<div class="contact-agile">
    <div id="map"></div>
    <div class="faq">
        <h4 class="latest-text w3_latest_text">Contact Us</h4>
        <div class="container">
            <div class="col-md-3 location-agileinfo">
                <div class="icon-w3">
                    <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                </div>
                <h3>Address</h3>
                <h4>345 Setwant natrer,</h4>
                <h4>Washington,</h4>
                <h4>United States.</h4>
            </div>
            <div class="col-md-3 call-agileits">
                <div class="icon-w3">
                    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                </div>
                <h3>Call</h3>
                <h4>+18044126235</h4>
                <h4>+14056489808</h4>
                <h4>+16789339049</h4>
            </div>
            <div class="col-md-3 mail-wthree">
                <div class="icon-w3">
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                </div>
                <h3>Email</h3>
                <h4><a href="mailto:info@example.com">example1@mail.com</a></h4>
                <h4><a href="mailto:info@example.com">example2@mail.com</a></h4>
                <h4><a href="mailto:info@example.com">example3@mail.com</a></h4>
            </div>
            <div class="col-md-3 social-w3l">
                <div class="icon-w3">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                </div>
                <h3>Social media</h3>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i><span class="text">Facebook</span></a></li>
                    <li class="twt"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i><span class="text">Twitter</span></a></li>
                    <li class="ggp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i><span class="text">Google+</span></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
            <form action="#" method="post">
                <input type="text" name="your name" placeholder="FIRST NAME" required="">
                <input type="text" name="your name" placeholder="LAST NAME" required="">
                <input type="text" name="your email" placeholder="EMAIL" required="">
                <input type="text" name="subject" placeholder="SUBJECT" required="">
                <textarea  name="your message" placeholder="YOUR MESSAGE" required=""></textarea>
                <input type="submit" value="SEND MESSAGE">
            </form>
        </div>
    </div>
</div>
            <!-- Map-JavaScript -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        <script type="text/javascript">
            google.maps.event.addDomListener(window, 'load', init);
            function init() {
                var mapOptions = {
                    zoom: 11,
                    center: new google.maps.LatLng(40.6700, -73.9400),
                    styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
                };
                var mapElement = document.getElementById('map');
                var map = new google.maps.Map(mapElement, mapOptions);
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                });
            }
        </script>
    <!-- //Map-JavaScript -->
<!-- //contact -->
@endsection