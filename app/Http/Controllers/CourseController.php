<?php

namespace App\Http\Controllers;

use App\Course;
use App\Department;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //Manage Course View
    public function index()
    {
        return view('admin.course.index',
            ['courses' => Course::with('department')
                ->latest()->paginate(5)]);
    }

    //Add Course View
    public function create()
    {
        return view('admin.course.create', ['departments' => Department::all()]);
    }

    //Save Course Function
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


    public function show($id)
    {

    }

    //Edit Course View
    public function edit($id)
    {
        return view('admin.course.edit',
            ['course'=>Course::with('department')
                ->find($id),'departments' => Department::all()]);
    }

    //Update Course Function
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

    //Delete Course Function
    public function destroy($id)
    {

        $course = Course::findOrFail($id);

        $course->delete();

        return redirect()->route('course.index')
            ->with(['message' => 'Course Info Deleted Successfully']);

    }
}
