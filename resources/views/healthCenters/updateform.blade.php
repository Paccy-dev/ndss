@extends('layouts.master')
@section('page_title')
Health Centers
@stop
@section('page_header')
Health Center Update
@stop
@section('page_content')
<div class="row">
  <div class="col-sm-8">
    <div class="panel panel-default">
      <div class="panel-heading">
        <b>Health Center Update Form</b>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-sm-8">
            <form action="{{ route('healthCenters.update', $healthCenter->id)}}" method="POST">
              @csrf
              @method('PUT')
              <div class="form-group">
                <p>Health Center's Full Name</p>
                <input type="text" name="full_name" value="{{ $healthCenter->full_name}}" class="form-control" required>
              </div>
              <div class="form-group">
                <p for="">Health Center's Location</p>
                <input type="text" name="location" value="{{ $healthCenter->location}}"class="form-control" required>
              </div>
              <div class="form-group">
                <p for="">Health Center's Head</p>
                <input type="text" name="head" value="{{ $healthCenter->head}}" class="form-control">
              </div>
              <div>
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Update</button>
                <a href="{{ route('healthCenters.index')}}" class="btn btn-secondary btn-sm"><i class="fa fa-close"></i> Cancel</a>
              </div>
            </form>
          </div>
                  <!-- /.col-lg-6 (nested) -->
        </div>
              <!-- /.row (nested) -->
          </div>
          <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
  </div>
  <!-- /.col-lg-12 -->
</div>     
@stop