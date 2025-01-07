@extends('layouts.master')
@section('page_title')
Pandemis
@stop
@section('page_header')
Pandemic Details
@stop
@section('page_content')
<div class="row">
  <div class="col-sm-8">
    <div class="panel panel-primary">
      <div class="panel-heading">
          Pandemic Details
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col col-sm-4">
            <p> ID:</p>
            <p> FULL NAME:</p>
            <p> DESCRIPTION: </p>
            <p> DISCOVERY LOCAION: </p>
            <p> DISCOVERY DATE: </p>
          </div>
          <div class="col col-sm-6">
            <p>{{$pandemic->id}}</p>
            <p>{{$pandemic->full_name}}</p>
            <p>{{$pandemic->description}}</p>
            <p>{{$pandemic->discovery_location}}</p>
            <p>{{$pandemic->discovery_date}}</p>
          </div>
        </div>
      </div>
      <div class="panel-footer">
        <a href="{{ route('pandemics.update', $pandemic->id)}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</a> 
        <a href="{{ route('pandemics.delete', $pandemic->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a> 
        <a href="{{ route('pandemics.index', $pandemic->id)}}" class="btn btn-secondary btn-sm"><i class="fa fa-close"></i> Cancel</a>        
      </div>
    </div>
  </div>
</div>
@stop 
