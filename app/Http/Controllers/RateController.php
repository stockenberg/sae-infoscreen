<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RateController extends Controller
{
    public function index($id)
    {

        $lessonsrc = json_decode(file_get_contents("http://www.saeleipzig.de/raumplan/public/curriculum.json"));

        $today = date("Y-m-d", time() + 7200);
        $whichTime = date("H:i", time() + 7200);
        $lectures = [];

        foreach ($lessonsrc as $lesson => $details) {

            if (
                $details->{":startdate"} == $today
                && $id == $details->{":room"}
                && strtotime($whichTime) >= strtotime($details->{":starttime"}) - 900 && strtotime($whichTime) < strtotime($details->{":endtime"}) + 900
                ) {
                $tmp[":course"] = $details->{":course"};
                $tmp[":lecturer"] = $details->{":lecturer"};
                $tmp[":lecturer"] = explode(",", $tmp[":lecturer"])[1] . " " . explode(",", $tmp[":lecturer"])[0];
                $tmp[":subject"] = $details->{":subject"};
                $lectures[] = $tmp;
                break;
            }

        }


        return view("bewertungen", ["lessons" => $lectures, "room" => $id]);
    }

    public function addOne($date, $evaluation, $teacher, $class, $subject, $red_reason = ""){

    }
}
