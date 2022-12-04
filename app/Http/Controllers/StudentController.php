<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function getStudent()
    {
        return response()->json(Student::all(),200);

    }

    public function getStudentById($id)
    {
        $students=Student::find($id);
        if (is_null($students))
        {
            return response()->json(['message' => 'Student not found'],404);
        }
        return response()->json($students::find($id));

    }
}
