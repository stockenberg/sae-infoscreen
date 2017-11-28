@include("partials.header")
<a href="{{url("/bewertungen")}}" class="redirect"></a>
@if(empty($lessons))
    <div id="subject">
        <h2>Frei</h2>
        <h1>Seminarraum {{$room}}</h1>
    </div>
@else

<div class="wrapper-rating">
    <div id="subject">
        <h2>{{$lessons[0][":subject"]}}
            mit {{$lessons[0][":lecturer"]}}</h2>
        <h1>Seminarraum {{$room}}</h1>
        <h3>Kurs: {{$lessons[0][":course"]}}</h3>

    </div>
    <div id="rating">

        <nav>
            @foreach($lessons as $lesson)
                <a href="#" data-course="{{$lesson[":course"]}}" data-lecturer="{{$lesson[":lecturer"]}}"
                   data-date="{{time()}}" data-red=""
                   data-subject="{{$lesson[":subject"]}}" data-eval="green" class="rate green">:)</a>
                <a href="#" data-course="{{$lesson[":course"]}}" data-lecturer="{{$lesson[":lecturer"]}}"
                   data-date="{{time()}}" data-red=""
                   data-subject="{{$lesson[":subject"]}}" data-eval="yellow" class="rate yellow">:|</a>
                <a href="#" data-course="{{$lesson[":course"]}}" data-lecturer="{{$lesson[":lecturer"]}}"
                   data-date="{{time()}}" data-red=""
                   data-subject="{{$lesson[":subject"]}}" data-eval="red" class="rate red">:(</a>
            @endforeach
        </nav>
    </div>
</div>
    <script>
        setTimeout(function () {
            location.reload();
        }, 5 * 60 * 1000);
    </script>
@endif
@include("partials.footer")
