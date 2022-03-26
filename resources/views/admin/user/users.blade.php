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
                            <li ><a href="{{ route('user.series') }}">My Series</a></li>
                        @endauth
                        @can('isAdmin')
                                <li class="active"><a href="{{ route('user.index') }}">User</a></li>
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
                <div class="div alert alert-success agileits-single-top">
                    {{ session()->get('status') }}
                </div>
                @endif
                <div class="row" style="margin-top:80px">
                    <table id="serie_table" class="display">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>created_at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user )
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at->year }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <form method="post" action="{{ route('user.destroy',$user->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button  class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Remove Product">
                                                    <i class="fa fa-fw fa-times"></i>
                                                </button>
                                            </form>
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
