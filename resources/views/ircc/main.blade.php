@extends('dashboard')


@section('backend_content')
    <contact-list :img-path="'{{asset('img/')}}'" :items="{{json_encode($contacts)}}"></contact-list>
    @stop