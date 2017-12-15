@extends('dashboard')


@section('backend_content')
    <contact-list :img-path="'{{asset('img/')}}'"></contact-list>
    @stop