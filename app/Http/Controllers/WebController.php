<?php

namespace App\Http\Controllers;

use App\Models\listaddstudent;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        // lay sp trong db
        $student = listaddstudent::paginate(10);

        return view("StudentList",[
            "student"=>$student,

        ]);
    }
    public function add(){
        return view("AddStudent");
    }
}
