@extends('shift.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Role</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('role.index') }}"> Back</a>
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

<form action="{{ route('role.update',$role->id) }}" method="POST">
     @csrf
    @method('PUT')

     <div class="row">


        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Role:</strong>
                <input type="text" name="role" value="{{ $role->role }}" class="form-control" placeholder="First Name" required>
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
