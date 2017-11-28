<?php

namespace App\Http\Controllers;

use App\Tdot;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $events = Tdot::get();
        return view("dashboard", ["events" => $events]);
    }

    public function listEvents(){
        $events = Tdot::get();
        return view("tdot", ["events" => $events]);

    }
}
