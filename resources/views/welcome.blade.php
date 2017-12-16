@extends('dashboard')


@section('backend_content')
    <nav class="overview-nav">
        <a href="{{route('infoscreen')}}" class="btn btn-info col col-md-12">
            <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
            Infoscreen
        </a>
        <a href="{{route('tdot.list')}}" class="btn btn-info col col-md-12">
            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
            Tag der offenen Tür
        </a>
        <a href="{{ route('login') }}" class="btn btn-info col col-md-12">
            <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
            Login
        </a>
    </nav>
@stop
