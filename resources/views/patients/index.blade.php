@extends('layouts.master')
@section('page_title')
  Patients
@stop
@section('page_header')
  Patients
@stop
@section('page_content')
    <a class="btn btn-success" href="{{ route('patients.create')}}"><i class="fa fa-plus fa-success"></i> New Entry</a>
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
                                  <th>Age</th>
                                  <th>Location</th>
                                  <th>Gender</th>
                                  <th>Marital Status</th>
                                  <th>Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($patients as $patient)
                              <tr class="odd gradeX">
                                <td><a href="{{ route('patients.show',$patient->id) }}">{{$patient->full_name}}</a></td>
                                <td>{{$patient->birth_date}}</td>
                                <td>{{$patient->birth_location}}</td>
                                <td class="center">{{$patient->gender}}</td>
                                <td class="center">{{$patient->marital_status}}</td>
                                <td>
                                  <a href="{{ route('patients.update',$patient->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                  <a href="{{ route('patients.delete',$patient->id) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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
