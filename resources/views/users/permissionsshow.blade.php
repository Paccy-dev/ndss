@extends('layouts.master')
@section('page_title')
  Users Permissions
@stop
@section('page_header')
  Users who has: "{{ $permission}}" permissions
@stop
@section('page_content')
<a class="btn btn-success" href="{{ route('register')}}"><i class="fa fa-plus fa-success"></i> New Entry</a>
<a class="btn btn-info" href="{{ route('users.permissionsindex')}}"><i class="fa fa-arrow-circle-o-left"></i> Back</a>
<div class="row">
      <div class="col-lg-12">
          <div class="panel panel-default">
              <div class="panel-heading">
                  DataTables
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                  <div class="table-responsive">
                      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                          <thead>
                              <tr>
                                  <th>Full_name</th>
                                  <th>Email - {{$permission}}</th>
                                  <th>Permissions</th>
                                  <th>Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($users as $user)
                              <tr class="odd gradeX">
                                <td><a href="{{ route('users.show',$user->id) }}">{{$user->name}}</a></td>
                                <td>{{$user->email}}</td>
                                <td>
                                  @if ($user->is_superUser)
                                    <span class="btn-warning btn-outline btn-xs">| Super User |</span>
                                  @endif
                                  @if($user->is_dataManager)
                                    <span class="btn-danger btn-outline btn-xs ">| Data Manager |</span>
                                  @endif
                                  @if($user->is_healthCenterManager)
                                    <span class="btn-info btn-outline btn-xs">| HealthCenter Manager |</span>
                                  @endif
                                  @if($user->is_public)
                                    <span class="btn-default btn-outline btn-xs">| Public |</span>
                                  @endif
                                </td>
                                <td>
                                  <a href="{{ route('users.update',$user->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                  <a href="{{ route('users.delete',$user->id) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                      </table>
                  </div>
                  <!-- /.table-responsive -->
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->

@stop
