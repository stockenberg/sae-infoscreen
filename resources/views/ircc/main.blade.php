@extends('dashboard')


@section('backend_content')
    <div class="row text-center">
        <a href="{{route('ircc.create')}}" class="btn btn-success">Neuen Kontakt anlegen</a>
    </div>

    <contact-list :img-path="'{{asset('img/')}}'" :items="{{json_encode($contacts)}}" :departments="{{json_encode($departments)}}"></contact-list>
@stop