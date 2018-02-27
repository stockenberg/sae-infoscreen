<?php

namespace App\Http\Controllers;

use App\Department;
use App\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lecturers.index', [
        	'lecturers' => Lecturer::orderBy('lastname')->with('departments')->get(),
			'departments' => Department::all()
		]);

    }

	public function refresh()
	{
		return Lecturer::orderBy('lastname')->with('departments')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lecturer = new Lecturer();

        $lecturer->firstname = $request->firstname;
        $lecturer->lastname = $request->lastname;
        $lecturer->core_competence = $request->core_competence;
        $lecturer->lessons_held = $request->lessons_held;
        $lecturer->additional_info = $request->additional_info;

        $lecturer->save();

        $lecturer->departments()->attach($request->departments);

        return response('saved');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$lecturer = Lecturer::find($id);
    	$lecturer->delete();
		return response('deleted');
    }
}
