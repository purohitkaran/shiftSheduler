@extends('Employee.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Allocated Shifts</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('allocate.create') }}">Allocate</a>
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
            <th>S.No</th>
            <th>Date</th>
            <th>Shift</th>
            <th>Emp Code</td>
            <td>Employee Name</td>
            <td>Role</td>
            <th width="280px">Action</th>
        </tr>
        @php($i = 0)
        @foreach ($allocates as $allocate)
        <tr>
            <td>{{ ++$i }}</td>

            <td>{{ date('d-M-Y', strtotime($allocate->shiftdate)) }}</td>
            <td>{{$allocate->shift }}</td>
            <td>{{$allocate->empid }}</td>
            <td>{{ $allocate->empname }}</td>
            <td>{{ $allocate->role }}</td>

            <td>
                <form action="{{ route('allocate.destroy',$allocate->id) }}" method="POST">


                    <a class="btn btn-primary" href="{{ route('allocate.edit',$allocate->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $allocates->links() !!}

@endsection
