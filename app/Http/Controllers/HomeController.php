<?php

namespace App\Http\Controllers;

use App\Department;
use App\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Home View
    public function index()
    {
        $studentCount = Student::count();
        $departmentCount = Department::count();

        return view('admin.home.home', ['studentCount'=>$studentCount, 'departmentCount'=>$departmentCount]);



    }
}
