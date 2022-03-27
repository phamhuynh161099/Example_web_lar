<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


/**
 * use cmd to create controller: php artisan make:controller StudentController
 */
class StudentController extends Controller
{
    public function index(){
        $students=Student::query()->get();

        return view('students.index',compact('students'));
    }

    public function create(){
        return view('students.create');
    }

    public function store(Request $request){
        $student=new Student();
        $student->first_name=$request->get('first_name');
        $student->last_name=$request->get('last_name');
        $student->gender=$request->get('gender');
        $student->birthdate=$request->get('birthdate');
        $student->save();
    }
}
