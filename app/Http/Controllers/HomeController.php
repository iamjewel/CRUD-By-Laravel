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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        return view('admin.app');

        $studentCount = Student::count();
        $departmentCount = Department::count();

        return view('admin.home.home', ['studentCount'=>$studentCount, 'departmentCount'=>$departmentCount]);



    }
}
