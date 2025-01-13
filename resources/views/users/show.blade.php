@extends('layouts.master')
@section('page_title')
Patients
@stop
@section('page_header')
Patient Details
@stop
@section('page_content')
<div class="row">
  <div class="col-sm-8">
    <div class="panel panel-primary">
      <div class="panel-heading">
          Patient Details
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col col-sm-4">
            <p> FULL NAME:</p>
            <p> Email </p>
            <p> Permissions</p>
          </div>
          <div class="col col-sm-6">
            <p>{{$user->name}}</p>
            <p>{{$user->email}}</p>
              @if ($user->is_superUser)
                <span class="btn-warning btn-outline btn-xs">Super User</span>
              @endif
              @if($user->is_dataManager)
                <span class="btn-danger btn-outline btn-xs ">Data Manager</span>
              @endif
              @if($user->is_healthCenterManager)
                <span class="btn-info btn-outline btn-xs">HealthCenter Manager</span>
              @endif
              @if($user->is_public)
                <span class="btn-default btn-outline btn-xs">Public</span>
              @endif
            </td>
            </p>
          </div>
        </div>
      </div>
      <div class="panel-footer">
        <a href="{{ route('users.update', $user->id)}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</a> 
        <a href="{{ route('users.delete', $user->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a> 
        <a href="{{ route('users.index', $user->id)}}" class="btn btn-secondary btn-sm"><i class="fa fa-close"></i> Cancel</a>        
      </div>
    </div>
  </div>
</div>
@stop 
