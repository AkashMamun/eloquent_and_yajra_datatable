<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        // $students = Student::all();
        $students = Student::where('id',5)->get();
        return $students;
    }
}
