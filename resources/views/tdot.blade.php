@extends("layouts.app")

@section("content")


    <div class="features-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Heutige Präsentationen </h2>
                <hr>
            </div>
            <div class="row features">
                @foreach($events as $event)
                    @if($event->active)
                    <div class="col-md-6 col-sm-6 item" style="margin: 0px 0; ">
                        <div class="box" style="height: 320px;">
                            @if($event->department_id !== "")
                            <img src="{{asset("img/fb_icons/" . $event->department_id . ".png")}}" height="50" alt=""/>
                            @else
                            <i class="glyphicon glyphicon-question-sign icon" style="margin: 0;"></i>
                            @endif
                            <br/><br/>
                            <h3 class="name">{{$event->subject}}</h3>
                            <h5>Dozent: {{$event->lecturer}}</h5>
                            <p class="description text-center">{{$event->excerpt}}</p>
                            <p>Start um {{$event->time}} Uhr im {{$event->location_id}}</p>
                        </div>
                    </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
@endsection
