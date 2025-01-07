@extends('layouts.master')
@section('page_title')
Health Centers
@stop
@section('page_header')
Health Center Create
@stop
@section('page_content')

<div class="row">
  <div class="col-sm-8">
    <div class="panel panel-default">
      <div class="panel-heading">
        <b>Health Center Create Form</b>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-sm-8">
            <form action="{{ route('healthCenters.create')}}" method="POST">
              @csrf
              <div class="form-group">
                <p>Health Center's Full Name</p>
                <input type="text" name="full_name" class="form-control" required>
              </div>
              <div class="form-group">
                <p for="">Health Center's Location</p>
                <input type="text" name="location" class="form-control" required>
              </div>
              <div class="form-group">
                <p for="">Health Center's Head</p>
                <input type="text" name="head" class="form-control">
              </div>
              <div>
                <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Create</button>
                <a href="{{ route('healthCenters.index')}}" class="btn btn-secondary"><i class="fa fa-close"></i> Cancel</button>
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