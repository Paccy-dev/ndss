@extends('layouts.master')
@section('page_title')
Infection Case
@stop
@section('page_header')
Infection Case Delete
@stop
@section('page_content')
<div class="row">
  <div class="col-sm-8">
    <div class="panel panel-red">
      <div class="panel-heading">
          Infection Case Delete
      </div>
      <div class="panel-body">
        <div class="">
          <form action="{{ route('infectionCases.delete', $infectionCase->id)}}" method="POST">
            @csrf
            @method('DELETE')
              <div class="card">
                  <p> Are you sure you want to delete Infection Case for: "{{$patients->find($infectionCase->patient_id)->full_name}}" ?</p>
              </div>
              <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
              <a href="{{ route('infectionCases.index')}}" class="btn btn-secondary btn-sm" style="color:grey"><i class="fa fa-close"></i> Cancel</a>
          </form>   
        </div>
      </div>
    </div>
  </div>
</div>
@stop