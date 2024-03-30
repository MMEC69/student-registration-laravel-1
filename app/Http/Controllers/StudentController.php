<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    public function studentRegister(){
        return view("student.studentRegister");
    }

    public function store(Request $request){
        $data = $request->validate([
            "name" => "required",
            "age" => "required|numeric",
            "image" => "required",
            "status" => "required",
        ]);

        $newStudent = student::create($data);

        return redirect(route("student.studentRegister"));
    }

    public function studentView(){
        $students = student::all();
        return view("student.studentView", ["students" => $students]);
    }

    public function studentUpdate(student $student, Request $request){
        $data = $request->validate([
            "name" => "required",
            "age" => "required|numeric",
            "image" => "required",
            "status" => "required",
        ]);

        $student->update($data);
        return redirect(route("student.studentView"))->with("Success", "Product updated Succesfully");
    }

    
    public function studentModify(student $student){
        return view ("student.studentModify", ['student' => $student]);
    }

    public function studentDelete(student $student){
        $student->delete();
        return redirect(route("student.studentView"))->with("Success", "Product deleted Succesfully");

    }
}

    
