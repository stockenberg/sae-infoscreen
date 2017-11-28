@extends('dashboard')

@section('backend_content')
    <p>
        <a href="" class="btn btn-success">Neues Event</a>
    </p>
    <ul class="list-group">
        @foreach($events as $event)
            <li class="list-group-item">
                @if($event->active)
                    <a href="{{route('campus-tv-toggle', ['id' => $event->id])}}" class="btn">
                        <span class="glyphicon glyphicon-eye-open text-success" aria-hidden="true"></span>
                    </a>

                @else
                    <a href="{{route('campus-tv-toggle', ['id' => $event->id])}}" class="btn">
                        <span class="glyphicon glyphicon-eye-close text-danger" aria-hidden="true"></span>
                    </a>
                @endif

                <a href="">{{$event->headline}}</a>
            </li>
        @endforeach
    </ul>
@stop
