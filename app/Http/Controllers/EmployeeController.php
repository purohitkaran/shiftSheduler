<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $employees = Employee::latest()->paginate(5);

        return view('employee.index',compact('employees'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::latest()->paginate(5);
        return view('employee.create',compact('roles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'empfname' => 'required',
            'emplname' => 'required',
        ]);

        Employee::create($request->all());
        $fullname= $request['empfname'].' '.$request['emplname'];
        User::create([
            'name' => $fullname,
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'empid'=> $request['empid'],

        ]);
        return redirect()->route('employee.index')
                        ->with('success','User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employee.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $roles = Role::latest()->paginate(5);
        return view('employee.edit',compact('employee'),compact('roles'));
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
        $request->validate([
            'empfname' => 'required',
            'emplname' => 'required',
        ]);

        $employee->update($request->all());

        return redirect()->route('employee.index')
                        ->with('success','Employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employee.index')
                        ->with('success','Employee deleted successfully');
    }

    public function available()
    {

        $employees = DB::select("select * from employees where empid not in (SELECT empid FROM `allocated_shifts` WHERE shiftdate=CURRENT_DATE())");
         return view('employee.available',compact('employees'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
