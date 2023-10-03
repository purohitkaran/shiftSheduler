@extends('employee.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Employees</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('employee.create') }}"> Add New Employee</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Emp Code</td>
            <td>First Name</td>
            <th>Last Name</th>
            <!-- <th>Designation</th> -->
            <th>Address</th>
            <th>Province</th>
            <th>Postal Code</th>
            <th>Email</th>
            <th>Roles</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $employee->empid }}</td>
            <td>{{ $employee->empfname }}</td>
            <td>{{ $employee->emplname }}</td>
            <!-- <td>{{ $employee->designation }}</td> -->
            <td>{{ $employee->address }}</td>
            <td>{{ $employee->province }}</td>
            <td>{{ $employee->postalcode }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->roles }}</td>
            <td>
                <form action="{{ route('employee.destroy',$employee->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('employee.show',$employee->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('employee.edit',$employee->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $employees->links() !!}

@endsection
