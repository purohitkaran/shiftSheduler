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

<form action="{{ route('shift.store') }}" method="POST">
    @csrf

     <div class="row">

        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="date" name="day" class="form-control" placeholder="Shift Date" required>

            </div>
</div>

        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Role:</strong>
                 <strong>Select Role:</strong>
                 <select name="role" id="role" class="form-control" required>
                 @foreach ($roles as $role)

                <option>{{ $role->role }}</option>

                       @endforeach
                       </select>
            </div>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Shift From:</strong>
                <input type="time" name="shiftfrom" class="form-control" placeholder="Shift From"  required>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Shift To:</strong>
                <input type="time" name="shiftto" class="form-control" placeholder="Shfit To" required>
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
