<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employee(){
        $employees = Employee::all();
        return view('employees.index', ['employees' => $employees]);
    }

    public function employees_profile($id)
    {
        $employee = Employee::findOrFail($id); // Fetch the employee by ID
        return view('employees.employees_profile', compact('employee')); // Pass the employee data to the view
    }

    public function updatePicture(Request $request, $id)
{
    $request->validate([
        'profile_pic' => 'required|image|mimes:jpg,jpeg,png|max:2048', // Validate the uploaded file
    ]);

    $employee = Employee::findOrFail($id); // Find the employee by ID

    // Handle the file upload
    if ($request->hasFile('profile_pic')) {
        // Store the new profile picture and delete the old one if necessary
        $path = $request->file('profile_pic')->store('profile_pics', 'public');
        $employee->profile_pic = $path; // Store the new path in the database
        $employee->save(); // Save the changes
    }

    return redirect()->route('employee.show', $id)->with('success', 'Profile picture updated successfully!');
}

public function edit($id)
{
    $employee = Employee::findOrFail($id); // Find the employee by ID
    return view('employees.edit', compact('employee')); // Ensure you have an edit view
}
}
