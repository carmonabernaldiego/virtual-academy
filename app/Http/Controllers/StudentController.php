<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StudentFormRequest;

class StudentController extends Controller
{
    public function create()
    {
        return view('student.create');
    }

    public function store(studentFormRequest $request)
    {
        $data = $request->validated();

        /*$student = Student::create([
           'name'=>$data['name'],
           'email'=>$data['email'],
           'phone'=>$data['phone']
        ]);*/

        $student = Student::create($data);
        return redirect('/add-student')->with('message', 'Student Added Successfully');
    }
}
