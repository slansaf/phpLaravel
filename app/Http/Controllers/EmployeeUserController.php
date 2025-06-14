<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\EmployeeUser;
use Illuminate\Support\Facades\Redirect;

class EmployeeUserController extends Controller
{
	//
	public function show($id = null)
	{

		return view('employeeuser', ['employee' => $id ? EmployeeUser::where('id', $id)->first() : null]);
	}

	public function store(Request $request)
	{

		$employee = new EmployeeUser($request->all());
		$employee->department = serialize($request->input('department'));
		$employee->save();

		return Redirect::route('show_employee', ['id' => $employee->id]);
	}
}
