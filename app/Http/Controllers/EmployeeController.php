<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Employee::all();
        return view('employees.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'first'=>'required|string|min:3|max:20',
                'last'=>'required|string|min:3|max:20',
                'password'=>'required|string|min:3|max:20',
                'email'=>'required|email',
                'type'=>'required|string|min:3|max:20',
            ]
        );
        $users=new Employee();
        $users->firstName=$request->first;
        $users->lastName=$request->last;
        $users->email=$request->email;
        $users->password=$request->password;
        $users->type=$request->type;
        $users->save();
        return redirect('employees')->with('success','Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate(
            [
                'first'=>'required|string|min:3|max:20',
                'last'=>'required|string|min:3|max:20',
                'password'=>'required|string|min:3|max:20',
                'email'=>'required|email',
                'type'=>'required|string|min:3|max:20',
            ]
        );
        $users= Employee::find($employee->id);
        $users->firstName=$request->first;
        $users->lastName=$request->last;
        $users->email=$request->email;
        $users->password=$request->password;
        $users->type=$request->type;
        $users->save();
        return redirect('employees')->with('success','Edit Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}