@extends('employee.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>Employee Information - {{ $employee->empfname }} {{ $employee->emplname }} </h4>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('employee.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Emp Code:</strong>
                {{ $employee->empid }}
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>First Name:</strong>
                {{ $employee->empfname }}
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Last Name:</strong>
                {{ $employee->emplname }}
            </div>
        </div>

         <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Designation:</strong>
                {{ $employee->designation }}
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $employee->email }}
            </div>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Mobile No:</strong>
                {{ $employee->mobileno }}
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Address:</strong>
                {{ $employee->address }}
            </div>
        </div>

         <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Province:</strong>
                {{ $employee->province }}
            </div>
        </div>

         <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Postal Code:</strong>
                {{ $employee->postalcode }}
            </div>
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Roles:</strong>
                {{ $employee->roles }}
            </div>
        </div>
    </div>
@endsection
<style>
    .form-group{
        font-size:1.5em !important;
        font-weight:100;
    }
</style>
