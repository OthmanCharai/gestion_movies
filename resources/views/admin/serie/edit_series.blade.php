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

                        <li ><a href="{{ route('serie') }}">tv - series</a></li>

                        <li><a href="{{ route('contact.index') }}">Contact</a></li>
                        @auth
                        <li class="active"><a href="{{ route('user.series') }}">My Series</a></li>
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
                <div class="row" style="margin-left:1px" >
                    <div class="col-md-12">
                        <form action="{{ route('series.update',$serie->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">title</label>
                                <input type="text"  class="form-control"  name="title" id="title" value="{{ $serie->title }}">
                            </div>
                            <div class="form-group">
                                <label for="trailler_url">Trailler url</label>
                                <input type="text" class="form-control"  name="trailler_url" value="{{ $serie->trailler_url }}" id="trailler_url">
                            </div>
                            <div class="form-group">
                                <label for="tags">Tags</label>
                                <input type="text" class="form-control"  name="tags" value="{{ $serie->tags }}" id="tags">
                            </div>
                            <div class="form-group">
                                <label for="tags">Status</label>
                                <input type="text" class="form-control"  name="status" value="{{ old('status',$serie->tags) }}" id="tags">
                            </div>
                            <div class="form-group">
                                <label for="url">Image</label>
                                <input type="file"  class="form-control" name="url"  value="{{ $serie->url }}" id="url">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="1" type="radio" name="is_populair" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Populaire
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="0" type="radio" name="is_populair" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                Not Populaire
                                </label>
                            </div>
                            <div class="form-group">
                                <textarea  class="form-control" name="content" placeholder="Serie Content" required=""></textarea>
                            </div>
                            <div class="form-group">
                                <select class="form-control"  name="acteur" class="form-select" aria-label="Default select example">
                                    @foreach ($acteurs as $acteur)
                                        <option value="{{ $acteur->id }}">{{ $acteur->name }}</option>
                                    @endforeach

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
