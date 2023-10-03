@extends('shift.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Shift</h2>
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

<form action="{{ route('shift.update',$shift->id) }}" method="POST">
     @csrf
    @method('PUT')

     <div class="row">

        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Day:</strong>
                <input type="date" name="day" value="{{ $shift->day }}" class="form-control" placeholder="Shift Date" required>

                </div>
        </div>


         <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Role:</strong>
                 <strong>Select Role:</strong>
                 <?php
                 $roles=DB::select("select * from roles order by role");
                 ?>
                 <select name="role" id="role" class="form-control" required>
                <option>{{ $shift->role }}</option>
                 @foreach ($roles as $role)

                <option>{{ $role->role }}</option>

                       @endforeach
                       </select>
            </div>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Shift From:</strong>
                <input type="time" name="shiftfrom" value="{{ $shift->shiftfrom }}" class="form-control" placeholder="First Name" required>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Shift To:</strong>
                <input type="time" name="shiftto"value="{{ $shift->shiftto }}"   class="form-control" placeholder="First Name" required>
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
