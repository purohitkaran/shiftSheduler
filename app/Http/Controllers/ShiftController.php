<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use App\Models\Allocate;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Role;
use DB;

class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $shifts = Shift::latest()->paginate(5);
         $allocates = Allocate::latest()->paginate(5);

        return view('shift.index',compact('shifts'),compact('allocates'))
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
        return view('shift.create',compact('roles'));
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
            'day' => 'required',
            'shiftfrom' => 'required',
            'shiftto' => 'required',
        ]);

        
        Shift::create($request->all());

        return redirect()->route('shift.index')
                        ->with('success','Shift created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shift  $shift
     * @return \Illuminate\Http\Response
     */
    public function show(Shift $shift)
    {
        return view('shift.show',compact('shift'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shift  $shift
     * @return \Illuminate\Http\Response
     */
    public function edit(Shift $shift)
    {
        return view('shift.edit',compact('shift'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shift  $shift
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shift $shift)
    {
        $request->validate([
            'day' => 'required',
            'shiftfrom' => 'required',
            'shiftto' => 'required',
        ]);

        $shift->update($request->all());

        return redirect()->route('shift.index')
                        ->with('success','Shift Info updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shift  $shift
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shift $shift)
    {
        $shift->delete();

        return redirect()->route('shift.index')
                        ->with('success','Shift deleted successfully');
    }

    public function showcalendar()
    {
         $shifts = Shift::latest()->paginate(5);
         $allocates = Allocate::latest()->paginate(5);
        return view('shift.index',compact('shifts'),compact('allocates'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function empShifts()
    {
         $shifts = Shift::latest()->paginate(5);
         $allocates = Allocate::latest()->paginate(5);
        return view('shift.employee',compact('shifts'),compact('allocates'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
