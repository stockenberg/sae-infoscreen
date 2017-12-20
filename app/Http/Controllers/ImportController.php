<?php

namespace App\Http\Controllers;

use App\Magazine;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImportController extends Controller
{



	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('ircc.import');
	}


	public function upload(Request $request)
	{

		$request->file('students')->storeAs('uploads/students', 'students.csv');
		$file = Storage::get('uploads/students/students.csv');
		$file = str_replace("\t", ',', $file);
		$file = $this->csv_parse($file);



		foreach ($file as $index => $value){
			$data = Student::where('student_number', '=', $value['student number'])->first();

			if(!$data){
				$student = new Student();
				$student->name = $value['firstname']." ".$value['lastname'];
				$student->course = $value['course'];
				$student->student_number = $value["student number"];
				$student->industrial_contact_id = 0;
				$student->save();
			}
		}

		Storage::delete('uploads/students/students.csv');

		return redirect()->back()
			->with('success', 'Datensatz erfolgreich importiert');
	}


	public function csv_parse($filepath, $options = array())
	{

		// Merge default options
		$options = array_merge(array(
			'eol'       => "\n",
			'delimiter' => ',',
			'enclosure' => '"',
			'escape'    => '\\',
			'to_object' => false,
		), $options);

		// Read file, explode into lines
		$string = $filepath;
		$lines = explode($options['eol'], $string);

		// Read the first row, consider as field names
		$header = array_map('trim',
			explode($options['delimiter'], array_shift($lines)));

		// Build the associative array
		$csv = array();
		foreach ($lines as $line) {
			// Skip if empty
			if (empty($line)) {
				continue;
			}

			// Explode the line
			$fields = str_getcsv($line, $options['delimiter'],
				$options['enclosure'], $options['escape']);
			// Initialize the line array/object
			$temp = $options['to_object'] ? new stdClass : array();

			foreach ($header as $index => $key) {
				$options['to_object']
					? $temp->{trim($key)} = trim($fields[$index])
					: $temp[trim($key)] = trim($fields[$index]);
			}

			$csv[] = $temp;
		}


		return $csv;
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
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int                      $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
