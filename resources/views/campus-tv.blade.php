@extends('dashboard')

@section('backend_content')
    <p>
        <a href="{{route('campus-tv-create')}}" class="btn btn-success">Neues Event</a>
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

                <a href="{{route('campus-tv-edit', ['id' => $event->id])}}">{{$event->headline}}</a>

                    <a href="{{route('campus-tv-destroy', ['id' => $event->id])}}" class="btn-danger btn pull-right">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </a>
            </li>
        @endforeach
    </ul>
@stop
