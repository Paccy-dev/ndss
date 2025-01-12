@extends('layouts.master')
@section('page_title')
Users
@stop
@section('page_header')
User Records Delete
@stop
@section('page_content')
<div class="row">
  <div class="col-sm-8">
    <div class="panel panel-red">
      <div class="panel-heading">
          User Record Delete
      </div>
      <div class="panel-body">
        <div class="">
          <form action="{{ route('users.delete', $user->id)}}" method="POST">
            @csrf
            @method('DELETE')
              <div class="card">
                  <p> Are you sure you want to delete User record: "{{$user->name}}" ?</p>
              </div>
              <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
              <a href="{{ route('users.index')}}" class="btn btn-secondary btn-sm" style="color:grey"><i class="fa fa-close"></i> Cancel</a>
          </form>   
        </div>
      </div>
    </div>
  </div>
</div>
@stop