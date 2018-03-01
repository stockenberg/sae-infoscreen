@extends('dashboard')


@section('backend_content')
    <h2>Company Map</h2>
    @stop

@section('backend_fullscreen')
    <company-map :companies="{{$contacts}}"></company-map>
    @stop