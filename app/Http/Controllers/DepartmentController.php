<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $departments = Department::latest()->paginate(5);

        return view('admin.department.index', ['departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.department.create');
    }

    //Add Department Function
    public function store(Request $request)
    {
        $this->validate($request, [

            'department_name' => 'required|unique:departments',
            'department_code' => 'required|unique:departments',
            'department_routine' => 'required',

        ]);


        $fileName = time() . '.' . request()->department_routine->getClientOriginalExtension();
        $fileUrl = request()->department_routine->move(('routines'), $fileName);

        $department = new Department();

        $department->department_name = $request->department_name;
        $department->department_code = $request->department_code;
        $department->department_routine = $fileUrl;
        $department->save();


        return redirect()->route('department.create')
            ->with(['message' => 'Department Saved Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.department.edit',
            ['department' => Department::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return string
     */
    public function update(Request $request, $id)
    {
        $department = Department::find($id);

        $this->validate($request, [

            'department_name' => 'required|unique:departments,department_name,' . $department->id,
            'department_code' => 'required|unique:departments,department_code,' . $department->id,

        ]);

        if ($request->department_routine) {
            $fileName = time() . '.' . request()->department_routine->getClientOriginalExtension();
            $fileUrl = request()->department_routine->move(('routines'), $fileName);

            unlink($department->department_routine);

            $department->department_name = $request->department_name;
            $department->department_code = $request->department_code;
            $department->department_routine = $fileUrl;
            $department->update();

            return redirect('/department/create')
                ->with(['message' => 'Department Update Successfully']);

        } else if (!$request->department_routine) {

            $department->department_name = $request->department_name;
            $department->department_code = $request->department_code;
            $department->update();

            return redirect()->route('department.index')
                ->with(['message' => 'Department Update Successfully']);

        }
        return 'Successful';
    }


    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        unlink($department->department_routine);
        $department->delete();

        return redirect()->route('department.index')
            ->with(['message' => 'Department Deleted Successfully']);

    }
}
