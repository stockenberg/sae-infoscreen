<?php

namespace App\Http\Controllers\ircc;

use App\Department;
use App\IndustrialContact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$departments = Department::all();

    	$contacts = IndustrialContact::with([
    		'departments',
			'histories' => function ( $query ){ $query->orderBy('created_at', 'DESC'); },
			'jobs' => function ( $query ){ $query->orderBy('created_at', 'DESC'); },
			'students'])
			->get();

        return view('ircc.main', ['contacts' => $contacts, 'departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$departments = Department::all();
        return view('ircc.create', ['departments' => $departments]);
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
    		'name' => 'required',
			'likes' => 'required',
			'primary_contact' => 'required',
			'last_contact' => 'required',
			'last_contact_person' => 'required',

		]);

        $industrialContact = new IndustrialContact();

        $industrialContact->name = $request->name;
        $industrialContact->likes = $request->likes;
        $industrialContact->primary_contact = $request->primary_contact;
        $industrialContact->last_contact = $request->last_contact;
        $industrialContact->last_contact_person = $request->last_contact_person;
        $industrialContact->adress = $request->adress;

        $industrialContact->save();
        $industrialContact->departments()->attach($request->departments);

		return redirect()->back();
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
        //
    }
}
