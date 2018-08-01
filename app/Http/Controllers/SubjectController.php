<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Psy\debug;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::orderBy('id')->get();
        return view('subjects.index', ['subjects' => $subjects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::orderBy('id')->get();
        return view('subjects.create', ['teachers' => $teachers]);
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
        Subject::create($data);

        Session::flash('message', $data['name'] . ' added successfully');
        return redirect('/subjects');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = Subject::find($id);
        return view('subjects/edit', ['subject' => $subject]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subject = Subject::find($id);
        $data = $request->all();
        $subject->update($data);

        Session::flash('message', $subject['name'] . ' updated successfully');
        return redirect('/subjects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = Subject::find($id);
        $subject->destroy($id);

        Session::flash('message', $subject['name'] . ' deleted successfully');
        return redirect('/subjects');
    }
}
