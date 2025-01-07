@extends('layouts.master')
@section('page_title')
  Health Centers
@stop
@section('page_header')
  Health Centers
@stop
@section('page_content')
    <a class="btn btn-success" href="{{ route('healthCenters.create')}}"><i class="fa fa-plus fa-success"></i> New Entry</a>
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
                                <th>Location</th>
                                <th>Head</th>
                                <th>Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($healthCenters as $index=>$healthCenter)
                              <tr class="odd gradeX">
                                <td>{{ $index+1 }}</td>
                                <td><a href="{{ route('healthCenters.show',$healthCenter->id) }}">{{$healthCenter->full_name}}</a></td>
                                <td>{{$healthCenter->location}}</td>
                                <td>{{$healthCenter->head}}</td>
                                <td>
                                  <a href="{{ route('healthCenters.update',$healthCenter->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                  <a href="{{ route('healthCenters.delete',$healthCenter->id) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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
