@extends('layouts.master')
@section('page_title')
Pandemics
@stop
@section('page_header')
Pandemic Create
@stop
@section('page_content')
<div class="row">
  <div class="col-sm-8">
    <div class="panel panel-default">
      <div class="panel-heading">
        <b>Pandemic Register Form</b>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-sm-11">
            <form action="{{ route('pandemics.create')}}" method="POST">
              @csrf
              <div class="form-group col-sm-6">
                <p>Full name</p>        
                <input type="text" name="full_name" class="form-control" required>
              </div>  
              <div class="form-group col-sm-6">
                <p>Description</p>        
                <textarea type="text" name="description" class="form-control" required></textarea>
              </div>  
              <div class="form-group col-sm-6">
                <p>Discovery Location</p>        
                <input type="text" name="discovery_location" class="form-control" required>
              </div>  
              <div class="form-group col-sm-6">
                <p>Discovery Date</p>        
                <input type="date" name="discovery_date" class="form-control" required>
              </div>  
              <div class="form-group col-sm-4"></div>
              <div class="form-group col-sm-4">
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Create</button>
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