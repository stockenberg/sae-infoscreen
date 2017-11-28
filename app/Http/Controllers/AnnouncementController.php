<?php

namespace App\Http\Controllers;

use App\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Announcement::all();
        return view('campus-tv', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('campus-tv-partials.form');
    }


	public function toggleVisibility($id)
	{
		$event = Announcement::find($id);

		$event->active = !$event->active;

		$event->save();

		return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    	$this->validate($request, [
    		'headline' => 'required',
    		'details' => 'required',
    		'subheadline' => 'required',
    		'background' => 'required'
		]);

        $event = new Announcement();

        $event->headline = $request->headline;
        $event->details = $request->details;
        $event->subheadline = $request->subheadline;
        $event->background = $request->background;
        $event->active = $request->active ?? false;

        $event->save();

        return redirect()->route('campus-tv');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Announcement::find($id);
		return view('campus-tv-partials.form', ['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$this->validate($request, [
			'headline' => 'required',
			'details' => 'required',
			'background' => 'required'
		]);

		$event = Announcement::find($id);

		$event->headline = $request->headline;
		$event->details = $request->details;
		$event->subheadline = $request->subheadline;
		$event->background = $request->background;
		$event->active = $request->active ?? false;

		$event->save();

		return redirect()->route('campus-tv');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Announcement::destroy($id);
        return redirect()->back();
    }
}
