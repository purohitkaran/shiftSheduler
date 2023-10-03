@extends('employee.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Employee</h2>
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

    <form action="{{ route('employee.update',$employee->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="empfname" value="{{ $employee->empfname }}" class="form-control" placeholder="Name">
                </div>
            </div>

            <div class="row">

        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Employee Id:</strong>
                <input type="text" name="empid" value="{{ $employee->empid }}" class="form-control" placeholder="Employee Code">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>First Name:</strong>
                <input type="text" name="empfname" value="{{ $employee->empfname }}" class="form-control" placeholder="First Name">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Last Name:</strong>
                <input type="text" name="emplname" value="{{ $employee->emplname }}" class="form-control" placeholder="First Name">
            </div>
        </div>

        <!-- <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Designation:</strong>
                <input type="text" name="designation" value="{{ $employee->designation }}" class="form-control" placeholder="Designation">
            </div>
        </div> -->

        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Mobile No:</strong>
                <input type="text" name="mobileno" value="{{ $employee->mobileno }}" class="form-control" placeholder="Designation">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <textarea class="form-control"  style="height:150px" name="address" placeholder="Address here">{{ $employee->address }}</textarea>
            </div>
        </div>

        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Province:</strong>
                <input type="text" name="province" value="{{ $employee->province }}" class="form-control" placeholder="Province">
            </div>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Postal Code:</strong>
                <input type="text" name="postalcode" value="{{ $employee->postalcode }}" class="form-control" placeholder="Postal/ZIP code">
            </div>
        </div>


        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" value="{{ $employee->email }}" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Password:</strong>
                <input type="password" name="password" value="{{ $employee->password }}" class="form-control" placeholder="Password">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Select Role:</strong>
                 @foreach ($roles as $role)
                    <input type="checkbox" class="chkbox" id="{{ $role->role }}" value="{{ $role->role }}"> {{ $role->role }} </td>
                 @endforeach
                <input type="hidden" name="roles" id="roles" value="{{ $employee->roles }}" class="form-control" placeholder="Roles" required>
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
    var existingroles= $("#roles").val();
    //alert(existingroles);
    var strarray = existingroles.split(',');
    for (var i = 0; i < strarray.length; i++) {
        //alert(strarray[i]);
        $("#"+strarray[i]).prop("checked",true);
    }

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
