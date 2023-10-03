<?php

namespace App\Http\Controllers;

use App\Models\Allocate;
use App\Models\Employee;
use App\Models\Shift;
use DB;

use Illuminate\Http\Request;

class AllocateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allocates = Allocate::latest()->paginate(5);
        return view('allocate.index',compact('allocates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::latest()->paginate(5);
        $shifts = Shift::latest()->paginate(5);

        return view('allocate.create', compact('employees'), compact('shifts'));
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
            'empid' => 'required',
            'empname' => 'required',
            'shiftdate' => 'required',
            'shift'=> 'required',
        ]);
        $empid=$request['empid'];
        $dt=$request['shiftdate'];
        $q="select * from allocated_shifts where empid='$empid' and shiftdate='$dt'";
        $result=DB::select($q);

        if($result)
        {
        return redirect()->route('allocate.create')
                        ->with('danger',"Sorry, This staff is alreay allocated shift to this day.");
        }
        else
        {
            Allocate::create($request->all());

            return redirect()->route('allocate.index')
                        ->with('success','Shfit successfully Allocated.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Allocate  $allocate
     * @return \Illuminate\Http\Response
     */
    public function show(Allocate $allocate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Allocate  $allocate
     * @return \Illuminate\Http\Response
     */
    public function edit(Allocate $allocate)
    {
        $employees = Employee::latest()->paginate(5);
        $shifts = Shift::latest()->paginate(5);

        return view('allocate.edit',compact('allocate'),compact('employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Allocate  $allocate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Allocate $allocate)
    {
        $request->validate([
            'empid' => 'required',
            'empname' => 'required',
            'shiftdate' => 'required',
            'shift'=> 'required',
        ]);

        $allocate->update($request->all());

       return redirect()->route('allocate.index')
                        ->with('success','Allocation Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Allocate  $allocate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Allocate $allocate)
    {
         $allocate->delete();

        return redirect()->route('allocate.index')
                        ->with('success','Allocation deleted successfully');
    }
}
