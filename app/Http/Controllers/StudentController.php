<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    public function index(){
        
        $data = array("students" => DB::table('students')->orderBy('created_at', 'desc')->paginate(10));
        return view('students.index', $data);
        
    }

    public function create(){
        return view('students.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            "first_name" => ['required', 'min:3'],
            "last_name" => ['required', 'min:2'],
            "gender" => ['required'],
            "age" => ['required'],
            "email" => [' required', 'email', Rule::unique('students', 'email' )],
        
        ]);

       
        
        Students::create($validated);

        return redirect('/')->with('message', 'New students was add successfully!');

    }

}