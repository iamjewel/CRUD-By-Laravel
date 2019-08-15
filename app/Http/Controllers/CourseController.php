<?php

namespace App\Http\Controllers;

use App\Course;
use App\Department;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.course.index',
            ['courses' => Course::with('department')
                ->latest()->paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create', ['departments' => Department::all()]);
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

            'department_id' => 'required',
            'course_name' => 'required|unique:courses',

        ]);

        Course::create($request->all());

        return redirect()->route('course.create')
            ->with(['message' => 'Course Info Saved Successfully']);

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
        return view('admin.course.edit',
            ['course'=>Course::with('department')
                ->find($id),'departments' => Department::all()]);
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
        $course = Course::find($id);

        $this->validate($request, [

            'department_id' => 'required',
            'course_name' => 'required|unique:courses,course_name,'.$course->id,

        ]);


        $course->update($request->all());

        return redirect()->route('course.index')
            ->with(['message' => 'Course Info Updated Successfully']);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $course = Course::findOrFail($id);

        $course->delete();

        return redirect()->route('course.index')
            ->with(['message' => 'Course Info Deleted Successfully']);

    }
}
