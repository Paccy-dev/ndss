@extends('layouts.master')
@section('page_title')
  Pandemics
@stop
@section('page_header')
  Pandemics
@stop
@section('page_content')
    <a class="btn btn-success" href="{{ route('pandemics.create')}}"><i class="fa fa-plus fa-success"></i> New Entry</a>
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
                                <th>#</th>
                                <th>Full_name</th>
                                <th>Description</th>
                                <th>Location</th>
                                <th>Date</th>
                                <th>Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($pandemics as $index=>$pandemic)
                              <tr class="odd gradeX">
                                <td>{{ $index+1 }}</td>
                                <td><a href="{{ route('pandemics.show',$pandemic->id) }}">{{$pandemic->full_name}}</a></td>
                                <td>{{$pandemic->description}}</td>
                                <td>{{$pandemic->discovery_location}}</td>
                                <td class="center">{{$pandemic->discovery_date}}</td>
                                <td>
                                  <a href="{{ route('pandemics.update',$pandemic->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                  <a href="{{ route('pandemics.delete',$pandemic->id) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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
