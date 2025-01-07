@extends('layouts.master')
@section('page_title')
Health Centers
@stop
@section('page_header')
Health Center Details
@stop
@section('page_content')
<div class="row">
  <div class="col-sm-8">
    <div class="panel panel-primary">
      <div class="panel-heading">
          Health Center Details
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col col-sm-4">
            <p> Health Center ID:</p>
            <p> Health Center Full Name:</p>
            <p> Health Center Location:</p>
            <p>Health Center Head:</p>
          </div>
          <div class="col col-sm-6">
            <p>{{$healthCenter->id}}</p>
            <p>{{$healthCenter->full_name}}</p>
            <p>{{$healthCenter->location}}</p>
            <p>{{$healthCenter->head}}</p>
          </div>
        </div>
      </div>
      <div class="panel-footer">
        <a href="{{ route('healthCenters.update', $healthCenter->id)}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</a> 
        <a href="{{ route('healthCenters.delete', $healthCenter->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a> 
        <a href="{{ route('healthCenters.index', $healthCenter->id)}}" class="btn btn-secondary btn-sm"><i class="fa fa-close"></i> Cancel</a>        
      </div>
    </div>
  </div>
</div>
@stop 
