@extends('layouts.app')
<nav class="navbar navbar-default navbar-static-top ">
    <div class="container">
        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                SAE Campus Administration
            </a>


        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                @else
                <li><a href="">Tdot Verwaltung</a></li>
                <li class="nav-item dropdown"><a href="">IRCC-Tools</a>
                <ul class="dropdown-menu">
                     <li class="dropdown-item"><a href="{{route('ircc.main')}}">Company List</a></li>
                     <li class="dropdown-item"><a href="{{route('ircc.map')}}">Map</a></li>
                 </ul>
                </li>
             <li><a href="{{route('campus-tv')}}">Campus-TV Verwaltung</a></li>
             

             <li><a href="{{route('lecturer.index')}}">Dozentenliste</a></li>
             <li>
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
        @endif

    </ul>
</div>
</div>
</nav>
@section('content')
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    @yield('backend_content')
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    @yield('backend_fullscreen')
</div>
@endsection
