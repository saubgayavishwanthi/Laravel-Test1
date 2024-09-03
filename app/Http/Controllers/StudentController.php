<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function Addstudent(){
        return view('index');
    }

    public function save(Request $request){
        Student::create([
            'student_name' => $request->studentname,
        'email' =>$request->studentemail,
        'dob' =>$request->studentDOB
        ]);

        $notification =[
            'message' => "student has been Added!"
        ];
        return redirect()->back()->with($notification);
    }
}
