@extends('shift.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Allocate Shift</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('shift.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if ($message = Session::get('danger'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif
<form action="{{ route('allocate.store') }}" method="POST">
    @csrf

     <div class="row">


        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Select Date:</strong>
                <input type="date"  name="shiftdate" class="form-control" placeholder="Select Date" required>
            </div>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Select Shift:</strong>
                <select id="shift" name="shift" class="form-control">
                 @foreach ($shifts as $shift)
                    <option>{{date('h:i A', strtotime($shift->shiftfrom))}} - {{date('h:i A', strtotime($shift->shiftto))}}</option>
                   <h1>a</h1>
                 @endforeach
                </select>
            </div>
        </div>
</div>
<div class="row">



        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Select Employee:</strong>
                <select id="emp" class="form-control">
                 @foreach ($employees as $employee)
                    <option value="{{ $employee->empid}},{{ $employee->empfname}} {{ $employee->emplname}},{{ $employee->roles}}">{{ $employee->empid}} - {{ $employee->empfname}} {{ $employee->emplname}} Role:{{ $employee->roles}} </option>
                   <h1>a</h1>
                 @endforeach
                </select>
                <input type="hidden" name="empid" id="empid" class="form-control" placeholder="empid" required>
                 <input type="hidden" name="empname" id="empname" class="form-control" placeholder="empname" required>
                 <input type="hidden" name="role" id="role" class="form-control" placeholder="empname" required>
            </div>
        </div>


        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>




    </div>

</form>
@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){



    var empdetails=$("#emp").val().split(',');;

     $("#empid").val(empdetails[0]);
     $("#empname").val(empdetails[1]);
     $("#role").val(empdetails[2]);

  $("#emp").change(function(){
     var empdetails=$("#emp").val().split(',');;

     $("#empid").val(empdetails[0]);
     $("#empname").val(empdetails[1]);
     $("#role").val(empdetails[2]);
  });
});
</script>
