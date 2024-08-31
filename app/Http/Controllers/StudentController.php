<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke()
    {
        return "Cheguei na Home Students!";   
    }
    public function index()
    {
        return view("students.index");
    }

    public function getStudents()
    {
        $students = Student::select('id', 'name', 'email', 'created_at', 'updated_at');
        return DataTables::of($students)->make(true);
    }
}
