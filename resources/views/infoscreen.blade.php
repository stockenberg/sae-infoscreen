@include("partials.header")

<div id="wrapper">
    <div id="header">
        <h1 class="grid_5">SAE Institute Leipzig | Infoscreen</h1>
        <time class="grid_5"><span id="date"></span> | <span id="clock">00:00:00</span> Uhr</time>
    </div>

    <div id="content" class="clearfix col">

        <div id="lecture" class="grid_8 clearfix">
            @for ($room = 1; $room <= 4; $room++)
                <div class="grid_2">
                    <h3>Raum: {{ $room }} </h3>
                    <table class="table room_{{ $room }}">
                        @for ($runningTime = strtotime($start); $runningTime <= strtotime($end); $runningTime += 1800)
                            @foreach ($lectures as $row => $lecture)
                                @if ($lecture[":room"] == $room)
                                    @if (strtotime($lecture[":starttime"]) == $runningTime)
                                        @if (isset($lessons[$lecture[":room"]][$runningTime]["subject"]) && $lessons[$lecture[":room"]][$runningTime]["subject"] == $lecture[":subject"])
                                            <?php $lessons[$lecture[":room"]][$runningTime]["course"][$lecture[":course"]] =
                                                $lecture[":course"] ?>
                                        @else
                                            <?php  $lessons[$lecture[":room"]][$runningTime]["course"][$lecture[":course"]] =
                                                $lecture[":course"] ?>
                                        @endif

                                        <?php $lessons[$lecture[":room"]][$runningTime]["subject"] = $lecture[":subject"] ?>
                                        <?php $lessons[$lecture[":room"]][$runningTime]["lecturer"] = $lecture[":lecturer"] ?>
                                        <?php $lessons[$lecture[":room"]][$runningTime]["span"] = -1 ?>
                                        @for ($count = strtotime($lecture[":starttime"]); $count <= strtotime($lecture[":endtime"]); $count += 1800)
                                            <?php $lessons[$lecture[":room"]][$runningTime]["span"] += 1 ?>
                                        @endfor

                                    @endif
                                @endif
                            @endforeach
                            <tr>

                                <td>{{ date("H:i", $runningTime) }}</td>
                                <td class="{{ ($lessons[$room][$runningTime]["span"] ?? "") ? "lesson" : "" }}"
                                    rowspan="{{ $lessons[$room][$runningTime]["span"] ?? 0 }}">
                                    @if (isset($lessons[$room][$runningTime]["span"]))
                                        <h2>{{ $lessons[$room][$runningTime]["subject"] ?? "" }}
                                            - {{ $lessons[$room][$runningTime]["lecturer"] ?? "" }}</h2>
                                        <ul>
                                            @foreach ($lessons[$room][$runningTime]["course"] ?? array() as $course)
                                                <li>{{ $course }}</li>
                                            @endforeach

                                        </ul>
                                    @endif
                                </td>
                            </tr>
                        @endfor
                    </table>
                </div>
            @endfor

        </div>

        <div id="supervisor" class="grid_4 col clearfix">
            <h2 class="mt10">Supis</h2>


            @foreach($supis as $name)
                @foreach(Spatie\GoogleCalendar\Event::get($name) as $events)
                    @if(date("d.m", strtotime($events->startDateTime)) == date("d.m", time() + 7200) && !preg_match("/@/", $events->summary))
                        <div class="keystaffItem clearfix">
                            <figure style="overflow: hidden; text-align: center;">
                                <img src="img/supervisor/{{strtolower($events->summary)}}.jpg" height="174" width="144"
                                     alt=""/>
                                <figcaption>{{$events->summary}} [{{ucfirst($name)}}]</figcaption>
                            </figure>
                            <div>
                                {{date("H:i", strtotime($events->startDateTime ))}}
                                -
                                {{date("H:i", strtotime($events->endDateTime))}}

                            </div>
                        </div>
                        @break
                    @endif
                @endforeach
            @endforeach

        </div>

        <div id="supervisor" class="grid_4 col clearfix">
            <h2 class="mt10">Chef Etage</h2>

            @foreach($keystaff as $name)

                @foreach(Spatie\GoogleCalendar\Event::get($name) as $event)
                    @if(date("d.m", strtotime($event->startDateTime)) == date("d.m", time() + 7200) && !preg_match("/@/", $event->summary))
                        <div class="keystaffItem clearfix">
                            <figure style="overflow: hidden; text-align: center;">
                                <img src="img/keystaff/{{strtolower($event->summary)}}.jpg" width="150" alt=""/>
                                <figcaption>{{$event->summary}}</figcaption>
                            </figure>
                            <div>
                                {{date("H:i", strtotime($event->startDateTime))}}
                                -
                                {{date("H:i", strtotime($event->endDateTime ))}}

                            </div>
                        </div>
                        @break
                    @endif
                @endforeach
            @endforeach

        </div>
    </div>


</div>
@include("partials.footer")