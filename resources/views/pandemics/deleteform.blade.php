@extends('layouts.master')
@section('page_title')
Pandemics
@stop
@section('page_header')
Pandemic Records Delete
@stop
@section('page_content')
<div class="row">
  <div class="col-sm-8">
    <div class="panel panel-red">
      <div class="panel-heading">
          Pandemic Record Delete
      </div>
      <div class="panel-body">
        <div class="">
          <form action="{{ route('pandemics.delete', $pandemic->id)}}" method="POST">
            @csrf
            @method('DELETE')
              <div class="card">
                  <p> Are you sure you want to delete Pandemic record: "{{$pandemic->full_name}}" ?</p>
              </div>
              <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
              <a href="{{ route('pandemics.index')}}" class="btn btn-secondary btn-sm" style="color:grey"><i class="fa fa-close"></i> Cancel</a>
          </form>   
        </div>
      </div>
    </div>
  </div>
</div>
@stop