<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $lessonsrc = json_decode(file_get_contents("http://www.saeleipzig.de/raumplan/public/curriculum.json"));

        $whichDay = date("Y-m-d", time() + 7200);

        $lectures = [];

        foreach ($lessonsrc as $lesson => $details) {

            if ($details->{":startdate"} == $whichDay) {
                $tmp[":startdate"] = $details->{":startdate"};
                $tmp[":starttime"] = $details->{":starttime"};
                $tmp[":enddate"] = $details->{":enddate"};
                $tmp[":endtime"] = $details->{":endtime"};
                $tmp[":allday"] = $details->{":allday"};
                $tmp[":room"] = $details->{":room"};
                $tmp[":course"] = $details->{":course"};
                $tmp[":lecturer"] = $details->{":lecturer"};
                $tmp[":subject"] = $details->{":subject"};
                $lectures[] = $tmp;
            }

        }

        $start = "9:00";
        $end = "21:00";

        $supis = ["film", "web", "audio", "game", "gameprog"];
        $keystaff = ["manager", "filmhi", "coordinator", "audiohi", "webhi", "crossmediahi", "accademiccoordinator", "torstenw"];

        return view("infoscreen", [
            "lectures" => $lectures,
            "keystaff" => $keystaff,
            "supis" => $supis,
            "start" => $start,
            "end" => $end,
            "lessons" => []
        ]);
    }

}
