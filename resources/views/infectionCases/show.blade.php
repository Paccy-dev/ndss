@extends('layouts.master')
@section('page_title')
Infection Cases
@stop
@section('page_header')
Infection Case Details
@stop
@section('page_content')
<div class="row">
  <div class="col-sm-8">
    <div class="panel panel-primary">
      <div class="panel-heading">
          Infection Case Details
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col col-sm-4">
            <p> Infection Case ID:</p>
            <p> Infected patient:</p>
            <p> Associated Pandemic:</p>
            <p> Associated Health Center:</p>
            <p> Infection Date:</p>
          </div>
          <div class="col col-sm-6">
            <p>{{$infectionCase->id}}</p>
            <p>{{$patients->find($infectionCase->patient_id)->full_name}}</p>
            <p>{{$pandemics->find($infectionCase->pandemic_id)->full_name}}</p>
            <p>{{$healthCenters->find($infectionCase->health_center_id)->full_name}}</p>
            <p>{{$infectionCase->infection_date}}</p>
          </div>
        </div>
      </div>
      <div class="panel-footer">
        <a href="{{ route('infectionCases.update', $infectionCase->id)}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</a> 
        <a href="{{ route('infectionCases.delete', $infectionCase->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a> 
        <a href="{{ route('infectionCases.index', $infectionCase->id)}}" class="btn btn-secondary btn-sm"><i class="fa fa-close"></i> Cancel</a>        
      </div>
    </div>
  </div>
</div>
@stop 
