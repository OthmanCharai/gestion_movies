{{-- @extends('layouts.layout')
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
                <div class="row" style="margin-left:1px" >
                    <div class="col-md-12">
                        <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">name</label>
                                <input type="text"  class="form-control"  name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" class="form-control"  name="email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="tags">Tags</label>
                                <input type="text" class="form-control"  name="tags" id="tags">
                            </div>
                            <div class="form-group">
                                <label for="url">Image</label>
                                <input type="file"  class="form-control" name="url" id="url">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="is_populair" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Populaire
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="is_populair" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                Not Populaire
                                </label>
                            </div>
                            <div class="form-group">
                                <textarea  class="form-control" name="content" placeholder="Serie Content" required=""></textarea>
                            </div>
                            <div class="form-group">
                                <select class="form-control"  name="acteur" class="form-select" aria-label="Default select example">
                                    <option value="othman">Open this select menu</option>
                                    <option value="charai">One</option>
                                    <option value="khalid">Two</option>
                                    <option value="nihad">Three</option>
                                </select>
                            </div>
                            <button class="btn btn-warning">Submit</button>
                        </form>
                    </div>
                </div>
                    </div>
                </div>
            </div>
@endsection
 --}}
