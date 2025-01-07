@extends('layouts.master')
@section('page_title')
Pandemics
@stop
@section('page_header')
Pandemic Update
@stop
@section('page_content')
<div class="row">
  <div class="col-sm-8">
    <div class="panel panel-default">
      <div class="panel-heading">
        <b>Pandemic Update Form</b>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-sm-11">
            <form action="{{ route('pandemics.update', $pandemic->id)}}" method="POST">
              @csrf
              @method('PUT')
              <div class="form-group col-sm-6">
                <p>Full name</p>        
                <input type="text" name="full_name" value="{{ $pandemic->full_name }}" class="form-control" required>
              </div>  
              <div class="form-group col-sm-6">
                <p>Description</p>        
                <textarea type="text" name="description" class="form-control" required>
                  {{ $pandemic->description }}
                </textarea>
              </div>  
              <div class="form-group col-sm-6">
                <p>Discovery Location</p>        
                <input type="text" name="discovery_location" value="{{ $pandemic->discovery_location }}" class="form-control" required>
              </div>  
              <div class="form-group col-sm-6">
                <p>Discovery Date</p>        
                <input type="date" name="discovery_date"  value="{{ $pandemic->discovery_date }}" class="form-control" required>
              </div>  
              <div class="form-group col-sm-4"></div>
              <div class="form-group col-sm-4">
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Update</button>
                <a href="{{ route('pandemics.index')}}" class="btn btn-secondary btn-sm"><i class="fa fa-close"></i> Cancel</a>
              </div>
              <div class="form-group col-sm-4"></div>
          </form>       
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@stop