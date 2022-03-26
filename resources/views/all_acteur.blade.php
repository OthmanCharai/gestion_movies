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
                            <li class=""><a href="{{ route('user.series') }}">My Series</a></li>
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
                @if(session()->has('status'))
                <div class="div alert alert-success agileits-single-top pt-5">
                    {{ session()->get('status') }}
                </div>
                @endif
                <div class="agileits-single-top" style="float: right">
                    <a href="{{ route('acteur.create') }}" class="btn btn-primary">Add Acteur</a>
                </div>

                <div class="row " style="margin-top:80px">
                    <table id="serie_table" class="display ">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Biographie</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($acteurs as $acteur )
                                <tr>
                                    <td>{{ $acteur->name }}</td>
                                    <td>{{ $acteur->biographie }}</td>
                                    <td><img style="height:100px;width:100px" src="{{ $acteur->image }}"></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            @can('isAdmin')
                                            <a href="{{ route('series.edit',$serie->id) }}"  class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit Product">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                  </svg>
                                            </a>
                                            <form method="post" action="{{ route('series.destroy',$serie->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button  class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Remove Serie">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                                                        <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                                      </svg>
                                                </button>
                                            </form>
                 @endcan

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            <!--body wrapper end-->
                    </div>
                    <!-- //w3l-latest-movies-grids -->
                </div>
            </div>
        <!-- //w3l-medile-movies-grids -->
<script>
    $(document).ready(function() {
    $('#serie_table').DataTable( {} );
    } );
</script>
@endsection
