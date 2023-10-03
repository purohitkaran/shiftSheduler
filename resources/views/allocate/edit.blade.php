@extends('shift.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Allocate Shift</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('allocate.index') }}"> Back</a>
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

<form action="{{ route('allocate.update',$allocate->id) }}" method="POST">
        @csrf
        @method('PUT')
     <div class="row">


        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Select Date:</strong>
                <input type="date"  name="shiftdate" value="{{ $allocate->shiftdate }}" class="form-control" placeholder="Select Date" required>
            </div>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Select Shift:</strong>
                <input type="text" id="shift" name="shift" class="form-control" value="{{ $allocate->shift }}"

            </div>
        </div>
</div>
<div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Allocated Staff:</strong>
                 <input type="text" name="empname" id="empname" class="form-control" value="{{ $allocate->empname }}" placeholder="empname" required readonly>

            </div>
        </div>

         <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Role:</strong>
                <input type="text" name="role" id="role" class="form-control" value="{{ $allocate->role }}" placeholder="empname" required readonly>
            </div>
        </div>
</div>
<div class="row">



        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <br><br>
                <strong>Change Employee:</strong>
                <select id="emp" class="form-control">
                 @foreach ($employees as $employee)
                    <option value="{{ $employee->empid}},{{ $employee->empfname}} {{ $employee->emplname}},{{ $employee->roles}}">{{ $employee->empid}} - {{ $employee->empfname}} {{ $employee->emplname}} Role:{{ $employee->roles}} </option>
                   <h1>a</h1>
                 @endforeach
                </select>
                <input type="hidden" name="empid" id="empid" value="{{ $employee->empid}}" class="form-control" placeholder="empid" required>

            </div>
        </div>


        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <br><br><br>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>




    </div>

</form>
@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){



    var empdetails=$("#emp").val().split(',');;



  $("#emp").change(function(){
     var empdetails=$("#emp").val().split(',');;

     $("#empid").val(empdetails[0]);
     $("#empname").val(empdetails[1]);
     $("#role").val(empdetails[2]);
  });
});
</script>

