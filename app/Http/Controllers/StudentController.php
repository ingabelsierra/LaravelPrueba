<?php

namespace App\Http\Controllers;

use App\Student;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Psy\debug;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $students = Student::orderBy('id')->get();
        $subjects = Subject::orderBy('id')->get();
        //return view('students.index', ['students' => $students]);
        return view('students.index',array ('students'=>$students,'subjects'=>$subjects));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::orderBy('id')->get();
        return view('students.create', ['subjects' => $subjects]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    $data = $request->all();
	    Student::create($data);

	    Session::flash('message', $data['name'] . ' added successfully');
	    return redirect('/students');
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
    	$student = Student::find($id);
        return view('students/edit', ['student' => $student]);
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
        $student = Student::find($id);
        $data = $request->all();
        $student->update($data);

	    Session::flash('message', $student['name'] . ' updated successfully');
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $student = Student::find($id);
	    $student->destroy($id);

	    Session::flash('message', $student['name'] . ' deleted successfully');
	    return redirect('/students');
    }
}
