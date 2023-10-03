@extends('employee.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Employee</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('employee.index') }}"> Back</a>
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

<form action="{{ route('employee.store') }}" method="POST">
    @csrf

     <div class="row">

        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Employee Id:</strong>
                <input type="text" name="empid" class="form-control" placeholder="Employee Code" required>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>First Name:</strong>
                <input type="text" name="empfname" class="form-control" placeholder="First Name" required>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Last Name:</strong>
                <input type="text" name="emplname" class="form-control" placeholder="First Name" required>
            </div>
        </div>

        <!-- <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Designation:</strong>
                <input type="text" name="designation" class="form-control" placeholder="Designation" required>
            </div>
        </div> -->

         <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Mobile No:</strong>
                <input type="text" name="mobileno" class="form-control" placeholder="Mobile No" required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Street Address:</strong>
                <textarea class="form-control" style="height:150px" name="address" placeholder="Street Address here"></textarea>
            </div>
        </div>

        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Province:</strong>

                <select name="province" id="province" class="form-control">
	<option value="AB">Alberta</option>
	<option value="BC">British Columbia</option>
	<option value="MB">Manitoba</option>
	<option value="NB">New Brunswick</option>
	<option value="NL">Newfoundland and Labrador</option>
	<option value="NS">Nova Scotia</option>
	<option value="NT">Northwest Territories</option>
	<option value="NU">Nunavut</option>
	<option value="ON">Ontario</option>
	<option value="PE">Prince Edward Island</option>
	<option value="QC">Quebec</option>
	<option value="SK">Saskatchewan</option>
	<option value="YT">Yukon</option>
</select>
            </div>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Postal Code:</strong>
                <input type="text" name="postalcode" class="form-control" placeholder="Postal/ZIP code"
                pattern="[A-Za-z][0-9][A-Za-z][0-9][A-Za-z][0-9]"
                title="Enter Valid Postal Code" required>
            </div>
        </div>


        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Password:</strong>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Select Role:</strong>
                 @foreach ($roles as $role)
                    <input type="checkbox" class="chkbox" value="{{ $role->role }}"> {{ $role->role }} </td>
                 @endforeach
                <input type="hidden" name="roles" id="roles" class="form-control" placeholder="Roles" required>
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

  $(".chkbox").click(function(){
     var roles="";
    $(".chkbox").each(function(){
        let isChecked = $(this).prop('checked');
        if(isChecked==true)
        {
            //alert($(this).val())
            if(roles=="")
                roles=$(this).val();
            else
               roles= roles+","+$(this).val();
        }
     });
     $("#roles").val(roles);
  });
});
</script>
