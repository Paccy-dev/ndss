@extends('layouts.master')
@section('page_title')
Patients
@stop
@section('page_header')
Patient Details
@stop
@section('page_content')
<div class="row">
  <div class="col-sm-8">
    <div class="panel panel-primary">
      <div class="panel-heading">
          Patient Details
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col col-sm-4">
            <p> FULL NAME:</p>
            <p> BIRTH DATE: </p>
            <p> BIRTH LOCAION: </p>
            <p> ID No:  </p>
            <p> GENDER:</p>
            <p> MARITAL STATUS:</p>
          </div>
          <div class="col col-sm-6">
            <p>{{$patient->full_name}}</p>
            <p>{{$patient->birth_date}}</p>
            <p>{{$patient->birth_location}}</p>
            <p>{{$patient->id_no}}</p>
            <p>{{$patient->gender}}</p>
            <p>{{$patient->marital_status}}</p>
          </div>
        </div>
      </div>
      <div class="panel-footer">
        <a href="{{ route('patients.update', $patient->id)}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</a> 
        <a href="{{ route('patients.delete', $patient->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a> 
        <a href="{{ route('patients.index', $patient->id)}}" class="btn btn-secondary btn-sm"><i class="fa fa-close"></i> Cancel</a>        
      </div>
    </div>
  </div>
</div>
@stop 
