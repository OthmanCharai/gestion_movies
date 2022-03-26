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

                        <li  ><a href="{{ route('serie') }}">tv - series</a></li>

                        <li><a href="{{ route('contact.index') }}">Contact</a></li>
                        @auth
                            <li ><a href="{{ route('user.series') }}">My Series</a></li>
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
                <div class="row" style="margin-left:1px" >
                    <div class="col-md-12">
                    <form action="{{ route('acteur.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">name</label>
                                <input type="text"  class="form-control"  name="name" id="title">
                            </div>

                            <div class="form-group">
                                <label for="url">Image</label>
                                <input type="file"  class="form-control" name="image" id="url">
                            </div>
                            <div class="form-group">
                                <textarea  class="form-control" name="biographie" placeholder="Serie Content" required=""></textarea>
                            </div>
                            <button class="btn btn-warning">Submit</button>
                        </form>
                    </div>
                </div>
                    </div>
                </div>
            </div>
@endsection
