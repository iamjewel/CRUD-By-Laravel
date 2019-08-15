<?php

namespace App\Http\Controllers;

use App\Department;
use App\Semester;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.student.index',
            ['students' => Student::with('department')
                ->latest()->paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.student.create',
            ['departments' => Department::all(), 'semesters' => Semester::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'name' => 'required',
            'image' => 'required',
            'department_id' => 'required',
            'semester_id' => 'required',
            'address' => 'required',

        ]);


        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        $imageUrl = request()->image->move(('images'), $imageName);

        $student = new Student();

        $student->name = $request->name;
        $student->image = $imageUrl;
        $student->department_id = $request->department_id;
        $student->semester_id = $request->semester_id;
        $student->address = $request->address;
        $student->save();

        return redirect('/student/create')
            ->with(['message' => 'Student Info Saved Successfully']);


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.student.edit',
            ['student' => Student::with('department', 'semester')
                ->find($id), 'departments' => Department::all(),
                'semesters' => Semester::all()]);
    }


    //Update Student Function
    public function update(Request $request, $id)
    {

        $this->validate($request, [

            'name' => 'required',
            'department_id' => 'required',
            'semester_id' => 'required',
            'address' => 'required',

        ]);

        $student = Student::findOrFail($id);


        if ($request->image) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            $imageUrl = request()->image->move(('images'), $imageName);

            unlink($student->image);

            $student->image = $imageUrl;
            $student->name = $request->name;
            $student->department_id = $request->department_id;
            $student->semester_id = $request->semester_id;
            $student->address = $request->address;
            $student->update();

            return redirect()->route('student.index')
                ->with(['message' => 'Student Info Saved Successfully']);

        } else if (!$request->image) {

            $student->name = $request->name;
            $student->department_id = $request->department_id;
            $student->semester_id = $request->semester_id;
            $student->address = $request->address;
            $student->update();

            return redirect()->route('student.index')
                ->with(['message' => 'Student Info Saved Successfully']);

        }


    }


    //Delete Student Function
    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        unlink($student->image);

        $student->delete();

        return redirect()->route('student.index')
            ->with(['message' => 'Student Info Deleted Successfully']);

    }
}
