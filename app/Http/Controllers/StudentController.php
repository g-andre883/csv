<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentImport;

class StudentController extends Controller
{
    public function index()
    {

        $students = Student::all();
        return view('student',['students'=>$students]);

    }

    public function import(Request $req)
    {

        Excel::import(new StudentImport,$req->file('student_file'));
        return back();

    }
}
