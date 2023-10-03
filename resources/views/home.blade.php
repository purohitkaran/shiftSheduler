@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <!-------------- admin dashboard ---------------------->
    @if (Auth::user()->id==1)
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-warning">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome to Dashboard!') }}
                    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Roles Managment</h5>
        <p class="card-text">Add/Update/View/Delete Roles.</p>
        <a href="/role" class="btn btn-primary">Continue</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Employees Managment</h5>
        <p class="card-text">Add/Update/View/Delete Employee.</p>
        <a href="/employee" class="btn btn-primary">Continue</a>
      </div>
    </div>
  </div>

</div>
                    <div class="row">

                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Shifts Management</h5>
                                <p class="card-text">Add/Delete/update/View Shifts.</p>
                                <a href="/shift" class="btn btn-primary">Continue</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6" hidden>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Allocate Shifts</h5>
                                <p class="card-text">Allocate/View/Delete Allocation.</p>
                                <a href="/allocate" class="btn btn-primary">Continue</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Available Employees</h5>
                                <p class="card-text">View</p>
                                <a href="/shiftemployee" class="btn btn-primary">Continue</a>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
        <!----------------- end of admin dashboard --------------->
        @else
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-warning">{{ __('Dashboard - Employee') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome to Dashboard!') }}
                    <div class="row">





                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Shifts Management</h5>
                                <p class="card-text">Add/Delete/update/View Shifts.</p>
                                <a href="/shiftemployee" class="btn btn-primary">Continue</a>
                            </div>
                        </div>
                    </div>



                    </div>
                </div>
            </div>
        </div>

        @endif

    </div>
</div>
@endsection
