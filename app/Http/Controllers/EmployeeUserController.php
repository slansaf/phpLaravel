<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\EmployeeUser;


class EmployeeUserController extends Controller
{
    //
    public function show($id)  {

        return view('employeeuser', ['employee' => $id ? Employee::where('id', $id)->first() : null]);
        
    }

     public function store(Request $request)  {

        $employee = new EmployeeUser($request->all());
        $employee->department = serialize($request->input('department'));
        $employee->save();
    }
}
