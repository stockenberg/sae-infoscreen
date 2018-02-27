@extends('dashboard')

@section('backend_content')
    <h2>Dozentenverwaltung</h2>
    <lecturer-list :img-path="'{{asset('img/')}}'" :departments="{{$departments}}" :lecturers="{{$lecturers}}"></lecturer-list>
    @stop

